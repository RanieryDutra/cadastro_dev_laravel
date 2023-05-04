<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/formulario2.css" >
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
            <h1 id="titulo">Cadastro do endereço do Dev</h1>
            <p id="subtitulo">Complete suas informações</p>
            <br>
        </div>

    <div name="div-form">
    <form  action={{ route('site.cadastro') }} method="post">
        <input type="hidden" name="id" value="" >
        @csrf
        <fieldset class="grupo endereco">
        <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
        <div class="campo campoLogradouro">
            <label for="logradouro"><strong>Logradouro</strong></label>
            <input type="text" name="logradouro" id="logradouro" value="" required>
        </div>

        <!-- Campo do sobrenome com legenda "sobrenome" e css de classe "campo" -->
        <div class="campo campoLogradouro">
            <label for="sobrenome"><strong>Sobrenome</strong></label>
            <input type="text" name="sobrenome" id="sobrenome" value="" required>
        </div>
    </fieldset> 

        <div class="campo">
            <label for="email"><strong>E-mail</strong></label>
            <input type="text" name="email" id="email" value="" required>
        </div>

        <div class="campo">
            <label><strong> De qual lado da aplicação você desenvolve </strong></label>
            <label>
                <input type="radio" name="tipoDev" value="" >Front-end
            </label>
            <label>
                <input type="radio" name="tipoDev" value="" >Back-end
            </label>
            <label>
                <input type="radio" name="tipoDev" value="" >Full-Stack
            </label>
        </div>

        <div class="campo">
                <label for="senioridade" ><strong>Senioridade</strong></label>
                <select id="senioridade" name="senioridade" required>
                  <option selected name="senioridade" value="option">Selecione</option>
                  <option name="option" value="" >Júnior</option>
                  <option name="option" value="" >Pleno</option>
                  <option name="option" value="" >Sênior</option>
                </select>
            </div>

            <fieldset class="grupo">
                <!-- Campo de tecnologias para escolha de 1 ou mais opções para marcar (checkbox) e css de classe "campo" -->
                <div id="check">
                    <label><strong>Selecione as tecnologias que utiliza:</strong></label><br><br>
                    <input type="checkbox" id="tecnologia1" name="techs1" value="" >
                    <label for="tecnologia1"> HTML</label>
                    <input type="checkbox" id="tecnologia2" name="techs2" value="" >
                    <label for="tecnologia2"> CSS</label>
                    <input type="checkbox" id="tecnologia3" name="techs3" value="" >
                    <label for="tecnologia3"> JavaScript</label>
                    <input type="checkbox" id="tecnologia4" name="techs4" value="" >
                    <label for="tecnologia4"> PHP</label>
                    <input type="checkbox" id="tecnologia5" name="techs5" value="" >
                    <label for="tecnologia5"> C#</label>
                    <input type="checkbox" id="tecnologia6" name="techs6" value="" >
                    <label for="tecnologia6"> Python</label>
                    <input type="checkbox" id="tecnologia7" name="techs7" value="" >
                    <label for="tecnologia7"> Java</label>
                </div>
            </fieldset>

            <!-- Caixa de texto -->
            <div class="campo">
                <br>
                <label for="experiencia"><strong>Conte um pouco mais da sua experiência: </strong></label>
                <textarea rows="6" style="width: 26em" id="experiencia" name="xp" placeholder="Preencha aqui sua mensagem"></textarea>
            </div>
            <!--!= '' ? old('xp') : "Preencha aqui sua mensagem"-->
            <!-- Botão para enviar o formulário -->
            <button class="botao" type="submit" onsubmit="">Cadastrar endereço</button>
            <!--<div style="position:absolute; top:0px; left:0px; width:100%;" >
                <prev>
                    checked="{ $dev->tipoDev = "fullstack" ?? old('tipoDev') = "fullstack" ? "checked" : ""}}"
                </prev>

                old('xp') ?? "Preencha aqui sua mensagem" 
            </div>-->

    </form>
    </div>
    </div>
</body>
</html>