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
                    <span class="symbol"><img src="images/logo.svg" alt="" /></span><span
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
				<li><a href="{{route('csira')}}">Clasificación de los sistemas de información respecto a su arquitectura.</a></li>
                <li><a href="{{route('pdcacs')}}">Proceso de diagramación de componentes de la arquitectura cliente servidor.</a></li>
                <li><a href="#footer">Contactanos.</a></li>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main">
            <div class="inner">
                @yield('titulo')
                @yield('imagen1')
                @yield('subtitulo1')
                @yield('parrafoSub1') 
                @yield('imagen2')
                @yield('parrafo2')
                @yield('imagen3')
                
            </div>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <section>
                    <h2>Get in touch</h2>
                    <form method="post" action="#">
                        <div class="fields">
                            <div class="field half">
                                <input type="text" name="name" id="name" placeholder="Name" />
                            </div>
                            <div class="field half">
                                <input type="email" name="email" id="email" placeholder="Email" />
                            </div>
                            <div class="field">
                                <textarea name="message" id="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Send" class="primary" /></li>
                        </ul>
                    </form>
                </section>
                <section>
                    <h2>Seguir</h2>
                    <ul class="icons">
                        <li><a href="https://twitter.com/OBB13_?t=7nIQzOsfhmixthlDa6Ling&s=09" target="_BLANK"  class="icon brands style2 fa-twitter"><span
                                    class="label">Twitter</span></a></li>
                        <li><a href="https://www.facebook.com/oscary.basurto.9/" target="_BLANK"  class="icon brands style2 fa-facebook-f"><span
                                    class="label">Facebook</span></a></li>
                        <li><a href="https://www.instagram.com/0bb_13/?hl=es" target="_BLANK"  class="icon brands style2 fa-instagram"><span
                                    class="label">Instagram</span></a></li>
                        <li><a href="https://github.com/Oscary13" target="_BLANK"  class="icon brands style2 fa-github"><span
                                    class="label">GitHub</span></a></li>
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
