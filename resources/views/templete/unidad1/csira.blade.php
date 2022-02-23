@extends('templete.layout.templete')

@section('titulo')
    <h1>Clasificación de los Sistemas de Información Respecto a su Arquitectura</h1>

@endsection


@section('subtitulo1')
    <h2>Clasificación:</h2>

@endsection
@section('parrafoSub1')
    <p>
        La arquitectura elegida condicionará la forma de trabajar, por lo que es una decisión fundamental. Merece la pena,
        por tanto, conocer las opciones disponibles para saber cual es la más adecuada para mi situación.
    </p>

    <p>
        <strong>1.- Monopuesto – Monousuario:</strong><br>
        Aunque es muy obvio, lo incluyo como primer tipo porque me preguntan con cierta frecuencia si instalar mi programa
        de gestión documental (ArchivaTech) para tener en casa, para un único ordenador. Mi respuesta es que no merece la
        pena para un solo usuario, por muchos archivos que tenga. En este caso, el servidor y el puesto de trabajo es el
        mismo ordenador y un simple explorador de Windows sirve perfectamente para gestionar los ficheros. <br><br>

        <strong>2.- Cliente-Servidor:</strong><br>
        Este es el caso más corriente en PYMES. Hay un «ordenador central», un servidor, en el que se almacenan todos los
        documentos (archivos) y 5, 10…25 usuarios acceden desde sus ordenadores, conectados en red local, a consultar y
        añadir documentos a la base de datos común. En el servidor debe haber un gestor de base de datos, como Oracle, SQL
        Server, MySQL o algún otro. Este gestor aporta robustez al archivo, seguridad en el acceso y permite búsquedas
        rápidas por cualquier dato. En los puestos de trabajo hay instalado un programa de gestión documental, lo que se
        llama un «software cliente», que facilita el acceso a los datos y su gestión: búsquedas, clasificación, añadir datos
        complementarios. <br><br>

        <strong>3.- Servidor-Clientes Web:</strong><br>
        Podemos considerar esta opción una evolución de la anterior que solo se distingue porque en los puestos de trabajo
        no hay que instarla un «software cliente» específico para acceder a los datos sino que se utiliza un simple
        navegador Web (Internet Explorer, FireFox, Chrome o Safari) que suele estar instalado en todos los ordenadores. Esto
        simplifica sensiblemente la instalación inicial del sistema aunque tiene una pega: suele ser menos cómodo y ágil que
        los programas específicos diseñados expresamente (es un tema que he tratado ampliamente en posts anteriores). Para
        docenas o cientos de usuarios suele ser la mejor opción. <br><br>

        <strong>4.- Cliente-Servidor + Clientes Web:</strong><br>
        Una arquitectura mixta que suma lo mejor de las dos anteriores. Tenemos un servidor con los datos, algunos usuarios
        acceden con software específico y el resto con un navegador Web. Permite la instalación de un software específico,
        potente y ágil, para los usuarios que utilizan frecuentemente el software de gestión y proporciona acceso a docenas
        o cientos de usuarios esporádicos sin necesidad de instalar el programa en cada uno de esos cientos de ordenadores.
        Personalmente es la opción que más me gusta para empresas de cierto tamaño (por encima de 10-20 usuarios), sobre
        todo si hay numerosos usuarios que solamente van a consultar documentos, no a introducirlos. <br><br>





    </p>
    <span class="image main"><img
            src="http://www.nosolousabilidad.com/articulos/img/desclas7.gif"
            alt="" /></span>
    <p>
        <strong>5.- Cliente-Servidor + Clientes Web + Acceso remoto:</strong><br>
        Es una evolución de la anterior a la que se suma el acceso desde el exterior (Internet) utilizando portátiles,
        tabletas (iPad), teléfonos móviles o simplemente un ordenador conectado a Internet. En estos dispositivos que no
        están conectados directamente a la red local de la empresa se utiliza el navegador para acceder a la base de datos
        de documentos usando la dirección IP de un servidor situado en la empresa. Es una opción que cada vez más usuarios
        demandan (aunque alguno no quiere ni oir hablar de la posibilidad de que se accedan a sus datos desde Internet). <br><br>

        <strong>6.- Oficinas interconectadas en modo Cliente-Servidor + Cliente Web:</strong><br>
        Si la empresa tiene varias oficinas en localizaciones distintas (en la misma ciudad o en cualquier lugar del mundo),
        puede utilizar la infraestructura anterior para conectarse, no solo desde dispositivos móviles, sino desde las redes
        locales de cualquier oficina al servidor «central» en el que están los datos. <br><br>

        <strong>7.- Cloud Computing:</strong><br>
        Es una variante de cualquiera de los casos anteriores, pero con el servidor «en la nube» en lugar de estar
        físicamente en la oficina de la empresa. Ya no hablamos de servidor en red local, sino de servidor «remoto», aunque
        para los usuarios debe ser indiferente que el servidor esté en la habitación de al lado o en un CPD (centro de
        proceso de datos) de Irlanda. Tiene un gran atractivo porque la empresa se desentiende del mantenimiento del
        servidor, incluyendo su ampliación si se queda pequeño, pero tiene un gran problema para sistemas de gestión
        documental: el ancho de banda. Los usuarios dependen completamente de la velocidad de su conexión a Internet para
        consultar archivos y añadir nuevos. Y algunos archivos pueden ser bastante «pesados». Para PYMES con una sola
        oficina no parece justificada esta dependencia absoluta de la conexión a Internet, frente a la velocidad que
        proporciona una conexión en red local al servidor situado en la habitación contigua. <br>

    </p>

    <span class="image main"><img
        src="http://www.nosolousabilidad.com/articulos/img/desclas1.gif"
        alt="" /></span>
@endsection
