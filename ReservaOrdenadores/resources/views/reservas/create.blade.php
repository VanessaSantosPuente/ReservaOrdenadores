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
                    <img src="{{asset('assets/imagenes/portatil_verde.png')}}" alt="{{$ordenador->nombre}}}">
                    <figcaption>$ordenador['name']</figcaption>
                </figure>
            </div>
            @endforeach
    </div>
</div>
@endsection
