@extends('layouts.plantilla')
@section('titulo', 'listado Animales')
@section('contenido')
    <h1 class="text-3xl font-bold underline">Calendario Fechas</h1>
        <div class="border-green-600 border-2 flex mb-4">
            <div class="w-1/3 p-2">
                <input type="date" id="calendario" name="calendario">
            </div>
        </div>
@endsection
