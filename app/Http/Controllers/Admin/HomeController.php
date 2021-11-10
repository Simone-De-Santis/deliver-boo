<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use App\Models\Product;
//^IMPORTO IL MODELLO AUTH
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index(User $user)
    {

        $id = auth()->user()->id; //^COSI FACENDO OTTENGO L'ID DELLO USER AUTENTICATO, OSSIA QUELLO CHE HA APPENA FATTO IL LOGIN.
        $user = User::find($id);  //^COSI FACENDO OTTENGO I DETTAGLI DELLO USER AUTENTICATO
        $products = Product::where('user_id', $id)->get(); //^COSI FACENDO OTTENGO TUTTI I PRODOTTI DOVE LO USER_ID E'UGUALE ALL'UTENTE ATTUALE
        //Penso che si possano passare anche solo i prodotti in teoria, essendo questa la pagina dove il ristoratore logga sarà la prima cosa che vorrà vedere.
        return view('admin.home', compact('user', 'products'));
    }
}
