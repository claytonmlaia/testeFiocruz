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
                <h2>Usuários Cadastrados</h2>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <a class="btn btn-success" href="{{ url('/USR') }}" role="button" title="Detalhes do cadastro"><i class="fas fa-plus"></i> Novo</a>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col" class="bg-primary">Nome</th>
                            <th scope="col" class="bg-primary">Data de Nascimento</th>
                            <th scope="col" class="bg-primary">CPF</th>
                            <th scope="col" class="bg-primary">Cidade</th>
                            <th scope="col" class="bg-primary">Formação</th>
                            <th scope="col" class="bg-primary">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($listaUsuarios as $listaUsuario)
                        <tr>
                            <td>{{ $listaUsuario->nome }}</td>
                            <td>{{ \Carbon\Carbon::parse($listaUsuario->data_nascimento)->format('d/m/Y') }}</td>
                            <td>{{ $listaUsuario->cpf }}</td>
                            <td>@if($listaUsuario->ufs_id && $listaUsuario->municipios_id){{ $listaUsuario->municipio->municipio }} / {{ $listaUsuario->uf->sigla }} @else - @endif</td>
                            <td>{{ $listaUsuario->escolaridade->descricao }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ url('/') }}" role="button" title="Detalhes do cadastro"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-primary" href="{{ url('/') }}" role="button" title="Editar cadastro"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-danger" href="{{ url('/') }}" role="button" title="Excluír cadastro"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
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
