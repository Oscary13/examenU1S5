@extends('templete.layout.templete4')

@section('titulo')
    <h1 id="t">Explicar el proceso de planificación
        multiniveles.
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
        En informática, «arquitectura de varios niveles» es un término que se aplica a una disposición de componentes o
        software en el que las diferentes funciones necesarias para completar una operación se segmentan en divisiones
        físicas o lógicas separadas. Cada uno de los segmentos de la arquitectura más grande es responsable de realizar solo
        un cierto tipo de tarea y, en su mayoría, desconoce el funcionamiento interno de los segmentos circundantes que
        realizan diferentes tareas. Las divisiones más comunes y básicas que se utilizan en la arquitectura de varios
        niveles son los niveles de presentación, lógica y datos. La presentación solo es responsable de mostrar información
        a un usuario, y el nivel de datos solo es responsable de almacenar o recuperar datos, mientras que el nivel lógico
        une los dos, aplica la lógica del programa a la entrada del usuario desde la presentación y da sentido a la
        información del nivel de datos. . Los sistemas informáticos de gran tamaño utilizan una arquitectura de varios
        niveles porque abstraen los diferentes puntos de ejecución del flujo de control, lo que permite apuntar a diferentes
        componentes precisos para actualizaciones, pruebas o depuración, dejando intactos los módulos restantes. <br><br>

        La arquitectura de múltiples niveles también puede denominarse arquitectura de múltiples capas, aunque hay una
        diferencia. En la mayoría de los casos, el uso del término «arquitectura de varios niveles» implica que los
        componentes separados de un sistema están ubicados en hardware o servidores físicamente diferentes, mientras que un
        sistema en capas solo puede implementar diferentes aplicaciones que se ejecutan en el mismo espacio físico. Sin
        embargo, no todos los sistemas de varios niveles utilizan hardware independiente; en su lugar, solo pueden separar
        las funciones a través de divisiones lógicas, como diferentes particiones en un solo disco.
    </p>
    <span class="image main"><img
            src="https://image2.slideserve.com/3947443/arquitectura-multinivel-con-m-dulo-web-l.jpg" alt="" /></span>

    <p>
        La mayor parte de la arquitectura de varios niveles tiene tres niveles distintos, aunque puede haber más niveles,
        según las necesidades o la configuración de un sistema. El primer nivel se conoce como nivel de presentación y es
        responsable de mostrar la información que se le transmite, además de proporcionar una forma para que los usuarios
        proporcionen información, más comúnmente a través de una interfaz gráfica de usuario (GUI). El nivel de presentación
        se conecta al nivel lógico, que es el área donde se evalúa la entrada del usuario, se recuperan los datos del nivel
        de datos y se lleva a cabo cualquier procesamiento o cálculo específico. El nivel lógico es más o menos lo que
        tradicionalmente se considera una aplicación informática estándar, aunque no tiene facilidades para mostrar
        directamente la salida ni forma de recibir directamente la entrada de un usuario.

    </p>
    <p>
        El nivel de datos es responsable solo de escribir y leer datos y puede tomar la forma de una matriz de discos o un
        sistema de administración de bases de datos relacionales (RDBMS). Aunque el nivel de datos es responsable de
        administrar el almacenamiento y la recuperación de datos en una configuración de arquitectura de varios niveles, no
        tiene conocimiento del contexto de los datos y solo se ocupa de los registros o las funciones de entrada y salida
        del disco. Una característica definitoria de los niveles en la arquitectura de varios niveles es que ningún segmento
        excede los límites de las tareas para las que está especificado, por lo que no hay lógica comercial o funcionalidad
        de datos disponible en el nivel de presentación, y el nivel lógico no puede escribir archivos directa o
        directamente. acceder a la GUI a través de la cual está trabajando el usuario. Todas las interacciones tienen lugar
        a través de comunicaciones tipo cliente-servidor, y cada nivel sirve de alguna manera tanto como cliente como como
        servidor, según la interacción que se esté produciendo. <br><br>

        Una de las razones por las que una gran red informática podría utilizar un sistema de varios niveles es porque cada
        paso necesario en el flujo de trabajo es modular y puede manejarse independientemente de las otras partes. Esto
        significa que los terminales o la GUI que emplean los usuarios se pueden cambiar sin necesidad de modificar la
        lógica o los niveles de datos. De manera similar, el RDBMS o las unidades de almacenamiento físico se pueden cambiar
        sin afectar nada más. Esta modularidad es muy difícil, si no imposible, de lograr con un sistema de un solo nivel en
        el que todos los aspectos se sueldan en una sola aplicación compilada.
    </p>
@endsection
