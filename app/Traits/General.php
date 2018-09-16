<?php

namespace App\Traits;

use Illuminate\Support\Facades\Config;

trait General
{
    public $data = [];

    public function data($key, $value)
    {
        if (!isset($key)) throw new \Exception('Key not defined');

        return $this->data[$key] = $value;
    }

    public function title($front, $seperator = ' - ', $back = null)
    {
        if (!isset ($back)) {
            $back = Config::get('site.name');
        }
        return $front . $seperator . $back;
    }
}
