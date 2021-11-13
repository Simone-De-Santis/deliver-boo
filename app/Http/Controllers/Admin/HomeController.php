<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use App\Models\Product;

class HomeController extends Controller
{

    public function index(User $user)
    {
        // Authenticated user id
        $id = auth()->user()->id;
        // Details authenticated user
        $user = User::find($id);
        // Products authenticated user
        $products = Product::where('user_id', $id)->get();
        return view('admin.home', compact('user', 'products'));
    }
}
