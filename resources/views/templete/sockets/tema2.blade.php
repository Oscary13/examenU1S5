@extends('templete.layout.templete6')

@section('titulo')
    <h1 id="t">Explicar el proceso de comunicación y
        configuración orientada a conexión e interfaz
        de programación de aplicaciones (API).
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
        <strong>COMUNICACIÓN ORIENTADA A CONEXIÓN</strong> <br><br>
        <strong>La capa 1</strong> en el modelo de interconexión de sistemas abiertos (OSI) es la capa física que determina
        si el medio
        físico es cable, inalámbrico o fibra óptica. <br>
        <strong>La segunda capa</strong> define cómo los nodos de datos, como las computadoras y los enrutadores, pueden
        determinar cuándo
        transmitir. <br>
        <strong>La capa 3 </strong> determina el direccionamiento de la red y cómo los paquetes alcanzan la dirección de
        destino requerida en
        una red de datos pública. Es la capa de control de transmisión que maneja el ritmo de la transmisión de datos. <br>
        La capa 4 es donde se determina la comunicación basada en conexión o sin conexión.


    </p>
    <span class="image main">
        <img src="https://www.academiaweb.ca/wp-content/uploads/2020/07/api-visual.png" alt="" />
    </span>
    <p>
        <strong>INTERFAZ DE COMUNICACIÓN DE APLICACIONES (API).</strong>
        Las API se componen de dos elementos relacionados. La primera es una especificación que describe cómo se intercambia
        la información entre programas, hecha en forma de una solicitud de procesamiento y una devolución de los datos
        necesarios. El segundo es una interfaz de software escrita según esa especificación y publicada de alguna manera
        para su uso. <br><br>
        Se dice que el software que quiere acceder a las características y capacidades de la API la llama, y se dice que el
        software que crea la API la publica. <br> <br>
        Una de las principales funciones de las API es poder facilitarle el trabajo a los desarrolladores y ahorrarles
        tiempo y dinero. Por ejemplo, si estás creando una aplicación que es una tienda online, no necesitarás crear desde
        cero un sistema de pagos u otro para verificar si hay stock disponible de un producto. Podrás utilizar la API de un
        servicio de pago ya existente, por ejemplo PayPal, y pedirle a tu distribuidor una API que te permita saber el stock
        que ellos tienen.

    </p>
    <span class="image main">
        <img src="https://teks.co.in/site/blog/wp-content/uploads/2016/10/19_Api_testing.jpg" alt="" />
    </span>
@endsection
