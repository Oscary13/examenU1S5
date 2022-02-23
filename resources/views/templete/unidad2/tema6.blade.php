@extends('templete.layout.templete')

@section('titulo')
    <h1>Identificar las ventajas y desventajas de la arquitectura Cliente/Servidor.</h1>
@endsection

@section('imagen1')
@endsection

@section('subtitulo1')
    {{-- <h2>Computadoras centrales y dedicadas</h2> --}}
@endsection
@section('parrafoSub1')
    {{-- <span class="image main"><img
            src="https://cdsphp.files.wordpress.com/2013/11/cliente-servidor.jpg"
            alt="" /></span> --}}
    <p>
        <strong>VENTAJAS</strong>

    </p>
    <ul>
        <li>Facilita la integración entre diferentes sistemas y comparte información permitiendo por ejemplo que las
            máquinas ya existentes puedan ser utilizadas mediante una interfaz más amigable para el usuario. De esta manera
            podemos integrar varias PCs con sistemas medianos y grandes sin necesidad de que todos tengan que utilizar el
            mismo sistema operativo.
        </li><br>
        <li>Al favorecer el uso de las interfaz de gráficas interactivas, los sistemas construidos bajo este esquema tienen
            una mayor interacción con el usuario.
        </li><br>

        <li>
            El modelo cliente servidor permite además proporcionar a las diferentes áreas de una empresa generar un orden
            de trabajo en donde cada sector puede trabajar en su área pero accediendo al mismo servidor e información que
            los demás sin generar conflictos. Esto es de gran utilidad ya que si ponemos como ejemplo una empresa con varios
            empleados al momento de trabajar es importante que todos puedan hacerlo en simultáneo.
        </li><br>

        <span class="image main"><img src="https://i.ytimg.com/vi/4IAgB-6oAT0/maxresdefault.jpg" alt="" /></span>
        <br><br>
        <p>
            <strong>DESVENTAJAS</strong>

        </p>
        <li>
            Requiere habilidad para que un servidor sea reparado. Por ejemplo si un problema ocurre en la red, se requiere
            de alguien con un amplio de esta para poder repararla en su totalidad para así dejar que la información y el
            correcto funcionamiento siga su flujo.
        </li><br>
        <li>
            Otro problema es la seguridad, el hecho que se comparte canales de información entre servidores y clientes
            requieren que estas pasen por procesos de validación, es decir protocolos de seguridad que pueden tener algún
            tipo de puerta abierta permitiendo que se generen daños físicos, amenazas o ataques de malware.
        </li><br>

        <li>
            Este modelo representa una limitación importante en cuanto a los costos económicos debido a que estos
            servidores son computadoras de alto nivel con un hardware y software específicos para poder dar un correcto
            funcionamiento a nuestras aplicaciones. Algo importante a destacar es que no solo es caro a la hora de
            solucionar problemas como mencionamos antes, sino que también tiene un costo elevado para reemplazar componentes
            que estén averiados.
        </li><br>

        <span class="image main"><img src="https://programacionviiulatbysslender.files.wordpress.com/2016/05/aaaaaaaaaa.jpg?w=640" alt="" /></span>
    </ul>

@endsection
