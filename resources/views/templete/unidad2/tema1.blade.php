@extends('templete.layout.templete2')

@section('titulo')
    <h1>Reconocer los componentes del modelo Cliente/Servidor.</h1>
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
        <strong>La arquitectura cliente servidor</strong> tiene dos partes claramente diferenciadas, por un lado, la parte
        del servidor y por
        otro la parte de cliente o grupo de clientes donde lo habitual es que un servidor sea una máquina bastante potente
        con un hardware y software específico que actúa de depósito de datos y funcione como un sistema gestor de base de
        datos o aplicaciones. <br />

    </p>
    <p>
        El más claro ejemplo de uso de una arquitectura cliente servidor es <strong>la red de Internet</strong> donde
        existen ordenadores de
        diferentes personas conectadas alrededor del mundo, las cuales se conectan a través de los servidores de su
        proveedor de Internet por ISP donde son redirigidos a los servidores de las páginas que desean visualizar y de esta
        manera la información de los servicios requeridos viaja a través de Internet dando respuesta a la solicitud
        demandada. <br />
    </p>
    <p>
        La principal importancia de este modelo es que permite conectar a varios clientes a los servicios que provee un
        servidor y como sabemos hoy en día, la mayoría de las aplicaciones y servicios tienen como gran necesidad que puedan
        ser consumidos por varios usuarios de forma simultánea. <br />
    </p>
        <span class="image main"><img
            src="https://www.consultorio-virtual.com/manual-de-usuario/lib/modelo-cliente-servidor.png"
            alt="" /></span>
    <strong>Componentes:</strong>
    <ul>
        <li><strong>Red:</strong> Una red es un conjunto de clientes, servidores y base de datos unidos de una manera física
            o no física en
            el que existen protocolos de transmisión de información establecidos.</li>

        <li><strong>Cliente:</strong> El concepto de cliente hace referencia a un demandante de servicios, este cliente
            puede ser un
            ordenador como también una aplicación de informática, la cual requiere información proveniente de la red para
            funcionar.</li>

        <li><strong>Servidor:</strong> Un servidor hace referencia a un proveedor de servicios, este servidor a su vez puede
            ser un
            ordenador o una aplicación informática la cual envía información a los demás agentes de la red.</li>
        <li>Clientes usuales: Grandes corporaciones y gobiernos.</li>

        <li><strong>Protocolo:</strong> Un protocolo es un conjunto de normas o reglas y pasos establecidos de manera clara y concreta sobre
            el flujo de información en una red estructurada.</li>

        <li><strong>Servicios:</strong> Un servicio es un conjunto de información que busca responder las necesidades de un cliente, donde
            esta información pueden ser mail, música, mensajes simples entre software, videos, etc.</li>

        <li><strong>Base de datos:</strong> Son bancos de información ordenada, categorizada y clasificada que forman parte de la red, que
            son sitios de almacenaje para la utilización de los servidores y también directamente de los clientes.</li>
    </ul>
    <span class="image main"><img
            src="https://i.pinimg.com/736x/d8/c6/43/d8c6434d08bc8249a6fa3ec5b0f069ad.jpg"
            alt="" /></span>
            alt="" /></span>
@endsection
