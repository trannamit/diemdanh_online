<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function show()
    {
        return view('owner.index');
    }

    public function showClass()
    {
        return view('owner.class_index');
    }

    public function showRollCall()
    {
        return view('owner.roll_call');
    }

    public function storeDayOff()
    {
        return view('owner.create_dayoff');
    }

    public function store()
    {
        return view('owner.add_class');
    }
}
