<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/home.css" >
    <title>Bem vindo ao cadastro dev</title>
</head>
<body>
    <nav>
        <div class="logo">Logo</div>
        <a href="{{ route('site.contato') }}">Contato</a>
        <a href="{{ route('site.cadastro') }}">Cadastro de Dev</a>
        <a href="{{ route('site.home') }}">Home</a>
    </nav>

    <div class="titulo-site">
        <h1 id="titulo">Bem vindo ao Cadastro Dev</h1>
    </div>

    <div class="campo">
        <form method="post" action={{ route('site.pesquisar') }} >
            @csrf
            <label for="pesquisa"><strong>Pesquisa</strong></label>
            <input type="text" name="pesquisa" id="pesquisa" >
            <button class="botao" type="submit" onsubmit="">Pesquisar</button>
        </form>
    </div>

    <div id="informacao-pagina">
        <div class="div-table">
            <table border="1" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Lado da aplicação</th>
                        <th>Senioridade</th>
                        <th>Tecnologias</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                
                <tbody class="div-content">
                    @foreach ($desenvolvedores as $desenvolvedor)
                        <tr align="center">
                            <td>{{ $desenvolvedor->id }}</td>
                            <td>{{ $desenvolvedor->nome }}</td>
                            <td>{{ $desenvolvedor->tipoDev }}</td>
                            <td>{{$desenvolvedor->senioridade}}</td>
                            <td> {{$desenvolvedor->techs1}}
                                 {{$desenvolvedor->techs2}}
                                 {{$desenvolvedor->techs3}}
                                 {{$desenvolvedor->techs4}}
                                 {{$desenvolvedor->techs5}}
                                 {{$desenvolvedor->techs6}}
                                 {{$desenvolvedor->techs7}}
                            </td>
                            <td><a href="{{ route('site.editar', $desenvolvedor->id) }}">Editar</a></td>
                            <td><a href="{{ route('site.excluir', $desenvolvedor->id) }}">Excluir</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>


<!-- 

    {{$desenvolvedor->senioridade == 1 ? "Junior" : ""}}
    {{$desenvolvedor->senioridade == 2 ? "Pleno" : ""}}
    {{$desenvolvedor->senioridade == 3 ? "Senior" : ""}}


    {{$desenvolvedor->techs1 == 1 ? "HTML" : ""}}
    {{$desenvolvedor->techs2 == 2 ? ",CSS" : ""}}
    {{$desenvolvedor->techs3 == 3 ? ",Javascript" : ""}}
    {{$desenvolvedor->techs4 == 4 ? ",PHP" : ""}}
    {{$desenvolvedor->techs5 == 5 ? ",C#" : ""}}
    {{$desenvolvedor->techs6 == 6 ? ",Python" : ""}}
    {{$desenvolvedor->techs7 == 7 ? ",Java" : ""}}
-->