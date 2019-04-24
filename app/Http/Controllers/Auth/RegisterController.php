<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'surname1' => ['required', 'string', 'max:255'],
            'surname2' => [ 'string', 'max:255'],
            'telephone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'CP' => ['required', 'string', 'max:255'],
            'NIF' => [ 'string', 'max:255'],
            'nationality' => ['string', 'max:255'],
            'NIE' => [ 'string', 'max:255'],
            //'typeUser' => ['required', 'in:trabajador,cliente'],
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
            'email' => $data['email'],
            'surname1' => $data['surname1'],
            'surname2' => $data['surname2'],
            'telephone' => $data['telephone'],
            'address' => $data['address'],
            'CP' => $data['CP'],
            'NIF' => $data['NIF'],
            'nationality' => $data['nationality'],
            'NIE' => $data['NIE'],
            //'typeUser' => $data['typeUser'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
