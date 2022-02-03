@extends('templete.layout.templete')

@section('titulo')
    <h1>Conceptos de Cliente y Servidor</h1>

@endsection

@section('imagen1')

@endsection

@section('subtitulo1')
    <h2>Definicion Cliente/Servidor</h2>

@endsection
@section('parrafoSub1')
    <p>
        La expresión cliente servidor se utiliza en el ámbito de la informática. En dicho contexto, se llama cliente al
        dispositivo que requiere ciertos servicios a un servidor. La idea de servidor, por su parte, alude al equipo que
        brinda servicios a las computadoras (ordenadores) que se hallan conectadas con él mediante una red.
    </p>
    <p>

        El concepto de cliente servidor, o cliente-servidor, refiere por lo tanto a un modelo de comunicación que
        vincula a varios dispositivos informáticos a través de una red. El cliente, en este marco, realiza peticiones de
        servicios al servidor, que se encarga de satisfacer dichos requerimientos.
    </p>
@endsection
@section('imagen2')
    <span class="image main"><img src="https://upload.wikimedia.org/wikipedia/commons/1/1c/Cliente-Servidor.png"
            alt="" /></span>
@endsection
@section('parrafo2')
    <p>En el caso de las aplicaciones consideradas dentro del grupo de <strong>Clientes</strong>, tal como hemos dicho las
        funcionalidades
        están basadas en la utilización de un Servicio que es provisto justamente por las del otro grupo, teniendo en este
        conjunto todo el Software que si bien hace uso de las partes físicas del equipo (Componentes de Hardware) no tiene
        la capacidad de generar procesos por sí mismo.
    </p>
    <p>
        Es por ello que para que funcionen necesita contar con un <strong>Servidor</strong> como sustento, siendo éste el
        que le brinda el
        acceso y la base a su funcionamiento, siendo un claro ejemplo de ello los ordenadores que están conectados mediante
        un nodo a un ordenador principal que le brinda las funciones y los datos necesarios para ejecutar una orden
        específica.
    </p>
@endsection

@section('imagen3')
    <span class="image main"><img
            src="https://www.researchgate.net/profile/Fabio-Guerrero-2/publication/270510755/figure/fig4/AS:392065037946888@1470486997434/Figura-7-Configuracion-cliente-servidor-sistema-de-practicas.png"
            alt="" /></span>

    <p>
        En el caso opuesto encontramos el de los Servidores, siendo en este caso una plataforma en el cual se brindan los
        distintos Servicios que están en un funcionamiento constante esperando por la solicitud del Cliente para poder
        funcionar en conjunto, enviando la información solicitada y la respuesta a cada requerimento de acción, cohesionando
        inclusive distintos Servicios al mismo tiempo, y pudiendo actuar con varios Clientes a la vez. <br> 

        Esto permite no solo la aplicación de <strong>Redes</strong> de una extensión determinada (como Redes LAN de Área de tipo local, a
        nivel hogareño o empresarial, o más amplias Redes WAN) a un sistema determinado, sino también realizar tareas
        integrándose a un Servidor determinado dentro de este espacio, o bien trabajar en forma autónoma, simplemente con el
        Cliente que esté presente en cada terminal aislado. <br>

        Es posible ello ya que si bien el Servidor es el sustento para algunas funciones del Cliente, no debemos olvidar que
        éste último cuenta también por su parte con todo tipo de Aplicaciones y Archivos que están alojados en forma local
        allí, brindándole una autonomía absoluta en su funcionamiento para dichas tareas. <br>


    </p>
@endsection
