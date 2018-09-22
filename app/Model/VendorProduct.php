<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class VendorProduct extends Model
{
    protected $table = 'vendor-product';
    public $fillable = ['Productname','Productdescription','Productcategory','Productimage','Price','Saleprice','Offerprice'];
}
