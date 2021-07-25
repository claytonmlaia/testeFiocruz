<?php

namespace App\Http\Controllers;

use App\Models\Escolaridades;
use App\Models\Municipios;
use App\Models\Ufs;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{

    public function index()
    {
        $escolaridades = Escolaridades::get();
        $ufs = Ufs::get();
        $municipios = Municipios::select('municipios.municipio', 'municipios.id')
            ->join('ufs','municipios.ufs_id','ufs.id')
            ->where('municipios.ufs_id', 10)
            ->get();

        //dd($municipios);
        return view('usuarios.index', compact('escolaridades', 'ufs', 'municipios'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //dd($request);
        $usuarios = new Usuarios();
        $usuarios->ufs_id =             $request->uf;
        $usuarios->escolaridades_id =   $request->formacao;
        $usuarios->municipios_id =      $request->municipio;
        $usuarios->nome =               $request->nome;
        $usuarios->cpf =                $request->cpf;
        $usuarios->data_nascimento =    $request->dtNascimento;
        $usuarios->brasileiro =         $request->nacionalidade;
        $usuarios->save();

        // flash(__('msgUsuarios.planilha.salvar'))->success();
        return redirect(url('/LST'));
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function lista()
    {
        $listaUsuarios = Usuarios::get();
        return view('usuarios.lista', compact('listaUsuarios'));
    }

    public function setaMunicipios($id)
    {
        $municipios = Municipios::select('municipios.municipio', 'municipios.id')
            ->join('ufs','municipios.ufs_id','ufs.id')
            ->where('municipios.ufs_id', $id)
            ->get();
        return json_encode($municipios);
    }
}
