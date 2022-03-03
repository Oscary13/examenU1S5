@extends('templete.layout.templete5')

@section('titulo')
    <h1 id="t">Describir el desarrollo de software a partir del
        MVC, en las arquitecturas Cliente/Servidor.

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
        El siguiente diagrama refleja las relaciones existentes entre los componentes del Modelo, Vista y Controlador, y de
        éstos a su vez con el usuario, o cliente, del sistema: <br><br>

    </p>

    <span class="image main"><img
            src="https://www.campusmvp.es/recursos/image.axd?picture=/2019/4T/interaccion-m-v-c.png" alt="" /></span>
    <p>
        Como se muestra en el diagrama, las acciones e información procedentes del usuario serán recogidas exclusivamente
        por los Controladores. Ningún componente de otra capa debe acceder a los datos generados desde el cliente, de la
        misma forma que sólo los componentes de la Vista estarán autorizados a generar interfaces de usuario con las que
        enviar información de retorno. <br> <br>
        Destaca también el papel central del Controlador. Tiene acceso bidireccional al Modelo, es decir, será capaz tanto
        de actualizar su estado, invocando por ejemplo métodos o acciones incluidos en su lógica de negocio, como de
        consultar la información que sea necesaria para completar sus tareas. Sin embargo, en ningún caso el Modelo será
        consciente o mostrará acoplamiento alguno respecto a las clases Controlador que lo están utilizando, ni conocerá las
        distintas representaciones (Vistas) que pueden realizarse de él cara al usuario. <br> <br>
        Por otra parte, el Controlador es el encargado de seleccionar la Vista más apropiada en función de la acción llevada
        a cabo por el usuario, suministrándole toda la información que necesite para componer la interfaz. Para pasar esta
        información, el Controlador puede usar clases del Modelo o, lo que es más habitual, clases específicamente diseñadas
        para ello, denominadas View-Models, que contendrán toda la información que la Vista necesite para maquetarse y
        mantendrá a ésta aislada de los cambios en el Modelo. <br>
        La responsabilidad de la Vista, por tanto, se reduce a generar la interfaz partiendo de los datos que le suministre
        el controlador.

    </p>

    <span class="image main"><img src="https://juvega.files.wordpress.com/2011/11/image.png" alt="" /></span>
@endsection
