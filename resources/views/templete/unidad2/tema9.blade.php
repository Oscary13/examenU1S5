@extends('templete.layout.templete2')

@section('titulo')
    <h1>Describir la arquitectura Cliente/Servidor con los modelos de cómputo en la nube IAAS, PAAS, SAAS.</h1>
@endsection

@section('imagen1')
@endsection

@section('subtitulo1')
    {{-- <h2>Computadoras centrales y dedicadas</h2> --}}
@endsection
@section('parrafoSub1')
    <p>
        Un ejemplo de una red cliente-servidor es el uso del servicio de correo electrónico de un ISP para enviar, recibir y
        almacenar correo electrónico. El cliente de correo electrónico en una PC doméstica emite una solicitud al servidor
        de correo electrónico del ISP para que se le envíe todo correo no leído. El servidor responde enviando al cliente el
        correo electrónico solicitado. <br><br>
        Aunque los datos se describen generalmente como el flujo del servidor al cliente, algunos datos fluyen siempre del
        cliente al servidor. El flujo de datos puede ser el mismo en ambas direcciones, o inclusive puede ser mayor en la
        dirección que va del cliente al servidor. Por ejemplo, un cliente puede transferir un archivo al servidor con fines
        de almacenamiento. Como se muestra en la ilustración, la transferencia de datos de un cliente a un servidor se
        conoce como “subida” y la transferencia de datos de un servidor a un cliente se conoce como “descarga”.

    </p>
    <p>
        <strong>SaaS:</strong><br>

        El Software como Servicio (SaaS) cuenta con aplicaciones que se ofrecen a través de la web, a las cuales se accede a
        por medio de un navegador y no son administradas por la compañía sino por el proveedor de la aplicación. Esto libera
        a la empresa de la presión que supone realizar el mantenimiento del software, administrar la infraestructura,
        garantizar la seguridad de la red y la disponibilidad de los datos, entre otros aspectos relacionados con las
        aplicaciones en servidores propios. Típicamente un SaaS es facturado con base en características como el número de
        usuarios, el tiempo de uso, la cantidad de datos almacenados y el número de transacciones procesadas. Este modelo de
        servicio tiene la mayor cuota del mercado de la computación en la nube, y de acuerdo con Gartner, las ventas
        proyectadas al año 2021 son de hasta 117,1 billones de dólares . Algunas aplicaciones comunes de SaaS incluyen
        soluciones tipo Field Service, soluciones de monitoreo de sistemas, planificadores, entre otras.
    </p>
    <span class="image main"><img
            src="https://www.openintl.com/wp-content/uploads/2018/08/computacion-en-la-nube-saas-300x272.png" alt="" />
    </span>
    <p>
        <strong>PaaS:</strong><br>
        La Plataforma como Servicio (PaaS) es una capa intermedia entre la Infraestructura como Servicio (IaaS) y el
        Software como Servicio (SaaS). PaaS ofrece acceso a ambientes en la nube en los cuales los usuarios pueden construir
        y entregar aplicaciones sin necesidad de instalar y mantener ambientes de desarrollo complejos que normalmente son
        muy costosos. Adicionalmente, los usuarios también pueden escoger las características a incluir en la suscripción
        del servicio. De acuerdo con informes de Gartner, de los tres modelos de servicio, PaaS tiene el menor porcentaje
        del mercado, con ingresos proyectados al año 2021 de 27,3 billones de dólares

    </p>
    <span class="image main"><img
            src="https://www.openintl.com/wp-content/uploads/2018/08/computacion-en-la-nube-paas-300x272.png" alt="" />
    </span>
    <p>
        <strong>IaaS:</strong><br>
        La Infraestructura como Servicio (IaaS) ofrece una forma estandarizada de adquirir capacidad computacional por
        demanda a través de la web durante un periodo de tiempo definido. Estos recursos incluyen almacenamiento, redes,
        procesamiento y hasta servidores completos. Normalmente son cobrados bajo una modalidad de pago por uso; por
        ejemplo, de acuerdo con la cantidad de almacenamiento o el nivel de potencia de procesamiento requerido por la
        compañía. En este modelo de servicio, los clientes no administran la infraestructura, sino que es responsabilidad
        del proveedor garantizar la cantidad de recursos y el tiempo de disponibilidad contratado. <br><br>

        Aunque la computación en la nube existe desde hace bastante tiempo, continuará evolucionando al ritmo de los avances
        tecnológicos y permitirá la creación de nuevos modelos de negocio que los proveedores de servicios deben estar en
        capacidad de soportar si quieren mantener su posición en el mercado en un entorno cada vez más competitivo.

    </p>
    <span class="image main"><img
            src="https://www.openintl.com/wp-content/uploads/2018/08/computacion-en-la-nube-iaas-300x272.png"
            alt="" /></span>
@endsection
