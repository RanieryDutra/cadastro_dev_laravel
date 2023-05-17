<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    public function index()
    {

        /*$cep = $request->input('cep');

        $client = new Client();
        $response = $client->get("viacep.com.br/ws/{$cep}/json/");

        $endereco = json_decode($response->getBody(), true);*/

        //dd($endereco);

        return view('endereco');
    }

    public function buscaCep(Request $request)
    {

        $cep = $request->input('cep');

        $client = new Client();
        $response = $client->get('viacep.com.br/ws/' . $cep . '/json/');

        $endereco = json_decode($response->getBody(), true);

        return response()->json($endereco);
    }
}
