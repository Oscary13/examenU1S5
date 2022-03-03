@extends('templete.layout.templete4')

@section('titulo')
    <h1 id="t">Identificar problemas de actualización y
        mantenimiento de aplicaciones multinivel.
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
        Para abrir una página Web en un navegador, normalmente se teclea el correspondiente URL o se pica en el hiperenlace
        oportuno. Una vez que se solicita esta petición mediante el protocolo HTTP y la recibe el servidor Web, éste
        localiza la página Web en su sistema de ficheros y la envía de vuelta al navegador que la solicitó. <br> <br>
        <strong>Aplicaciones multinivel:</strong><br>
        Al hablar de desarrollo de aplicaciones Web resulta adecuado presentarlas dentro de las aplicaciones multinivel. Los
        sistemas típicos cliente/servidor pertenecen a la categoría de las aplicaciones de dos niveles. La aplicación reside
        en el cliente mientras que la base de datos se encuentra en el servidor. En este tipo de aplicaciones el peso del
        cálculo recae en el cliente, mientras que el servidor hace la parte menos pesada, y eso que los clientes suelen ser
        máquinas menos potentes que los servidores. <br>
        Para solucionar estos problemas se ha desarrollado el concepto de arquitecturas de tres niveles: interfaz de
        presentación, lógica de la aplicación y los datos.

    </p>
    <span class="image main"><img src="https://www.infor.uva.es/~jvegas/cursos/buendia/pordocente/img3.gif"
            alt="" /></span>

    <p>
        La capa intermedia es el código que el usuario invoca para recuperar los datos deseados. La capa de presentación
        recibe los datos y los formatea para mostrarlos adecuadamente. Esta división entre la capa de presentación y la de
        la lógica permite una gran flexibilidad a la hora de construir aplicaciones, ya que se pueden tener múltiples
        interfaces sin cambiar la lógica de la aplicación.
        La tercera capa consiste en los datos que gestiona la aplicación. Estos datos pueden ser cualquier fuente de
        información como una base de datos. <br>

        El primer nivel consiste en la capa de presentación que incluye no sólo el navegador, sino también el servidor web
        que es el responsable de dar a los datos un formato adecuado. El segundo nivel está referido habitualmente a algún
        tipo de programa o script. Finalmente, el tercer nivel proporciona al segundo los datos necesarios para su
        ejecución. <br>
        Una aplicación Web típica recogerá datos del usuario (primer nivel), los enviará al servidor, que ejecutará un
        programa (segundo y tercer nivel) y cuyo resultado será formateado y presentado al usuario en el navegador (primer
        nivel otra vez).


    </p>
    <span class="image main"><img
            src="https://www.monografias.com/trabajos109/recursos-utilizados-mantenimiento-pc/image005.jpg" alt="" /></span>

    <p>
        <strong>Aplicaciones de N capas:</strong><br>
        El surgimiento de la tecnología de componentes distribuidos es la clave de las arquitecturas de n-capas. Estos
        sistemas de computación utilizan un número variable de componentes individuales que se comunican entre ellos
        utilizando estándares predefinidos y frameworks de comunicación.



    </p>
    <span class="image main"><img src="https://tec755.files.wordpress.com/2017/08/com.jpg" alt="" /></span>
@endsection
