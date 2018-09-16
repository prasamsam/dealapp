<?php

namespace App\Http\Controllers\Back;

use Illuminate\Support\Facades\Request;
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

    public function logInAction(){
        try{

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
            $this->data('title',$this->title('Add Product'));
        }catch(\Exception $e){
            die($e->getMessage());
        }finally{
            return view($this->page.'')
        }
    }
}
