<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use League\Flysystem\Exception;

class VendorController extends BackController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function vendorLoginAction(Request $request){
        try{
            $username = $request('Username');
            $password = $request('Password');

        }catch(\Exception $e){
            die($e->getMessage());
        }finally{

        }
    }

    public function myProducts()
    {
        try{
            $this->data('title',$this->title('Vendors'));
        }catch(\Exception $e){
            die($e->getMessage());
        }finally{
            return view($this->page.'Vendors.my.products',$this->data);
        }
    }

    public function addProduct()
    {
        try{
            $this->data('title',$this->title('Add Product'));
        }catch(\Exception $e){
            die($e->getMessage());
        }finally{
            return view($this->page.'Vendors.add.product',$this->data);
        }
    }

    public function addProductAction(Request $request){
        try{
            $this->validate($request,[
               ''
            ]);
        }catch(\Exception $e){
            die($e->getMessage());
        }finally{

        }
    }
}