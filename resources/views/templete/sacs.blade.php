@extends('templete.layout.templete')

@section('titulo')
    <h1>Sistemas con arquitectura Cliente/Servidor</h1>

@endsection

@section('imagen1')

@endsection

@section('subtitulo1')
    <h2>Cliente - Servidor</h2>

@endsection
@section('parrafoSub1')
    <p>
        Cliente-Servidor es uno de los estilos arquitectónicos distribuidos más conocidos, el cual está compuesto por dos
        componentes, el proveedor y el consumidor. El proveedor es un servidor que brinda una serie de servicios o recursos
        los cuales son consumido por el Cliente. <br><br>
        En una arquitectura Cliente-Servidor existe un servidor y múltiples clientes que se conectan al servidor para
        recuperar todos los recursos necesarios para funcionar, en este sentido, el cliente solo es una capa para
        representar los datos y se detonan acciones para modificar el estado del servidor, mientras que el servidor es el
        que hace todo el trabajo pesado. <br><br>
        En esta arquitectura, el servidor deberá exponer un mecanismo que permite a los clientes conectarse, que por lo
        general es TCP/IP, esta comunicación permitirá una comunicación continua y bidireccional, de tal forma que el
        cliente puede enviar y recibir datos del servidor y viceversa. <br><br>


    </p>
    <span class="image main"><img src="https://reactiveprogramming.io/figures/cliente-servidor.png" alt="" /></span>
    <p>

        Creo que es bastante obvio decir que en esta arquitectura el cliente no sirve para absolutamente nada si el servidor
        no está disponible, mientras que el servidor por sí solo no tendría motivo de ser, pues no habría nadie que lo
        utilice. En este sentido, las dos partes son mutuamente dependientes, pues una sin la otra no tendría motivo de ser.
        Cliente-Servidor es considerada una arquitectura distribuida debido a que el servidor y el cliente se encuentran
        distribuidos en diferentes equipos (aunque podrían estar en la misma máquina) y se comunican únicamente por medio de
        la RED o Internet. <br> <br>
        En esta arquitectura, el Cliente y el Servidor son desarrollados como dos aplicaciones diferentes, de tal forma que
        cada una puede ser desarrollada de forma independiente, dando como resultado dos aplicaciones separadas, las cuales
        pueden ser construidas en tecnologías diferentes, pero siempre respetando el mismo protocolo de comunicación para
        establecer comunicación. <br>

    </p>
    <span class="image main"><img src="https://reactiveprogramming.io/figures/cliente-servidor-multi-connections.png"
            alt="" /></span>
    <p>
        La idea central de separar al cliente del servidor radica en la idea de centralizar la información y la separación
        de responsabilidades, por una parte, el servidor será la única entidad que tendrá acceso a los datos y los servirá
        solo a los clientes del cual el confía, y de esta forma, protegemos la información y la lógica detrás del
        procesamiento de los datos, además, el servidor puede atender simultáneamente a varios clientes, por lo que suele
        ser instalado en un equipo con muchos recursos. Por otro lado, el cliente suele ser instalado en computadoras con
        bajos recursos, pues desde allí no se procesa nada, simplemente actúa como un visor de los datos y delega las
        operaciones pesadas al servidor. <br> <br>
        Quizás uno de los puntos más característicos de la arquitectura Cliente-Servidor es la centralización de los datos,
        pues el server recibe, procesa y almacena todos los datos provenientes de todos los clientes. Si bien los clientes
        por lo general solo se conectan a un solo servidor, existen variantes donde hay clientes que se conectan a múltiples
        servidores para funcionar, tal es el caso de los navegadores, los cuales, para consultar cada página establece una
        conexión a un servidor diferentes, pero al final es Cliente-Servidor. <br>

    </p>
@endsection
