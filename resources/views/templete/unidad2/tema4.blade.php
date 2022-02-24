@extends('templete.layout.templete2')

@section('titulo')
    <h1>Describir los tipos de servidores.</h1>
@endsection

@section('imagen1')
@endsection

@section('subtitulo1')
    {{-- <h2>Computadoras centrales y dedicadas</h2> --}}
@endsection
@section('parrafoSub1')
    {{-- <span class="image main"><img
            src="https://inacapoperaciones.files.wordpress.com/2011/07/resumen-mrs-mrp.jpg"
            alt="" /></span> --}}
    <p>
        <strong>1. Servidor web:</strong><br />
        Sin duda este es el más conocido. En él se almacenan documentos html, archivos de texto, imágenes o vídeos entre
        otros. Es decir, todo aquello que está en Internet. Es el que guarda todo el contenido que solicitan los clientes
        que entran a la red.
    </p>
    <p>        
        <strong>2. Servidor proxy</strong><br />
        Es el encargado de realizar funciones específicas comunes a todos los usuarios de la red. El prefetching o la
        seguridad a través del cortafuegos son algunas de las más habituales.
    </p>
    <p>
        <strong>3. Servidor de seguridad:</strong><br />
        Como su propio nombre indica, es el encargado de evitar las entradas maliciosas en la red. Cuentan con software
        especializado como antivirus, antiadware o antispyware. También incluyen cortafuegos de diferentes niveles.
    </p>
    <p>
        <strong>4. Servidor de base de datos:</strong><br />
        Son los que ofrecen este servicio a otros equipos, o bien a las computadoras que se encargan de ejecutar esos
        programas.
    </p>
    <p>
        <strong>5. De impresiones:</strong><br />
        Es bastante seguro que lo tengas en la oficina. Es el que te permite enviar trabajos de impresión desde diferentes
        equipos.
    </p>
    <p>
        <strong>6. De correo:</strong><br />
        Es el que se encarga de todo lo relacionado con el e-mail en la red.
    </p>
    <p>
        <strong>7. De fax:</strong><br />
        Funciona igual que el de impresión, pero conectándose al fax.
    </p>
    <p>
        <strong>8. De telefonía:</strong><br />
        Permite enviar y recibir llamadas, además de funcionar como contestador, para desvío de llamadas o almacenamiento de
        mensajes de voz.
      
    </p>
    <p>  
        <strong>9. RAS:</strong><br />
        Los servers de acceso remoto controlan las líneas módem de todos los canales de comunicación.
    </p>
    <p>
        <strong>10. Cloud, uno de los tipos de servidores más útiles:</strong><br />
        No tienen una función específica, ya que pueden realizarlas todas. La diferencia con los demás es que son virtuales,
        es decir, están en una máquina física cuya función es ofrecer diversos servers. Te conectas a través de la nube.
    </p>
    <span class="image main"><img
            src="https://www.areatecnologia.com/informatica/imagenes/tipos-de-servidores.jpg" alt="" /></span>
@endsection
