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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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
    <form  action={{ route('site.endereco') }} method="post">
        
        @csrf
        
        
        <div class="campo campoCep">
            <label for="cep"><strong>CEP</strong></label>
            <input type="text" name="cep" id="cep" class="cep" required>
        </div>
        
        
        <div class="campo campoLogradouro">
        <fieldset class="grupo endereco">
            <label for="logradouro"><strong>Logradouro</strong></label>
            <input type="text" name="logradouro" id="logradouro"  required>
        </div>

        <div class="campo campoNumero">
            <label for="numero"><strong>Numero</strong></label>
            <input type="text" name="numero" id="numero"  required>
        </div>

        <div class="campo campoComplemento">
            <label for="complemento"><strong>Complemento</strong></label>
            <input type="text" name="complemento" id="complemento"  required>
        </div>

        <div class="campo">
            <label for="bairro"><strong>Bairro</strong></label>
            <input type="text" name="bairro" id="bairro"  required>
        </div>

        </fieldset>

        <div class="campo campoUF">
                <label for="uf" ><strong>Estado</strong></label>
                <select id="uf" name="uf" id="uf" required>
                    <option selected name="uf" value="option">Selecione</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>

            <button class="botao" type="submit" onsubmit="">Buscar endereço</button>

    </form>

    <script>

        //<input type="hidden" name="id" value="" >
		$("#cep").focusout(function(){
            //console.log($(this).val());
            var cep = $(this).val();
			//Início do Comando AJAXa
			$.ajax({
				//O campo URL diz o caminho de onde virá os dados
				//É importante concatenar o valor digitado no CEP
				//url: '/endereco/' + $(this).val(),
                url: "{{ route('site.busca') }}",
				//Aqui você deve preencher o tipo de dados que será lido,
				//no caso, estamos lendo JSON.
				type: 'GET',
                dataType: 'json',
                data:{cep:cep},
				//SUCESS é referente a função que será executada caso
				//ele consiga ler a fonte de dados com sucesso.
				//O parâmetro dentro da função se refere ao nome da variável
				//que você vai dar para ler esse objeto.
				success: function(resposta){
					//Agora basta definir os valores que você deseja preencher
					//automaticamente nos campos acima.
                    /*alert('Sucesso');
                    console.log(resposta);*/
					$("#logradouro").val(resposta.logradouro);
					$("#complemento").val(resposta.complemento);
					$("#bairro").val(resposta.bairro);
					$("#cidade").val(resposta.localidade);
					$("#uf").val(resposta.uf);
					//Vamos incluir para que o Número seja focado automaticamente
					//melhorando a experiência do usuário
					$("#numero").focus();
				},
                error: function(xhr) {
                    console.log(xhr);
                    alert('Cep incorreto ou não encontrado');
                }
			});
		});
	</script>
    </div>
    </div>
</body>
</html>