@extends('layouts.app')

@phps

@endphp

@include('layouts.navMenu')

@section('title')

@endsection

@section('content')
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header">
                <h2>Cadastrar Usuários</h2>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <form>
                        <label class="form-check-label" for="inlineRadio1">Escolha sua nacionalidade</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                            <label class="form-check-label" for="inlineRadio1">Brasileiro (a)</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Estranjeiro (a)</label>
                        </div>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nome completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo em letras maiúsculas">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="digite seu CPF, somente números">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">Data de nascimento</label>
                                <input type="date" class="form-control" id="dtNascimento" name="dtNascimento">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="inputEmail4">UF de nascimento</label>
                                <input type="text" class="form-control" id="uf" name="uf" placeholder="Informe o UF de nascimento">
                            </div>
                            <div class="form-group col-md-8">
                                <label for="inputPassword4">Município de nascimento</label>
                                <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Informe o município de nascimento">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputEstado">Nível de formação</label>
                                <select id="formacao" name="formacao" class="form-control">
                                    <option selected>Escolher...</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>




                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Salvar</button>
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
        //
    </script>
@endsection
