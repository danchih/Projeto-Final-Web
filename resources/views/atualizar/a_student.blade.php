@extends('layouts.app')

@section('title', 'MatriculaAluno')

@section('content')

<script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
    </head>

<h2>Editar Cadastro do Aluno</h2>

<form class="row g-3" action="{{ route('student.edit.do', ['student' => $student->id ]) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="col-md-6">
        <label for="nome" class="form-label">Nome Completo</label>
        <input type="text" name="nome" class="form-control" id="nome" value="{{ $student->nome }}" >
        
    </div>

    <div class="col-md-6">
        <label for="CPF" class="form-label">CPF</label>
        <input type="text" name="CPF" class="form-control" id="CPF" value="{{ $student->CPF }}">
    </div>

    <div class ="col-md-6">

        <label for = "cep" class="form-label">CEP</label>
        <input type="text" name="cep" class ="form-control"  id="cep" value="{{$student->CEP}}" onblur="pesquisacep(this.value);" >

    </div>
    <div class ="col-md-6">
        <label for = "rua" class="form-label"> Rua</label>
        <input type="text" name="rua" class="form-control" id="rua" value="{{$student->endereco}}">
    </div>

    <div class ="col-md-6">
        <label for = "bairro" class="form-label"> Bairro</label>
        <input type="text" name="bairro" class="form-control" id="bairro" value="{{$student->bairro}}">
    </div>
    <div class ="col-md-6">
        <label for = "cidade" class="form-label"> Cidade</label>
        <input type="text" name="cidade" class="form-control" id="cidade" value="{{$student->cidade}}">
    </div>

    <div class="col-12">
        <label for="complemento" class="form-label">Complemento</label>
        <input type="text" name="complemento" class="form-control" id="complemento" value="{{ $student->complemento }}">
    </div>

    <select name="select">
        <label for="filme" class="form-label">Filme</label>
        <option value="valor1">Valor 1</option>
        <option value="valor2" selected>Valor 2</option>
        <option value="valor3">Valor 3</option>
    </select>

    <div class="col-12">
        <label for="filme" class="form-label">Filme</label>
        <input type="text" name="filme" class="form-control" id="filme" value="{{ $student->filme }}">
    </div>

    <input type="submit" class="btn btn-primary" value="Editar Cadastro">

</form>

@endsection