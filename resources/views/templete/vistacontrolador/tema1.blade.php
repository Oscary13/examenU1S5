@extends('templete.layout.templete5')

@section('titulo')
    <h1 id="t">Reconocer los conceptos de modelo, control
        y vista, en las arquitecturas Cliente/Servidor.</h1>
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
        Modelo Vista Controlador (MVC) es un estilo de arquitectura de software que separa los datos de una aplicación, la
        interfaz de usuario, y la lógica de control en tres componentes distintos. <br>
        Se trata de un modelo muy maduro y que ha demostrado su validez a lo largo de los años en todo tipo de aplicaciones,
        y sobre multitud de lenguajes y plataformas de desarrollo.
    </p>
    <ul>
        <li>El <strong>Modelo</strong> que contiene una representación de los datos que maneja el sistema, su lógica de
            negocio, y sus mecanismos de persistencia.</li>
        <li>La <strong>Vista</strong>, o interfaz de usuario, que compone la información que se envía al cliente y los
            mecanismos interacción con éste.</li>
        <li>El <strong>Controlador</strong>, que actúa como intermediario entre el Modelo y la Vista, gestionando el flujo
            de información entre ellos y las transformaciones para adaptar los datos a las necesidades de cada uno.</li>
    </ul>

    <span class="image main"><img src="https://www.freecodecamp.org/espanol/news/content/images/2021/06/MVC3.png"
            alt="" /></span>
    <p>

        <strong>El modelo es el responsable de:</strong><br>
    <ul>
        <li>Acceder a la capa de almacenamiento de datos. Lo ideal es que el modelo sea independiente del sistema de
            almacenamiento.</li>
        <li>Define las reglas de negocio (la funcionalidad del sistema). Un ejemplo de regla puede ser: "Si la mercancía
            pedida no está en el almacén, consultar el tiempo de entrega estándar del proveedor".</li>
    </ul>




    </p>
    <p>

        <strong>El controlador es responsable de:</strong><br>
    <ul>
        <li>
            Recibe los eventos de entrada (un clic, un cambio en un campo de texto, etc.).
        </li>
        <li>
            Contiene reglas de gestión de eventos, del tipo "SI Evento Z, entonces Acción W". Estas acciones pueden suponer
            peticiones al modelo o a las vistas. Una de estas peticiones a las vistas puede ser una llamada al método
            "Actualizar ()". Una petición al modelo puede ser "Obtener_tiempo_de_entrega (nueva_orden_de_venta)".
        </li>
    </ul>
    </p>

    <p>

        <strong>Las vistas son responsables de:</strong><br>
    <ul>
        <li>
            Recibir datos del modelo y los muestra al usuario.
        </li>
        <li>
            Tienen un registro de su controlador asociado (normalmente porque además lo instancia).
        </li>
    </ul>

    </p>
@endsection
