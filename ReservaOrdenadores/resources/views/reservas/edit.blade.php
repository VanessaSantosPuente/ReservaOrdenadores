@extends('layouts.plantilla')
@section('titulo', 'Ordenadores Disponibles')
@section('contenido')
<h1 class="text-3xl font-bold underline">Ordenadores Disponibles</h1>
<div class="border-blue-600 border-2 flex mb-4">
    <div class="w-1/3 p-2">
            @foreach ($ordenadores as $ordenador)
                <?php $cuenta=0 ?>
                @foreach($reservasLista as $r)
                    @if($r->idUser == null && $ordenador->id==$r->idOrdenador)
                    <?php $cuenta++ ?>
                    @endif
                @endforeach
            <div>
                <figure>
                <figcaption>{{$ordenador->nombre}}</figcaption>
                    @if($cuenta==12)
                    <img src="{{asset('assets/imagenes/portatil_verde.png')}}" alt="{{$ordenador->nombre}}}" height="200" width="200">
                    @elseif($cuenta<12 && $cuenta>0)
                    <img src="{{asset('assets/imagenes/portatil_naranja.png')}}" alt="{{$ordenador->nombre}}}" height="200" width="200">
                    @else
                    <img src="{{asset('assets/imagenes/portatil_rojo.png')}}" alt="{{$ordenador->nombre}}}" height="200" width="200">
                    @endif
                </figure>
            </div>
            <div>
                @foreach ($reservasLista as $reserva)
                    @if ($reserva->idOrdenador == $ordenador->id)
                        @if ($reserva->idUser == null)
                            <form action="{{route("reservas.update",$reserva)}}" method="post" enctype="multipart/form-data" class="float-left mx-1 my-1">
                                @csrf
                                <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">{{substr($reserva->jornada->hora->intervalo, 0, 5)}}</button>
                            </form>
                        @else
                            <button class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded float-left mx-1 my-1" disabled>{{substr($reserva->jornada->hora->intervalo, 0, 5)}}</button>
                        @endif
                    @endif
                @endforeach
            </div>
            @endforeach

    </div>

</div>
<a href="{{route('reservas.index')}}" class="bazul mx-1 my-1">Volver Calendario</a>
<br>
@endsection
