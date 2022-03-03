@extends('templete.layout.templete4')

@section('titulo')
    <h1 id="t">Explicar el proceso de planificación en tres niveles.
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
        <strong>Nivel de presentación:</strong><br>
        El nivel de presentación es la interfaz de usuario y de comunicación de la aplicación, donde el usuario final
        interactúa con la aplicación. Su objetivo principal es mostrar información al usuario y recopilar datos de este.
        Este primer nivel se puede ejecutar en un navegador web como una aplicación de desktop o una interfaz gráfica de
        usuario (GUI). Los niveles de presentación web se suelen desarrollar utilizando HTML, CSS y JavaScript. Las
        aplicaciones de desktop se pueden escribir en una variedad de lenguajes, dependiendo de la plataforma.
    </p>
    <span class="image main"><img src="https://www.ecured.cu/images/e/e3/CapaPresentac.PNG" alt="" /></span>

    <p>
        <strong>Nivel de aplicación:</strong> <br>
        El nivel de aplicación, también conocido como el nivel lógico o medio, es el núcleo de la aplicación. En este nivel,
        se procesa la información recopilada en el nivel de presentación, a veces con otra información en el nivel de datos,
        mediante la lógica empresarial; un conjunto específico de reglas empresariales. El nivel de aplicación también puede
        añadir, suprimir o modificar datos en el nivel de datos. <br>
        El nivel de aplicación normalmente se desarrolla utilizando Python, Java, Perl, PHP o Ruby, y se comunica con el
        nivel de datos mediante llamadas a las API.

    </p>
    <span class="image main"><img
            src="https://sites.google.com/site/tareasdemarcela/_/rsrc/1468861356291/capa-de-aplicacion/capa%20de%20aplicacion.gif"
            alt="" /></span>

    <p>
        <strong>Nivel de datos:</strong><br>
        El nivel de datos, a veces denominado nivel de base de datos, nivel de acceso a datos o backend, es donde se
        almacena y gestiona la información procesada por la aplicación. Puede ser un sistema de gestión de base de datos
        relacional como PostgreSQL, MySQL, MariaDB, Oracle, DB2, Informix o Microsoft SQL Server, o en un servidor de bases
        de datos NoSQL como Cassandra, CouchDB o MongoDB. <br>
        En una aplicación de tres niveles, toda la comunicación pasa por el nivel de aplicación. Los niveles de presentación
        y de datos no pueden comunicarse directamente entre sí.


    </p>
    <span class="image main"><img
            src="https://sites.google.com/site/basesdedatosss2015/_/rsrc/1472780766500/1-introduccion-a-las-bases-de-datos/4-arquitectura-de-los-sgbd/1-4-3-nivel-interno/8.jpg?height=297&width=400"
            alt="" /></span>

    <p>
        <strong>Nivel (tier) frente a capa (layer)</strong> <br>
        En las discusiones de la arquitectura de tres niveles, el término capa se utiliza a menudo indistintamente y
        erróneamente para nivel, como en "capa de presentación" o "capa lógica empresarial".



    </p>
    <span class="image main"><img
            src="https://jjegonzalezf.files.wordpress.com/2013/03/image21.png"
            alt="" /></span>
@endsection
