<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendamento;

class DashboardController extends Controller
{
    public function index(){
        return view ('home');
    }

    public function DashBoard(Request $request){
        $dadosAgendamento = Agendamento::query();
        $dadosAgendamentos = $dadosAgendamento->get();
        return view ('dashboard',[
            'registro'=>$dadosAgendamentos
        ]);
    }

    public function Apagar(Agendamento $id){
        $id->delete();
        return redirect()->route('view.dashboard');
    }


    public function Lista(){
        $dadosAgendamento = Agendamento::query();
        $dadosAgendamentos = $dadosAgendamento->get();
        return view ('lista',[
            'registro'=>$dadosAgendamentos
        ]);
    }
    public function ApagarLista(Agendamento $id){
        $id->delete();
        return redirect()->route('view.lista');
    }
}
