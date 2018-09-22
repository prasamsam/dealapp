<?php

namespace App\Http\Controllers\Back;
use App\Model\Admin;
use Illuminate\Http\Request;
class DashboardController extends BackController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function logIn()
    {
        try{
            $this->data('title',$this->title('Admin Login'));
        }
        catch(\Exception $e){
            die($e->getMessage());
        }
        finally{
            return view($this->page . 'Login.login', $this->data);
        }
    }

    public function logInAction(Request $request){
        try{
            $username = $request('Username');
            $password = $request('Password');
            $remember = isset($request->remember) ? true : false;


        }
        catch(\Exception $e){
            die($e->getMessage());
        }
        finally{

        }
    }


    public function adminPanelHome()
    {
        try {
            $this->data('title',$this->title('Dashboard'));

        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . 'Admin.dashboard', $this->data);
        }
    }

    public function addVendor()
    {
        try{
            $this->data('title',$this->title('Add Vendors'));
        }catch(\Exception $e){
            die($e->getMessage());
        }finally{
            return view($this->page . 'Admin.add.vendor', $this->data);
        }
    }

    public function addVendorAction(Request $request){
        try{
            $this->validate($request,[
                'Company' =>'required',
                'Username' =>'required|unique:vendors,Username|min:6',
                'Email' =>'required|unique:vendors,Email|email',
                'Firstname' => 'required',
                'Lastname' =>'required',
                'Password' => 'required|min:6|confirmed',
                'Address' => 'required',
                'Phonenumber' => 'required',
                'City' => 'required',
                'Country' => 'required',
                'Postalcode' =>'required'

                ]);
            $data['Company'] = $request->input('Company');
            $data['Username'] = $request->input('Username');
            $data['Email'] =$request->input('Email');
            $data['Firstname'] = $request->input('Firstname');
            $data['Middlename'] = $request->input('Middlename');
            $data['Lastname'] = $request->input('Lastname');
            $data['Password'] = bcrypt($request->input('Password'));
            $data['Address'] = $request->input('Address');
            $data['Phonenumber'] = $request->input('Phonenumber');
            $data['City'] = $request->input('City');
            $data['Country'] = $request->input('Country');
            $data['Postalcode'] = $request->input('Postalcode');

            if(Admin::create($data)){
                return redirect()->route('admin_dashboard')->with('success','New vendor added successfully.');
            }
            return redirect()->back()->with('error','There was problem');

        }catch(\Exception $e){
            die($e->getMessage());
        }finally{

        }
    }
}
