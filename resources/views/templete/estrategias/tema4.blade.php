@extends('templete.layout.templete3')

@section('titulo')
    <h1 id="t">Explicar el proceso de desarrollo de logica de
        acceso a datos, lógica de presentación de
        datos y lógica de negocio o lógica de
        aplicación. </h1>
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
        La programación por capas es un estilo de programación en el que el objetivo primordial es la separación de la
        lógica de negocios de la lógica de diseño; un ejemplo básico de esto consiste en separar la capa de datos de la capa
        de presentación al usuario. La ventaja principal de este estilo es que el desarrollo se puede llevar a cabo en
        varios niveles y, en caso de que sobrevenga algún cambio, sólo se ataca al nivel requerido sin tener que revisar
        código entremezclado. <br><br>

        Se agrupan por cada capa una serie de recomendaciones basadas en el modelo de tres capas propuesto en el subsistema
        de Arquitectura, en el área Arquitectura Tecnológica, de MADEJA. Se han realizado estudios y recomendaciones sobre
        de las tecnologías más recomendables para la arquitectura propuesta y se presentan una serie de pautas tanto a nivel
        funcional como para la construcción e integración de cada capa. <br><br>

        La ventaja de la variedad de tecnologías disponibles para el desarrollo de las diferentes capas de las aplicaciones
        Java, presenta el inconveniente de la utilización conjunta de varias de ellas. Debido a esto se deben establecer
        unos criterios que hagan posible una integración óptima entre las tecnologías empleadas. Estos criterios se han
        recogido en forma de pautas que se describen en esta área. <br><br>


    </p>

    <span class="image main"><img src="https://spuzi.github.io/Spuzipedia/arquitectura3capas/arquitectura3capas.png"
            alt="" /></span>

    <p>
        El control de acceso lógico es la principal línea de defensa para la mayoría de sistemas, permitiendo prevenir el
        ingreso de personas no autorizadas a su información. Para controlar el acceso se emplean 2 procesos: identificación
        y autenticación. <br>

        Se denomina identificación al momento en que el usuario se da a conocer en el sistema; y autenticación a la
        verificación que realiza el sistema sobre esa identificación. <br>

        Es más eficiente que los usuarios sean identificados y autenticados sólo una vez, pudiendo a partir de ahí acceder a
        todas las aplicaciones y datos a los que permita su perfil, tanto local como remotamente. Esto se denomina single
        login o sincronización de passwords. <br>

        Una posible técnica de implementación de esta identificación única sería el uso de un servidor de autenticaciones
        sobre el que los usuarios se identifican y que se encarga posteriormente de autenticarlos sobre los restantes
        equipos a los que pueden acceder. Este servidor no debe ser necesariamente un equipo independiente, pudiendo tener
        sus funciones distribuidas tanto geográfica como lógicamente. Es el caso de servidores LDAP en GNU/Linux y Active
        Directory en Windows Server. <br>
    </p>
@endsection
