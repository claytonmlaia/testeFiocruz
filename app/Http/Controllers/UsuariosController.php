<?php

namespace App\Http\Controllers;

use App\Models\Escolaridades;
use App\Models\Municipios;
use App\Models\Ufs;
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
        //
        dd($request);
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
        //
        return view('usuarios.lista');
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
