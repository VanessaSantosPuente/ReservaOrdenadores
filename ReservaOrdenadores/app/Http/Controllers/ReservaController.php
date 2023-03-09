<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ordenador;
use App\Models\Hora;
use App\Models\Jornada;
use App\Models\Reserva;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reservas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $fecha)
    {
        $reservasLista = array();
        $fechaArray = explode('-', $fecha);
        $jornadas = Jornada::where('anio',intval($fechaArray[0]))->where('mes',intval($fechaArray[1]))->where('dia',intval($fechaArray[2]))->get();

        foreach($jornadas as $jornada){
            $reservas = Reserva::where('idJornada', $jornada)->get();
            array_push($reservasLista, $reservas);
        }
        $ordenadores = Ordenador::all();
        return view('reservas.edit', compact(['reservasLista','ordenadores']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
