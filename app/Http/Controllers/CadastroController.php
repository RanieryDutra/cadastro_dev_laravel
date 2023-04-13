<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CadastroDev;
use stdClass;

class CadastroController extends Controller
{
    public function cadastro(Request $request)
    {
        $dev = new stdClass;
        $dev->tipoDev = '';
        $dev->senioridade = '';
        $dev->techs1 = '';
        $dev->techs2 = '';
        $dev->techs3 = '';
        $dev->techs4 = '';
        $dev->techs5 = '';
        $dev->techs6 = '';
        $dev->techs7 = '';



        return view('cadastro', ['dev' => $dev]);
    }

    public function salvar(Request $request)
    {
        //Realizar validação dos dados do formulário recebidos no request // inclusão
        if ($request->input('_token') != '' && $request->input('id') == '') {
            $request->validate([
                'nome' => 'required|min:4|max:14',
                'sobrenome' => 'required|min:4|max:20',
                'email' => 'email',
                'tipoDev' => 'required',
                'senioridade' => 'required',
                'xp' => 'required|min:10|max:50'
            ]);

            CadastroDev::create($request->all());
        }
        //edição
        if ($request->input('_token') != '' && $request->input('id') != '') {
            $developer = CadastroDev::find($request->input('id'));
            //dd($developer);
            $update = $developer->update($request->all());

            if ($update) {
                echo 'Update realizado com sucesso';
            } else {
                echo 'Update apresentou problema';
            }
        }
        return redirect()->route('site.home');
    }
}
