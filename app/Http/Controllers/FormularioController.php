<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendamento;

class FormularioController extends Controller
{
    public function formulario(){
        return view ('formSolicita');
    }

    public function formularioSalvar(Request $request){
        $dadosAgendamento = $request -> validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'cpf' => 'string|required',
            'tipo' => 'string|required',
            'data' => 'string|required',
            'horario' => 'string|required'
        ]);

        Agendamento::create($dadosAgendamento);
        return redirect()->route('home');
    }

    public function formularioDash(){
        return view ('formSolicita');
    }

    public function formularioSalvarDash(Request $request){
        $dadosAgendamento = $request -> validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'cpf' => 'string|required',
            'tipo' => 'string|required',
            'data' => 'string|required',
            'horario' => 'string|required'
        ]);

        Agendamento::create($dadosAgendamento);
        return redirect()->route('view.dashboard');
    }



    public function GerenciarDispositivo(Agendamento $id){
        //$dadosAgendamento = Agendamento::find($id);
  
        //dd($request);
        return view ('formSolicitaeditar',['registro'=> $id]);
    }

    public function AlterarBancoDispositivo(Agendamento $id, Request $request){
        $dadosAgendamento = $request -> validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'cpf' => 'string|required',
            'tipo' => 'string|required',
            'data' => 'string|required',
            'horario' => 'string|required'
        ]);
        $id->fill($dadosAgendamento);
        $id ->save();
        return redirect()->route('view.dashboard');
    }
}
