<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class LoginController extends Controller
{
    ///            VERIFICAÇÃO DE LOGIN
    public function Login(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('view.dashboard');
        }else{

            return view ('login');
        }
    }

    ///            REGISTRO
    public function Cadastrar(Request $request){
        $dadosUsers = $request->All();
        
        $valida = Validator::make($dadosUsers, [
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
        ]);
        
        if($valida->fails()){
            return 'Dados inválidos'.$valida->errors(true). 500;
        }
        
        $valida_email_anterior = $dadosUsers['email'];
        $dadosUsers1 = User::where('email', '=', $valida_email_anterior)->first();
        if($dadosUsers1){
            return redirect()->route('user.registrofail');
        }else{
            $dadosUsers = User::create($dadosUsers);
            return redirect()->route('user.login');
        }
    }


    
}
