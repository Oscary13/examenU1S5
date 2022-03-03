@extends('templete.layout.templete5')

@section('titulo')
    <h1 id="t">Reconocer el concepto del Modelo Vista
        Controlador (MVC) en las arquitecturas
        Cliente/Servidor.
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
        En líneas generales, MVC es una propuesta de arquitectura del software utilizada para separar el código por sus
        distintas responsabilidades, manteniendo distintas capas que se encargan de hacer una tarea muy concreta, lo que
        ofrece beneficios diversos. <br><br>

        <strong>MVC</strong> se usa inicialmente en sistemas donde se requiere el uso de interfaces de usuario, aunque en la
        práctica el
        mismo patrón de arquitectura se puede utilizar para distintos tipos de aplicaciones. Surge de la necesidad de crear
        software más robusto con un ciclo de vida más adecuado, donde se potencie la facilidad de mantenimiento,
        reutilización del código y la separación de conceptos.<br><br>

        Su fundamento es la separación del código en tres capas diferentes, acotadas por su responsabilidad, en lo que se
        llaman Modelos, Vistas y Controladores, o lo que es lo mismo, Model, Views & Controllers, si lo prefieres en inglés.
        En este artículo estudiaremos con detalle estos conceptos, así como las ventajas de ponerlos en marcha cuando
        desarrollamos.<br><br>

        <strong>MVC es un "invento"</strong> que ya tiene varias décadas y fue presentado incluso antes de la aparición de
        la Web. No
        obstante, en los últimos años ha ganado mucha fuerza y seguidores gracias a la aparición de numerosos frameworks de
        desarrollo web que utilizan el patrón MVC como modelo para la arquitectura de las aplicaciones web.
    </p>

    <span class="image main"><img src="https://desarrolloweb.com/archivoimg/general/2758.jpg" alt="" /></span>

    <p>
        <strong>Modelos</strong><br>
        Es la capa donde se trabaja con los datos, por tanto contendrá mecanismos para acceder a la información y también
        para actualizar su estado. Los datos los tendremos habitualmente en una base de datos, por lo que en los modelos
        tendremos todas las funciones que accederán a las tablas y harán los correspondientes selects, updates, inserts,
        etc. <br>
        No obstante, cabe mencionar que cuando se trabaja con MCV lo habitual también es utilizar otras librerías como PDO o
        algún ORM como Doctrine, que nos permiten trabajar con abstracción de bases de datos y persistencia en objetos. Por
        ello, en vez de usar directamente sentencias SQL, que suelen depender del motor de base de datos con el que se esté
        trabajando, se utiliza un dialecto de acceso a datos basado en clases y objetos. <br>

        <strong>Vistas</strong><br>
        Las vistas, como su nombre nos hace entender, contienen el código de nuestra aplicación que va a producir la
        visualización de las interfaces de usuario, o sea, el código que nos permitirá renderizar los estados de nuestra
        aplicación en HTML. En las vistas nada más tenemos los códigos HTML y PHP que nos permite mostrar la salida. <br>

        En la vista generalmente trabajamos con los datos, sin embargo, no se realiza un acceso directo a éstos. Las vistas
        requerirán los datos a los modelos y ellas se generará la salida, tal como nuestra aplicación requiera. <br>

        <strong>Controladores</strong><br>
        Contiene el código necesario para responder a las acciones que se solicitan en la aplicación, como visualizar un
        elemento, realizar una compra, una búsqueda de información, etc. <br>

        En realidad es una capa que sirve de enlace entre las vistas y los modelos, respondiendo a los mecanismos que puedan
        requerirse para implementar las necesidades de nuestra aplicación. Sin embargo, su responsabilidad no es manipular
        directamente datos, ni mostrar ningún tipo de salida, sino servir de enlace entre los modelos y las vistas para
        implementar las diversas necesidades del desarrollo. <br>
    </p>
@endsection
