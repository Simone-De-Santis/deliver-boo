<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'activity_name' => ['required', 'string', 'max:100'],
            'province' => ['required', 'string', 'max:100'],
            'municipality' => ['string', 'max:100'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:100'],
            'zip' => ['required',  'digits:5'],
            'vat' => ['required', 'unique:users,vat', 'digits:11'],
            'telephone' => ['unique:users,telephone', 'digits_between:10,30'],
            'description' => ['required', 'string'],
            //! da modificare validazione url in image
            'url' => ['image'],
            'longitude' => ['digits_between:5,30'],
            'latitude' => ['digits_between:5,30'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'activity_name' => $data['activity_name'],
            'province' => $data['province'],
            'municipality' => $data['municipality'],
            'address' => $data['address'],
            'city' => $data['city'],
            'zip' => $data['zip'],
            'vat' => $data['vat'],
            'telephone' => $data['telephone'],
            'description' => $data['description'],

            'url' => Storage::put('uploads', $data['url']),



            'longitude' => $data['longitude'],
            'latitude' => $data['latitude'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }



    // public function store(array $data)
    // {
    //     $image_path = Storage::put('uploads', $data['url']);
    //     return
    // }
}
