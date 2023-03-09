@extends('layouts.plantilla')
@section('titulo', 'Ordenadores Disponibles')
@section('contenido')
<h1 class="text-3xl font-bold underline">Ordenadores Disponibles</h1>
<div class="border-blue-600 border-2 flex mb-4">
    <div class="w-1/3 p-2">
            <input type="date" value="<?php $fecha ?>">
            @foreach ($ordenadores as $ordenador)
            <div>
                <figure>
                <figcaption>{{$ordenador->nombre}}</figcaption>
                    <img src="{{asset('assets/imagenes/portatil_verde.png')}}" alt="{{$ordenador->nombre}}}" height="200" width="200">
                </figure>
            </div>
            <div>
                @foreach ($reservasLista as $reserva)
                    @if ($reserva->idOrdenador == $ordenador->id)
                        <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">{{substr($reserva->jornada->hora->intervalo, 0, 5)}}</button>
                    @endif
                @endforeach
            </div>
            @endforeach
    </div>
</div>
@endsection
