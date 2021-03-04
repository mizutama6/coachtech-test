<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test1()
    {
        return '建物です';
    }

    public function test2($room)
    {
        return "部屋番号は{$room}です";
    }
}
