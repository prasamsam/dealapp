<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    protected $apptype = 'Front';
    protected $page;

    public function __construct()
    {
        $this->page = $this->apptype.'Pages.';
    }
}
