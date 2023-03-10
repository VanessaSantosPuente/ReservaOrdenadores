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
                        var fechahoy = new Date(Date.now());
                        if(fecha.getDay()==0||fecha.getDay()==6){
                            document.cookie = "cookiefecha=; max-age=0";
                            location. reload();
                        }else if(fecha.getTime()>fechahoy.getTime()){
                            document.cookie = "cookiefecha=; max-age=0";
                            let dia = fecha.getDate();
                            let mes = parseInt(fecha.getMonth())+1;
                            let anio = fecha.getFullYear();
                            let cadenaFecha=`${anio}-${mes}-${dia}`;
                            document.cookie = "cookiefecha = " + cadenaFecha;
                            location. reload();
                        }else if(fecha.getDate()==fechahoy.getDate()&&fecha.getMonth()==fechahoy.getMonth()&&fecha.getFullYear()==fechahoy.getFullYear()){
                            document.cookie = "cookiefecha=; max-age=0";
                            let dia = fecha.getDate();
                            let mes = parseInt(fecha.getMonth())+1;
                            let anio = fecha.getFullYear();
                            let cadenaFecha=`${anio}-${mes}-${dia}`;
                            document.cookie = "cookiefecha = " + cadenaFecha;
                            location. reload();
                        }else{
                            document.cookie = "cookiefecha=; max-age=0";
                            location. reload();
                        }
                    }
                </script>
                <script>
                    var msg = '{{Session::get('alert')}}';
                    var existe = '{{Session::has('alert')}}';
                    if(existe){
                        alert(msg);
                    }
                </script>
                <?php
                if (isset($_COOKIE['cookiefecha'])) {
                    $fecha = $_COOKIE['cookiefecha']
                ?>
                    <a href="{{route('reservas.edit', $fecha )}}" class="bazul">Reservar</a>
                <?php
                }
                ?>
            </div>
        </div>
@endsection
