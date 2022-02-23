@extends('templete.layout.templete')

@section('titulo')
    <h1>Protocolos de Comunicación en Red</h1>

@endsection

@section('subtitulo1')
    <h2>¿Qué es un protocolo de red?</h2>

@endsection
@section('parrafoSub1')
    <p>
        Los <strong>protocolos de red</strong> incluyen mecanismos para que los dispositivos se identifiquen y establezcan
        conexiones entre
        sí, así como reglas de formato que especifican cómo se forman los paquetes y los datos en los mensajes enviados y
        recibidos. Algunos protocolos admiten el reconocimiento de mensajes y la compresión de datos diseñados para una
        comunicación de red confiable de alto rendimiento. <br> <br>
        <strong>Tipos de protocolos de red:</strong><br>
        Los protocolos para la transmisión de datos en internet más importantes son TCP (Protocolo de Control de
        Transmisión) e IP (Protocolo de Internet). De manera conjunta (TCP/IP) podemos enlazar los dispositivos que acceden
        a la red, algunos otros protocolos de comunicación asociados a internet son POP, SMTP y HTTP. <br>
        Estos los utilizamos prácticamente todos los días, aunque la mayoría de los usuarios no lo sepan ni conozcan su
        funcionamiento. Estos protocolos permiten la transmisión de datos desde nuestros dispositivos para navegar a través
        de los sitios, enviar correos electrónicos, escuchar música online, etc. <br><br>

        <strong>Existen varios tipos de protocolos de red:</strong>
    <ul>
        <li>Protocolos de comunicación de red: protocolos de comunicación de paquetes básicos como TCP / IP y HTTP.</li>
        <li>Protocolos de seguridad de red: implementan la seguridad en las comunicaciones de red entre servidores, incluye
            HTTPS, SSL y SFTP.</li>
        <li>Protocolos de gestión de red: proporcionan mantenimiento y gobierno de red, incluyen SNMP e ICMP.</li>
    </ul>
    </p>
    <span class="image main"><img
        src="https://sites.google.com/site/investigacionesitlm/_/rsrc/1478820762334/home/1-4-protocolos-de-comunicacion/formato%20prot.PNG"
        alt="" /></span>
    <p>
        Un grupo de protocolos de red que trabajan juntos en los niveles superior e inferior comúnmente se les denomina familia
        de protocolos. <br>
        
        El modelo OSI (Open System Interconnection) organiza conceptualmente a las familias de protocolos de red en capas de red
        específicas. Este Sistema de Interconexión Abierto tiene por objetivo establecer un contexto en el cual basar las
        arquitecturas de comunicación entre diferentes sistemas. <br><br>

        A continuación listamos algunos de los protocolos de red más conocidos, según las capas del modelo OSI: <br><br>

        <strong>Protocolos de la capa 1 - Capa física:</strong>
        <ul>
            <li><strong>USB:</strong> Universal Serial Bus.</li>
            <li><strong>Ethernet:</strong> Ethernet physical layer.</li>
            <li><strong>DSL:</strong> Digital subscriber line.</li>
            <li><strong>Etherloop:</strong> Combinación de Ethernet and DSL</li>
        </ul>

        <strong>Protocolos de la capa 2 - Enlace de datos</strong>
        <ul>
            <li><strong>DCAP: </strong>Protocolo de acceso del cliente de la conmutación de la transmisión de datos.</li>
            <li><strong>FDDI:</strong> Ethernet physical layer.</li>
            <li><strong>HDLC: </strong> Digital subscriber line.</li>
            <li><strong>LAPD:</strong> Protocolo de acceso de enlace para los canales.</li>
            <li><strong>PPP: </strong> Protocolo punto a punto.</li>
            <li><strong>STP: </strong> Protocolo del árbol esparcido.</li>
            <li><strong>VTP VLAN: </strong> trunking virtual protocol para LAN virtual.</li>
            <li><strong>MPLS: </strong> Combinación de Ethernet and DSL.</li>
        </ul>

        <strong>Protocolos de la capa 3 - Red</strong>
        <ul>
            <li><strong>ARP: </strong>Protocolo de resolución de direcciones.</li>
            <li><strong>BGP: </strong>Protocolo de frontera de entrada.</li>
            <li><strong>ICMP: </strong>Protocolo de mensaje de control de Internet.</li>
            <li><strong>IPv4: </strong>Protocolo de internet versión 4.</li>
            <li><strong>IPv6: </strong>Protocolo de internet versión 6.</li>
            <li><strong>IPX: </strong> Red interna del intercambio del paquete.</li>
            <li><strong>OSPF: </strong> Abrir la trayectoria más corta primero.</li>
        </ul>
    </p>
    <span class="image main"><img
        src="http://3.bp.blogspot.com/_3XfYIOl9q8s/TIvoZpanHlI/AAAAAAAAADM/JMElyLGXUus/s1600/ip.jpg"
        alt="" /></span>
@endsection
