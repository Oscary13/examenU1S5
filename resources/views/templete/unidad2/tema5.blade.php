@extends('templete.layout.templete')

@section('titulo')
    <h1>Reconocer las características de la arquitectura Cliente/Servidor.</h1>
@endsection

@section('imagen1')
@endsection

@section('subtitulo1')
    {{-- <h2>Computadoras centrales y dedicadas</h2> --}}
@endsection
@section('parrafoSub1')
    {{-- <span class="image main"><img
            src="https://cdsphp.files.wordpress.com/2013/11/cliente-servidor.jpg"
            alt="" /></span> --}}
    <p>
        <strong>Combinación de un cliente que interactúa con el usuario</strong>, y un servidor que interactúa con los
        recursos a compartir.
        El proceso del cliente proporciona la interfaz entre el usuario y el resto del sistema. El proceso del servidor
        actúa como un motor de software que maneja recursos compartidos tales como bases de datos, impresoras, Módem, etc.

    </p>
    <p>
        <strong>Las tareas del cliente y del servidor</strong> tienen diferentes requerimientos en cuanto a recursos de
        cómputo como
        velocidad del procesador, memoria, velocidad y capacidades del disco e input-output devices.
    </p>
    <p>
        <strong> Se establece una relación entre procesos distintos</strong>, los cuales pueden ser ejecutados en la misma
        máquina o en
        máquinas diferentes distribuidas a lo largo de la red.
    </p>
    <span class="image main"><img
        src="https://www.researchgate.net/profile/Fabio-Guerrero-2/publication/270510755/figure/fig4/AS:392065037946888@1470486997434/Figura-7-Configuracion-cliente-servidor-sistema-de-practicas.png"
        alt="" /></span>
    <p>
        <strong>Existe una clara distinción de funciones basadas en el concepto de ”servicio”</strong>, que se establece
        entre clientes y
        servidores.
    </p>
    <p>
        <strong>La relación establecida puede ser de muchos a uno</strong>, en la que un servidor puede dar servicio a
        muchos clientes,
        regulando su acceso a los recursos compartidos.
    </p>
    <p>
        <strong>Los clientes corresponden a procesos activos </strong>en cuanto a que son estos los que hacen peticiones de
        servicios. Estos
        últimos tienen un carácter pasivo, ya que esperan peticiones de los clientes.

    </p>
    <p>
        <strong>No existe otra relación entre clientes y servidores que no sea la que se establece a través del intercambio
            de
            mensajes entre ambos.</strong> El mensaje es el mecanismo para la petición y entrega de solicitudes de
        servicios.
    </p>
    <p>
        <strong>El ambiente es heterogéneo.</strong> La plataforma de hardware y el sistema operativo del cliente y del
        servidor no son
        siempre los mismos. Precisamente una de las principales ventajas de esta arquitectura es la posibilidad de conectar
        clientes y servidores independientemente de sus plataformas.
    </p>
    <p>
        <strong> El concepto de escalabilidad</strong> tanto horizontal como vertical es aplicable a cualquier sistema
        Cliente-Servidor. La
        escalabilidad horizontal permite agregar más estaciones de trabajo activas sin afectar significativamente el
        rendimiento. La escalabilidad vertical permite mejorar las características del servidor o agregar múltiples
        servidores.
    </p>
        <span class="image main"><img
            src="https://slideplayer.es/slide/94169/1/images/6/Caracter%C3%ADsticas+de+los+sistemas+cliente+servidor.jpg"
            alt="" /></span>

@endsection
