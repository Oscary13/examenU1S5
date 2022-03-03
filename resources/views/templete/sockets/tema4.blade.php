@extends('templete.layout.templete6')

@section('titulo')
    <h1 id="t">Explicar el proceso del uso de sockets en
        aplicaciones Cliente/Servidor.
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
        Hacer que 2 aplicaciones se comuniquen entre si, Para entender esto primero debes saber como se efectua una
        comunicación humana.
    </p>
    <ul>
        <li>El que habla.</li>
        <li>El que escucha.</li>
        <li>Por donde pasan los datos.</li>
        <li>El tema de conversación.</li>
    </ul>
    <p>
        En una comunicación humana, todos los humanos estamos escuchando, cuando alguien nos habla entonces empezamos una
        comunicación y de la comunicación hay un lugar por donde pasa el sonido, espero me entiendan.
    </p>
    <p>
        <strong>Para que dos aplicaciones se comuniquen debe haber:</strong> <br>
    <ul>
        <li>Servidor (el que escucha). El servidor siempre escucha por un puerto (por donde pasan los datos) lo que el
            cliente diga y si tiene respuesta, entonces responde.</li>
        <li>Cliente (el que habla). Normalmente el cliente se conecta al servidor por el puerto y le empieza a enviar
            peticiones y esperando respuestas.</li>
        <li>Por donde pasan los datos, realmente es por un puerto de entrada para el servidor y un puerto de salida para el
            cliente.</li>
        <li>El tema de conversación (protocolo), para que halla comunicación entre las 2 aplicaciones, estas deben estar
            programadas para responderse entre si, lo cual se denomina protocolo.</li>
    </ul>
    </p>
    <span class="image main">
        <img src="https://laurmolina7821.files.wordpress.com/2013/03/seerv.jpg"
            alt="" />
    </span>
    <p>
        <strong>Las aplicaciones también pueden ser:</strong><br>
    <ul>
        <li>Servidor: Aplicación que esta a la espera de que se conecte el cliente.</li>
        <li>Cliente: Aplicación que se conecta al servidor.</li>
        <li>Cliente/Servidor: Aplicación que es cliente y servidor al mismo tiempo, ejemplo una aplicación de chat, la cual
            puede enviar mensaje a otras aplicaciones y al mismo tiempo esta a la espera de que otras aplicaciones le envíen
            mensajes.</li>
    </ul>
    </p>
  

    <p>
        <strong>La comunicación entre 2 aplicaciones puede ser:</strong> <br>
        <ul>
            <li><strong>Remota:</strong> cuando las aplicaciones están en diferentes computadoras, la aplicación cliente se conecta la dirección IP y puerto del servidor.</li>
            <li><strong>Local:</strong> cuando las 2 aplicaciones están en la misma computadora, se usa la dirección IP de LOOPBACK la cual es LOCALHOST  o 127.0.0.1.</li>
        </ul>

    </p>
@endsection
