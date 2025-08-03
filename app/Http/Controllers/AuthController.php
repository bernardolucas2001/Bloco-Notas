<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginSubmit(Request $request){
        $request->validate(
            [
            'text_username' => 'required|email',
            'text_password' => 'required|min:6|max:16'
            ],
            [
                'text_username.required' => 'O email deve ser obrigatorio',
                'text_username.email' => 'O email deve ser válido',
                'text_password.required' => 'A senha é obrigatoria',

                'text_password.min' => 'A senha deve ter pelo menos :min caracteres',
                'text_password.max' => 'A senha deve ter no máximo :max caracteres'

            ]
        );

        $username = $request->input('text_username');
        $password = $request->input('text_password');

        echo 'OK';

    }

    public function logout(){

    }
}
