<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VendorController extends BackController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function myProducts()
    {
        try{
            $this->data('title',$this->title('Vendors'));
        }catch(\Exception $e){
            die($e->getMessage());
        }finally{
            return view($this->page.'Vendors.my-products',$this->data);
        }
    }

    public function addProduct()
    {
        try{
            $this->data('title',$this->title('Add Product'));
        }catch(\Exception $e){
            die($e->getMessage());
        }finally{
            return view($this->page.'Vendors.add-product',$this->data);
        }
    }
}