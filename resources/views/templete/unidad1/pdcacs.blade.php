@extends('templete.layout.templete')

@section('titulo')
    <h1>Proceso de Diagramación de Componentes de la Arquitectura Cliente Servidor</h1>

@endsection
@section('subtitulo1')
    <h2>Proceso de diagramación por niveles:</h2>

@endsection
@section('parrafoSub1')
    <p>
        <strong>El primer nivel:</strong> es responsable de la presentación y la interacción del usuario reside con los
        componentes de
        primer nivel. Estos componentes de cliente permiten al usuario interactuar con los procesos de segundo nivel de
        forma segura e intuitiva. WebSphere Application Server da soporte a varios tipos de cliente. Los clientes no acceden
        directamente a los servicios de tercer nivel. Por ejemplo, un componente de cliente proporciona un formulario en el
        que un cliente solicita productos. El componente de cliente envía este pedido a los procesos de segundo nivel, que
        comprueban las bases de datos del producto y realizan tareas que son necesarias para la facturación y el envío.
    </p>
    <p>
        <strong>Los procesos de segundo nivel:</strong> se denominan comúnmente como la capa lógica de la aplicación. Estos
        procesos
        gestionan la lógica empresarial de la aplicación y pueden acceder a los servicios de tercer nivel. La capa lógica de
        la aplicación es donde se produce la mayor parte del trabajo de proceso. Varios componentes de cliente pueden
        acceder simultáneamente a los procesos de segundo nivel, por lo que esta capa lógica de aplicación debe gestionar
        sus propias transacciones.
    </p>
    <p>
        <strong>Los servicios de tercer nivel:</strong> están protegidos del acceso directo por parte de los componentes del
        cliente que
        residen en una red segura. La interacción debe producirse a través de los procesos de segundo nivel.
    </p>
    <span class="image main"><img src="https://jorgesanchez.net/manuales/abd/arquitectura-oracle-web-resources/image/1.png"
        alt="" /></span>
    <p>
        <strong>Los tres niveles deben comunicarse entre sí.</strong> Abiertos, los protocolos estándar y las API expuestas simplifican esta
        comunicación. Puede escribir componentes de cliente en cualquier lenguaje de programación, como por ejemplo Java™ o
        C + +. Estos clientes se ejecutan en cualquier sistema operativo, hablando con la capa lógica de la aplicación. Las
        bases de datos del tercer nivel pueden ser de cualquier diseño, si la capa de aplicación puede consultarlas y
        manipularlas. La clave de esta arquitectura es la capa lógica de la aplicación.</p>
@endsection