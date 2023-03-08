@extends('layouts.plantilla')
@section('titulo', 'Calendario reservas')
@section('contenido')
    <h1 class="text-3xl font-bold underline">Calendario Fechas</h1>
        <div class="border-blue-600 border-2 flex mb-4">
            <div class="w-1/3 p-2">
                <input type="date" id="calendario" name="calendario">
                <a href="{{route('reservas.create')}}" class="bazul">Reservar</a>
            </div>
        </div>
@endsection
