<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CadastroDev;

class PrincipalController extends Controller
{
    public function principal(Request $request)
    {

        $desenvolvedores = CadastroDev::get();
        /*where('nome', 'like', '%' . $request->input('nome') . '%')
            ->where('tipoDev', 'like', '%' . $request->input('tipoDev') . '%')
            ->where('senioridade', 'like', '%' . $request->input('senioridade') . '%')
            /*->where('techs', 'like', '%' . $request->input('techs') . '%')
            ->get();*/

        return view('home', ['desenvolvedores' => $desenvolvedores]);
    }

    public function editar($id)
    {
        $dev = CadastroDev::find($id);

        /*dd($dev);*/

        return view('cadastro', ['dev' => $dev]);
    }
}
