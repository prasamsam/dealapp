<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'vendors';
    public $fillable = ['Company','Username','Email','Firstname','Middlename','Lastname','Password','Address','Phonenumber','City','Country','Postalcode','utype','status'];
}
