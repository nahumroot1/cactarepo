<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
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
        // Lista de dominios permitidos
        $allowedDomains = ['gmail.com', 'outlook.com', 'hotmail.com','yahoo.com','yahoo.com.mx','live.com ','prodigy.net.mx ','icloud.com','msn.com ','aol.com']; 

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'regex:/^[\pL\s]+$/u'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                function ($attribute, $value, $fail) use ($allowedDomains) {
                    $domain = substr(strrchr($value, "@"), 1);
                    if (!in_array($domain, $allowedDomains)) {
                        $fail("El dominio del correo electrónico no es válido. Solo se permiten dominios como " . implode(', ', $allowedDomains) . ".");
                    }
                },
            ],
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
            'password' => bcrypt($data['password']),
        ]);
    }
}
