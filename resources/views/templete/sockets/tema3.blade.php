@extends('templete.layout.templete6')

@section('titulo')
    <h1 id="t">Definir el concepto de sockets.
    </h1>
@endsection

@section('imagen1')
@endsection

@section('subtitulo1')
    {{-- <h2>Computadoras centrales y dedicadas</h2> --}}
@endsection
@section('parrafoSub1')
    {{-- <span class="image main"><img
            src="https://www.consultorio-virtual.com/manual-de-usuario/lib/modelo-cliente-servidor.png"
            alt="" /></span> --}}
    <p>
        Un socket en programación es un tunel de comunicación que ayuda a que 2 aplicaciones se comuniquen, los sockets son
        la base de internet y de sus protocolos como HTTP, FTP, SMTP, etc. <br><br>
        Los sockets son la base de los protocolos de internet, pero también los podemos utilizar para sacarle provecho, es
        decir mediante sockets podemos hacer que dos aplicaciones se comuniquen entre si. <br><br>
        Los sockets en Java o cualquier otro lenguaje de programación sirven para interconectar dos sistemas a través de la
        red, sólo utilizando un número ip o nombre de host y un puerto determinado. La arquitectura utilizada en los sockets
        es la de Cliente/Servidor. <br><br>
        Con el uso de sockets en Java se pueden desarrollar muchos sistemas, como por ejemplos chats, videos juegos online y
        multijugador o incluso una simple página web.


    </p>
    <span class="image main">
        <img src="http://2.bp.blogspot.com/-Hx6dwtBYaI8/Vp7dPlpVQOI/AAAAAAAAClg/Gg8aMV0eeYw/s1600/09%2BSockets%2By%2Bpuertos.png"
            alt="" />
    </span>
@endsection
