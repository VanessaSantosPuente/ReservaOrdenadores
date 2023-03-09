@extends('layouts.plantilla')
@section('titulo', 'Calendario reservas')
@section('contenido')
    <h1 class="text-3xl font-bold underline">Calendario Fechas</h1>
        <div class="border-blue-600 border-2 flex mb-4">
            <div class="w-1/3 p-2">
                <input type="date" id="calendario" name="calendario" onchange="guardarFecha();">
                <script>
                    function guardarFecha(){
                        var fecha = new Date(calendario.value);
                        var fechahoy = Date.now();
                        if(fecha.getTime()>=fechahoy){
                            /*var xhr =  new XMLHttpRequest();
                            xhr.open("POST","index.blade.php",true);
                            xhr.send(fecha);*/
                            document.cookie = "cookiefecha = " + fecha;
                            location. reload()
                        }
                    }
                </script>
                <?php
                if (isset($_COOKIE['cookiefecha'])) {
                    $fecha = $_COOKIE['cookiefecha']
                ?>
                    <a href="{{route('reservas.create', $fecha )}}" class="bazul">Reservar</a>
                <?php
                }
                ?>
            </div>
        </div>
@endsection
