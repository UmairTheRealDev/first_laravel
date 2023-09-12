<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index()
    {
        return view('user');

    }
    public function store(Request $request)
    {
        echo "<pre
        >";
        print_r($request->all());

    }
    public function admin()
    {
        return view('admindashboard');
    }
}
