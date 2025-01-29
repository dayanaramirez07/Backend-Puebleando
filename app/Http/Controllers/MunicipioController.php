<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    public function consultarPorDepartamento($id)
    {
        $municipios = Municipio::where('departamento_id', $id)
            ->select('id', 'nombre')
            ->get();
        return response()->json($municipios);
    }
}
