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

    public function excluir($id)
    {
        CadastroDev::find($id)->delete();

        $desenvolvedores = CadastroDev::get();

        return view('home', ['desenvolvedores' => $desenvolvedores]);
    }

    public function pesquisar(Request $request)
    {
        $desenvolvedores = CadastroDev::where('nome', 'like', '%' . $request->input('pesquisa') . '%')
            ->orwhere('tipoDev', 'like', '%' . $request->input('pesquisa') . '%')
            ->orwhere('senioridade', 'like', '%' . $request->input('pesquisa') . '%')
            ->orwhere('techs1', 'like', '%' . $request->input('pesquisa') . '%')
            ->orwhere('techs2', 'like', '%' . $request->input('pesquisa') . '%')
            ->orwhere('techs3', 'like', '%' . $request->input('pesquisa') . '%')
            ->orwhere('techs4', 'like', '%' . $request->input('pesquisa') . '%')
            ->orwhere('techs5', 'like', '%' . $request->input('pesquisa') . '%')
            ->orwhere('techs6', 'like', '%' . $request->input('pesquisa') . '%')
            ->orwhere('techs7', 'like', '%' . $request->input('pesquisa') . '%')
            ->get();

        //dd($desenvolvedores->all());

        if ($desenvolvedores->all() == []) {
            /*$X = 'Verdadeiro';
            dd($X);*/
            $desenvolvedores = CadastroDev::get();
        } /*else {
            $X = 'Falso';
            dd($X);
        }*/

        return view('home', ['desenvolvedores' => $desenvolvedores]);
    }
}
