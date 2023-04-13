<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/formulario.css" >
    <title>Document</title>
</head>
<body>

        <nav>
        <div class="logo">Logo</div>
        <a href="{{ route('site.contato') }}">Contato</a>
        <a href="{{ route('site.cadastro') }}">Cadastro de Dev</a>
        <a href="{{ route('site.home') }}">Home</a>
        </nav>

        <div class="formu">

        <div>
            <h1 id="titulo">Cadastro de Devs</h1>
            <p id="subtitulo">Complete suas informações</p>
            <br>
        </div>

    <div name="div-form">
    <form  action={{ route('site.cadastro') }} method="post">
        <input type="hidden" name="id" value="{{ $dev->id ?? '' }}" >
        @csrf
        <fieldset class="grupo">
        <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
        <div class="campo">
            <label for="nome"><strong>Nome</strong></label>
            <input type="text" name="nome" id="nome" value="{{ $dev->nome ?? old('nome') }}" required>
        </div>

        <!-- Campo do sobrenome com legenda "sobrenome" e css de classe "campo" -->
        <div class="campo">
            <label for="sobrenome"><strong>Sobrenome</strong></label>
            <input type="text" name="sobrenome" id="sobrenome" value="{{ $dev->sobreNome ?? old('sobrenome') }}" required>
        </div>
    </fieldset> 

        <div class="campo">
            <label for="email"><strong>E-mail</strong></label>
            <input type="text" name="email" id="email" value="{{ $dev->email ?? old('email') }}" required>
        </div>

        <div class="campo">
            <label><strong> De qual lado da aplicação você desenvolve </strong></label>
            <label>
                <input type="radio" name="tipoDev" value="{{ $dev->tipoDev == "frontend" ?? old('tipoDev') == "frontend" ? "frontend" : "frontend"}}" {{$dev->tipoDev == "frontend" ?? old('tipoDev') == "frontend" ? "checked" : ""}}>Front-end
            </label>
            <label>
                <input type="radio" name="tipoDev" value="{{ $dev->tipoDev == "backend" ?? old('tipoDev') == "backend" ? "backend" : "backend" }}" {{$dev->tipoDev == "backend" ?? old('tipoDev') == "backend" ? "checked" : ""}}>Back-end
            </label>
            <label>
                <input type="radio" name="tipoDev" value="{{ $dev->tipoDev == "fullstack" ?? old('tipoDev') == "fullstack" ? "fullstack" : "fullstack"}}" {{$dev->tipoDev == "fullstack" ?? old('tipoDev') == "fullstack" ? "checked" : ""}}>Full-Stack
            </label>
        </div>

        <div class="campo">
                <label for="senioridade" ><strong>Senioridade</strong></label>
                <select id="senioridade" name="senioridade" required>
                  <option selected name="senioridade" value="option">Selecione</option>
                  <option name="option" value="{{ $dev->senioridade == 1 ?? old('senioridade') == 1 ? 1 : 1 }}" {{ $dev->senioridade == 1 ?? old('senioridade') == 1 ? "selected" : "" }}>Júnior</option>
                  <option name="option" value="{{ $dev->senioridade == 2 ?? old('senioridade') == 2 ? 2 : 2 }}" {{ $dev->senioridade == 2 ?? old('senioridade') == 2 ? "selected" : "" }}>Pleno</option>
                  <option name="option" value="{{ $dev->senioridade == 3 ?? old('senioridade') == 3 ? 3 : 3 }}" {{ $dev->senioridade == 3 ?? old('senioridade') == 3 ? "selected" : "" }}>Sênior</option>
                </select>
            </div>

            <fieldset class="grupo">
                <!-- Campo de tecnologias para escolha de 1 ou mais opções para marcar (checkbox) e css de classe "campo" -->
                <div id="check">
                    <label><strong>Selecione as tecnologias que utiliza:</strong></label><br><br>
                    <input type="checkbox" id="tecnologia1" name="techs1" value="{{ $dev->techs1 == 1 ?? old('tecnologia1') == 1 ? 1 : 1 }}" {{ $dev->techs1 == 1 ?? old('tecnologia1') == 1 ? 'checked' : '' }}>
                    <label for="tecnologia1"> HTML</label>
                    <input type="checkbox" id="tecnologia2" name="techs2" value="{{ $dev->techs2 == 2 ?? old('tecnologia2') == 2 ? 2 : 2 }}" {{ $dev->techs2 == 2 ?? old('tecnologia2') == 2 ? 'checked' : '' }}>
                    <label for="tecnologia2"> CSS</label>
                    <input type="checkbox" id="tecnologia3" name="techs3" value="{{ $dev->techs3 == 3 ?? old('tecnologia3') == 3 ? 3 : 3 }}" {{ $dev->techs3 == 3 ?? old('tecnologia3') == 3 ? 'checked' : '' }}>
                    <label for="tecnologia3"> JavaScript</label>
                    <input type="checkbox" id="tecnologia4" name="techs4" value="{{ $dev->techs4 == 4 ?? old('tecnologia4') == 4 ? 4 : 4 }}" {{ $dev->techs4 == 4 ?? old('tecnologia4') == 4 ? 'checked' : '' }}>
                    <label for="tecnologia4"> PHP</label>
                    <input type="checkbox" id="tecnologia5" name="techs5" value="{{ $dev->techs5 == 5 ?? old('tecnologia5') == 5 ? 5 : 5 }}" {{ $dev->techs5 == 5 ?? old('tecnologia5') == 5 ? 'checked' : '' }}>
                    <label for="tecnologia5"> C#</label>
                    <input type="checkbox" id="tecnologia6" name="techs6" value="{{ $dev->techs6 == 6 ?? old('tecnologia6') == 6 ? 6 : 6 }}" {{ $dev->techs6 == 6 ?? old('tecnologia6') == 6 ? 'checked' : '' }}>
                    <label for="tecnologia6"> Python</label>
                    <input type="checkbox" id="tecnologia7" name="techs7" value="{{ $dev->techs7 == 7 ?? old('tecnologia7') == 7 ? 7 : 7 }}" {{ $dev->techs7 == 7 ?? old('tecnologia7') == 7 ? 'checked' : '' }}>
                    <label for="tecnologia7"> Java</label>
                </div>
            </fieldset>

            <!-- Caixa de texto -->
            <div class="campo">
                <br>
                <label for="experiencia"><strong>Conte um pouco mais da sua experiência: </strong></label>
                <textarea rows="6" style="width: 26em" id="experiencia" name="xp"> {{ $dev->xp ?? old('xp') ?? "Preencha aqui sua mensagem" }} </textarea>
            </div>
            <!--!= '' ? old('xp') : "Preencha aqui sua mensagem"-->
            <!-- Botão para enviar o formulário -->
            <button class="botao" type="submit" onsubmit="">Concluído</button>

            <!--<div style="position:absolute; top:0px; left:0px; width:100%;" >
                <prev>
                    checked="{ $dev->tipoDev = "fullstack" ?? old('tipoDev') = "fullstack" ? "checked" : ""}}"
                </prev>
            </div>-->
    </form>
    </div>
    </div>
</body>
</html>