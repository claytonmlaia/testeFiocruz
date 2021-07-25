@extends('layouts.app')

@phps

@endphp

@include('layouts.navMenu')

@section('title')

@endsection
<style>
    #nome{
        text-transform: uppercase;
    }
</style>
@section('content')
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header">
                <h2>Cadastrar Usuários</h2>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <form name="frmUsuarios" id="frmUsuarios" action="#" method="post">
                        @csrf
                        <label class="form-check-label" for="inlineRadio1">Escolha sua nacionalidade</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nacionalidade" id="brasileiro" value="S" checked>
                            <label class="form-check-label" for="inlineRadio1">Brasileiro (a)</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nacionalidade" id="estranjeiro" value="N">
                            <label class="form-check-label" for="inlineRadio2">Estranjeiro (a)</label>
                        </div>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nome completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo em letras maiúsculas" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="digite seu CPF, somente números">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">Data de nascimento</label>
                                <input type="date" class="form-control" id="dtNascimento" name="dtNascimento" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="inputEmail4">UF de nascimento</label>
                                <select id="uf" name="uf" class="form-control">
                                    <option value="" selected>Selecione o estado...</option>
                                    @foreach($ufs as $uf)
                                        <option value="{{ $uf->id }}">{{ $uf->descricao }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="inputPassword4">Município de nascimento</label>
                                <select id="municipio" name="municipio" class="form-control">
                                    <<option value="">Selecione um municipio</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputEstado">Nível de formação</label>
                                <select id="formacao" name="formacao" class="form-control" required>
                                    <option value="" selected>Escolher...</option>
                                    @foreach($escolaridades as $escolaridade)
                                        <option value="{{ $escolaridade->id }}">{{ $escolaridade->descricao }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Salvar</button>
                    </form>
                </blockquote>
            </div>
        </div>
    </div>
@endsection

@section('control')
    <div class="container col-md-10"><br>
        <div id="list" class="row baseFloatRight">
            <a class="btn btn-primary" href="{{ url('/') }}" role="button"><i class="fas fa-home"></i> Início</a>&nbsp;&nbsp;
            <a class="btn btn-primary" href="{{ url('/') }}" role="button"><i class="fas fa-arrow-left"></i> Voltar</a>
        </div>
    </div><br>
@endsection

@section('endPageScript')
<script>
    $(document).ready(function(){
        $('select[name="uf"]').on('change', function(){
            var uf_id = $(this).val();
            $.ajax({
                url: '/LST/'+uf_id,
                type: 'GET',
                dataType: 'json',
                success: function(data){
                    $('select[name=municipio]').empty();
                    $('select[name=municipio]').append('<option value="">Selecione um municipio</option>');
                    $.each(data,function(key, value){
                        //console.log(data[key].areGeoSigla);
                        $('select[name=municipio]').append('<option value="'+value.id+'">'+value.municipio+'</option>');
                    });
                }
            })
        });
    });
</script>
<script>
    //MASCARAS
    $(document).ready(function(){
        $('#cpf').mask('999.999.999-99');
    });
</script>

<script>
    $(document).ready(function() {
        $('input:radio[name="nacionalidade"]').change(function() {
            if ($("input[name='nacionalidade']:checked")) {
                mudaRequisito($(this).val());
            } else {
                //...
            }
        });
    });
    function mudaRequisito(e) {
        if (e === "S"){
            document.getElementById("uf").disabled = false;
            document.getElementById("municipio").disabled = false;

            document.getElementById("cpf").required = true;
            document.getElementById("uf").required = true;
            document.getElementById("municipio").required = true;
        }else {
            document.getElementById("uf").disabled = true;
            document.getElementById("municipio").disabled = true;

            document.getElementById("cpf").required = false;
            document.getElementById("uf").required = false;
            document.getElementById("municipio").required = false;
        }
    }
</script>
@endsection
