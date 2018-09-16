<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackController extends Controller
{
    protected $appType = 'Back';
    protected $page;
    public function __construct(){
        $this->data('appType',$this->appType);
        $this->page = $this->appType.'.Pages.';
    }


}
