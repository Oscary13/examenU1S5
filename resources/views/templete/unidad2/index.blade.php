<!DOCTYPE HTML>
<!--
 Phantom by HTML5 UP
 html5up.net | @ajlkn
 Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Blog DRO</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="/css/noscript.css" />
    </noscript>
</head>

<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="inner">

                <!-- Logo -->
                <a href="{{ route('inicio') }}" class="logo">
                    <span class="symbol"><img src="images/logo.png" alt="" /></span><span
                        class="title">Blog DRO</span>
                </a>

                <!-- Nav -->
                <nav>
                    <ul>
                        <li><a href="#menu">Menu</a></li>
                    </ul>
                </nav>

            </div>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <h2>Menu</h2>
            <ul>
                <li><a href="{{ route('inicio') }}">Inicio</a></li>
                <li><a href="{{ route('csi') }}">Conceptos - Sistemas de Información.</a></li>
                <li><a href="{{ route('esi') }}">Evolución de los sistemas de información.</a></li>
                <li><a href="{{ route('ccs') }}">Conceptos de Cliente y Servidor.</a></li>
                <li><a href="{{ route('sccd') }}">Sistemas de computadoras centrales y dedicadas.</a></li>
                <li><a href="{{ route('scltr') }}">Sistemas de conexión libre y a través de redes.</a></li>
                <li><a href="{{ route('sacs') }}">Sistemas con arquitectura Cliente/Servidor.</a></li>
                <li><a href="{{ route('pcr') }}">Protocolos de comunicación en red.</a></li>
                <li><a href="{{ route('csira') }}">Clasificación de los sistemas de información respecto a su
                        arquitectura.</a></li>
                <li><a href="{{ route('pdcacs') }}">Proceso de diagramación de componentes de la arquitectura cliente
                        servidor.</a></li>
                <li><a href="#footer">Contactanos.</a></li>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main">
            <div class="inner">
                <header>
                    <h1>Cliente/Servidor<br />
                        UNIDAD 2:</h1>
                    <p>Componentes y características del Cliente/Servidor</p>
                </header>
                <section class="tiles">
                    <article class="style4">
                        <span class="image">
                            <img src="images/pic04.jpg" alt="" />
                        </span>
                        <a href="{{ route('tema1') }}">
                            <h2>Reconocer los componentes del modelo Cliente/Servidor.</h2>
                            <div class="content">
                                <p>Componentes.</p>
                            </div>
                        </a>
                    </article>
                    <article class="style5">
                        <span class="image">
                            <img src="images/pic05.jpg" alt="" />
                        </span>
                        <a href="{{ route('tema2') }}">
                            <h2>Definir el concepto de programa maestro.</h2>
                            <div class="content">
                                <p>¿Que es el programa maestro?</p>
                            </div>
                        </a>
                    </article>
                    <article class="style6">
                        <span class="image">
                            <img src="images/pic06.jpg" alt="" />
                        </span>
                        <a href="{{ route('tema3') }}">
                            <h2>Explicar los procesos y tareas del programa maestro.</h2>
                            <div class="content">
                                <p>Procesos y tareas.</p>
                            </div>
                        </a>
                    </article>
                    <article class="style1">
                        <span class="image">
                            <img src="images/pic01.jpg" alt="" />
                        </span>
                        <a href="{{ route('tema4') }}">
                            <h2>Describir los tipos de servidores.</h2>
                            <div class="content">
                                <p>Tipos de servidores.</p>
                            </div>
                        </a>
                    </article>
                    <article class="style2">
                        <span class="image">
                            <img src="images/pic02.jpg" alt="" />
                        </span>
                        <a href="{{ route('tema5') }}">
                            <h2>Reconocer las características de la arquitectura Cliente/Servidor.</h2>
                            <div class="content">
                                <p>
                                    Servicios, recursos compartidos, protocolos asimétricos...
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="style3">
                        <span class="image">
                            <img src="images/pic03.jpg" alt="" />
                        </span>
                        <a href=" {{ route('tema6') }}">
                            <h2>Identificar las ventajas y desventajas de la arquitectura Cliente/Servidor .</h2>
                            <div class="content">
                                <p>Ventajas y Desventajas.</p>
                            </div>
                        </a>
                    </article>
                    <article class="style2">
                        <span class="image">
                            <img src="images/pic07.jpg" alt="" />
                        </span>
                        <a href="{{ route('pcr') }}">
                            <h2>Protocolos de comunicación en red.</h2>
                            <div class="content">
                                <p> Incluyen mecanismos para que los dispositivos se identifiquen y establezcan
                                    conexiones entre
                                    sí, así como reglas de formato que especifican cómo se forman los paquetes y los
                                    datos en los mensajes enviados y
                                    recibidos</p>
                            </div>
                        </a>
                    </article>
                    <article class="style3">
                        <span class="image">
                            <img src="images/pic08.jpg" alt="" />
                        </span>
                        <a href="{{ route('csira') }}">
                            <h2>Clasificación de los sistemas de información respecto a su arquitectura.</h2>
                            <div class="content">
                                <p>La arquitectura elegida condicionará la forma de trabajar, por lo que es una decisión
                                    fundamental. Merece la pena,
                                    por tanto, conocer las opciones disponibles para saber cual es la más adecuada para
                                    mi situación.</p>
                            </div>
                        </a>
                    </article>
                    <article class="style1">
                        <span class="image">
                            <img src="images/pic09.jpg" alt="" />
                        </span>
                        <a href="{{ route('pdcacs') }}">
                            <h2>Proceso de diagramación de componentes de la arquitectura cliente servidor.</h2>
                            <div class="content">
                                <p>Los tres niveles deben comunicarse entre sí.Abiertos, los protocolos estándar y las
                                    API expuestas simplifican esta
                                    comunicación.</p>
                            </div>
                        </a>
                    </article>
                </section>
            </div>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <section>
                    <h2>Ponerse en contacto</h2>
                    <form method="post" action="#">
                        <div class="fields">
                            <div class="field half">
                                <input type="text" name="name" id="name" placeholder="Nombre" />
                            </div>
                            <div class="field half">
                                <input type="email" name="email" id="email" placeholder="Correo electrónico" />
                            </div>
                            <div class="field">
                                <textarea name="message" id="message" placeholder="Mensaje"></textarea>
                            </div>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Enviar" class="primary" /></li>
                        </ul>
                    </form>
                </section>
                <section>
                    <h2>Seguir</h2>
                    <ul class="icons">
                        <li><a href="https://twitter.com/OBB13_?t=7nIQzOsfhmixthlDa6Ling&s=09" target="_BLANK"
                                class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a>
                        </li>
                        <li><a href="https://www.facebook.com/oscary.basurto.9/" target="_BLANK"
                                class="icon brands style2 fa-facebook-f"><span
                                    class="label">Facebook</span></a></li>
                        <li><a href="https://www.instagram.com/0bb_13/?hl=es" target="_BLANK"
                                class="icon brands style2 fa-instagram"><span
                                    class="label">Instagram</span></a></li>
                        <li><a href="https://github.com/Oscary13" target="_BLANK"
                                class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
                    </ul>
                </section>
                <ul class="copyright">
                    <li>&copy; OBB_13</li>
                </ul>
            </div>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/browser.min.js"></script>
    <script src="/js/breakpoints.min.js"></script>
    <script src="/js/util.js"></script>
    <script src="/js/main.js"></script>

</body>

</html>
