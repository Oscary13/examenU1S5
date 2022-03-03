@extends('templete.layout.templete5')

@section('titulo')
    <h1 id="t">Explicar el proceso de flujo de control a partir
        del MVC, en las arquitecturas
        Cliente/Servidor
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
        El flujo que sigue el control generalmente es el siguiente: <br><br>

    </p>

    <span class="image main"><img
            src="https://si.ua.es/es/documentacion/asp-net-mvc-3/imagenes/introduccion/flujo-mvc.png" alt="" /></span>
    <ol>
        <li>
           <p>
            El usuario interactúa con la interfaz de usuario de alguna forma (por ejemplo, el usuario pulsa un botón,
            enlace, etc.)
           </p>
        </li>
        <li>
            <p>
                El controlador recibe (por parte de los objetos de la interfaz-vista) la notificación de la acción solicitada
            por el usuario. El controlador gestiona el evento que llega, frecuentemente a través de un gestor de eventos
            (handler) o callback.
            </p>
        </li>
        <li>
            <p>
                El controlador accede al modelo, actualizándolo, posiblemente modificándolo de forma adecuada a la acción
            solicitada por el usuario (por ejemplo, el controlador actualiza el carro de la compra del usuario). Los
            controladores complejos están a menudo estructurados usando un patrón de comando que encapsula las acciones y
            simplifica su extensión.
            </p>
        </li>
        <li>
            <p>
                El controlador delega a los objetos de la vista la tarea de desplegar la interfaz de usuario. La vista obtiene
            sus datos del modelo para generar la interfaz apropiada para el usuario donde se refleja los cambios en el
            modelo (por ejemplo, produce un listado del contenido del carro de la compra). El modelo no debe tener
            conocimiento directo sobre la vista. Sin embargo, se podría utilizar el patrón Observador para proveer cierta
            indirección entre el modelo y la vista, permitiendo al modelo notificar a los interesados de cualquier cambio.
            Un objeto vista puede registrarse con el modelo y esperar a los cambios, pero aun así el modelo en sí mismo
            sigue sin saber nada de la vista. El controlador no pasa objetos de dominio (el modelo) a la vista aunque puede
            dar la orden a la vista para que se actualice. Nota: En algunas implementaciones la vista no tiene acceso
            directo al modelo, dejando que el controlador envíe los datos del modelo a la vista.
            </p>
        </li>
        <li>
            <p>
                La interfaz de usuario espera nuevas interacciones del usuario, comenzando el ciclo nuevamente.
            </p>
        </li>
    </ol>

    <span class="image main"><img
        src="https://juvega.files.wordpress.com/2011/11/image.png" alt="" /></span>
@endsection
