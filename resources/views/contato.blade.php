<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/CSS/contato.css" >
    <title>Contato</title>
</head>
<body>

    <div class="menus">
        <nav>
            <div class="logo">Logo</div>
            <a href="{{ route('site.contato') }}">Contato</a>
            <a href="{{ route('site.cadastro') }}">Cadastro de Dev</a>
            <a href="{{ route('site.home') }}">Home</a>
        </nav>
    </div>

    <div class="texto">
        <fieldset class="borda-texto">
            <h1>Contato</h1>
            <h3> Quer trabalhar conosco ? Envie um e-mail para nós xD </h3>
            <h3> Email: cadastrodev@gmail.com </h3>
        </fieldset>
    </div>
</body>
</html>