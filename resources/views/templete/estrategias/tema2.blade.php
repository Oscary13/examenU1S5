@extends('templete.layout.templete3')

@section('titulo')
    <h1 id="t">Definir los conceptos de lógica de acceso,
        presentación y negocio a datos.</h1>
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
        El control de acceso lógico es la principal línea de defensa para la mayoría de los sistemas, permitiendo prevenir
        el ingreso de personas no autorizadas a su información. Para controlar el acceso se emplean 2 procesos:
        identificación y autenticación. <br>

        Se denomina identificación al momento en que el usuario se da a conocer en el sistema; y autenticación a la
        verificación que realiza el sistema sobre esa identificación



    </p>
    <span class="image main"><img src="https://image.slidesharecdn.com/unidad3-seguridadlgica-111122064312-phpapp02/95/unidad-3-seguridad-lgica-6-728.jpg?cb=1321944456"
            alt="" /></span>
    <p>
        Es más eficiente que los usuarios sean identificados y autenticados sólo una vez, pudiendo a partir de ahí acceder a
        todas las aplicaciones y datos a los que permita su perfil, tanto local como remotamente. Esto se denomina single
        login o sincronización de passwords. <br>

        Una posible técnica de implementación de esta identificación única sería el uso de un servidor de autenticaciones
        sobre el que los usuarios se identifican y que se encarga posteriormente de autenticarlos sobre los restantes
        equipos a los que pueden acceder. Este servidor no debe ser necesariamente un equipo independiente, pudiendo tener
        sus funciones distribuidas tanto geográfica como lógicamente. Es el caso de servidores LDAP en GNU/Linux y Active
        Directory en Windows Server


    </p>
   
@endsection
