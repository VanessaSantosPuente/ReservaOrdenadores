@extends('layouts.plantilla')
@section('titulo', 'Ordenadores Disponibles')
@section('contenido')
<h1 class="text-3xl font-bold underline">Ordenadores Disponibles</h1>
<div class="border-blue-600 border-2 flex mb-4">
    <div class="w-1/3 p-2">
            @foreach ($reservas as $reserva)
                <div class="p-6 shadow-2xl">

                </div>
            @endforeach
    </div>
</div>
@endsection
