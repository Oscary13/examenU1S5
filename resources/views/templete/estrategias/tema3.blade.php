@extends('templete.layout.templete3')

@section('titulo')
    <h1 id="t">Explicar el proceso de diseño de logica de
        acceso a datos, lógica de presentación de
        datos y lógica de negocio o lógica de
        aplicación.</h1>
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
        La programación por capas es un estilo de programación en el que el objetivo primordial es la separación de la
        lógica de negocios de la lógica de diseño; un ejemplo básico de esto consiste en separar la capa de datos de la capa
        de presentación al usuario. La ventaja principal de este estilo es que el desarrollo se puede llevar a cabo en
        varios niveles y, en caso de que sobrevenga algún cambio, sólo se ataca al nivel requerido sin tener que revisar
        código entremezclado. <br><br>

        Se agrupan por cada capa una serie de recomendaciones basadas en el modelo de tres capas propuesto en el subsistema
        de Arquitectura, en el área Arquitectura Tecnológica, de MADEJA. Se han realizado estudios y recomendaciones sobre
        de las tecnologías más recomendables para la arquitectura propuesta y se presentan una serie de pautas tanto a nivel
        funcional como para la construcción e integración de cada capa. <br><br>

        La ventaja de la variedad de tecnologías disponibles para el desarrollo de las diferentes capas de las aplicaciones
        Java, presenta el inconveniente de la utilización conjunta de varias de ellas. Debido a esto se deben establecer
        unos criterios que hagan posible una integración óptima entre las tecnologías empleadas. Estos criterios se han
        recogido en forma de pautas que se describen en esta área. <br><br>


    </p>

    <p>
        <strong>Capa de Presentación:</strong><br>

        Mediante la capa de presentación se separa la interacción del usuario respecto a la lógica de negocio. <br>

        El uso extendido de la arquitectura en 3 niveles en el desarrollo de aplicaciones Java, ha favorecido la aparición
        de tecnologías que facilitan la implantación de esta capa, como JSF o Richfaces, además de un conjunto de buenas
        prácticas que mejoran el proceso complejo de elaboración de la capa de presentación. Este área está muy relacionada
        con el subsistema Interfaz de usuario y con el área Capa de Presentación del subsistema Arquitectura. <br>

        Se recogen en esta área las pautas a seguir en la construcción de esta capa.
    </p>
    <p>
        <strong>Capa de Negocio:</strong>
        La capa de negocio expone la lógica necesaria a la capa de presentación para que el usuario, a través de la
        interfaz, interactúe con las funcionalidades de la aplicación. <br>

        Se define el uso de componentes de negocio para abstraer la lógica de negocio de otros problemas generales de las
        aplicaciones empresariales como la concurrencia, transacciones, persistencia, seguridad, etc. <br>

        Este área está muy relacionada con el área Capa de Negocio, del subsistema Arquitectura, y se incluyen pautas para
        el uso correcto de diferentes tecnologías Java y PHP. <br>


    </p>
    <p>
        <strong>Capa de Persistencia:</strong>
        La necesidad de vincular los datos guardados en una base de datos relacional, con los objetos de una aplicación
        orientada a objetos, determinó la aparición del concepto de persistencia de objetos. Siguiendo el estilo de
        desarrollo en tres capas, la persistencia queda recogida en su propia capa, separada de la lógica de negocio y de la
        interfaz de usaurio. <br>

        Este área esta estrechamente ligada al área Capa de Acceso a Datos del subsistema de Arquitectura de MADEJA. <br>
    </p>
    <span class="image main"><img src="https://spuzi.github.io/Spuzipedia/arquitectura3capas/arquitectura3capas.png"
        alt="" /></span>
@endsection
