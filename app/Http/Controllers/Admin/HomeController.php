<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //// Added 'index' function to return the 'home' page of the 'adimin' section
    public function index()
    {
        return view('admin.home');
    }
}
