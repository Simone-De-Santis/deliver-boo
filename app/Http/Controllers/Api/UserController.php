<?php

namespace App\Http\Controllers\Api;
//Import model
use App\User;
use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('categories')->get();
        return response()->json($users);
    }
}
