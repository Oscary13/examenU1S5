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
                <a href="{{ route('inicio2') }}" class="logo">
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
                <li><a href="{{ route('inicio2') }}">Inicio</a></li>
                <li><a href="{{ route('estrategias') }}">Estrategias de reparto de complejidad</a></li>
                <li><a href="{{ route('multinivel') }}">Modelos Multinivel</a></li>
                <li><a href="{{ route('vistacontrolador') }}">Modelo Vista Controlador</a></li>
                <li><a href="{{ route('sockets') }}">Sockets</a></li>
                <li><a href="#footer">Contactanos.</a></li>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main">
            <div class="inner">
                <header>
                    <h1 id="">UNIDAD 2</h1>
                    <p>Quinto cuatrimestre:</p>
                </header>
                <section class="tiles">
                    <article class="style3">
                        <span class="image">
                            <img src="images/pic01.jpg" alt="" />
                        </span>
                        <a href="{{ route('estrategias') }}">
                            <h2>Estrategias de
                                reparto de
                                complejidad</h2>
                            <div class="content">
                                <p id="parrafo"></p>
                            </div>
                        </a>
                    </article>
                    <article class="style1">
                        <span class="image">
                            <img src="images/pic02.jpg" alt="" />
                        </span>
                        <a href="{{ route('multinivel') }}">
                            <h2>Modelos
                                Multinivel
                                </h2>
                            <div class="content">
                                <p id="parrafo"></p>
                            </div>
                        </a>
                    </article>
                    <article class="style4">
                        <span class="image">
                            <img src="images/pic02.jpg" alt="" />
                        </span>
                        <a href="{{ route('vistacontrolador') }}">
                            <h2>Modelo Vista
                                Controlador</h2>
                            <div class="content">
                                <p id="parrafo"></p>
                            </div>
                        </a>
                    </article>
                    <article class="style6">
                        <span class="image">
                            <img src="images/pic02.jpg" alt="" />
                        </span>
                        <a href="{{ route('sockets') }}">
                            <h2>Sockets</h2>
                            <div class="content">
                                <p id="parrafo"></p>
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
                                <input type="email" name="email" id="email" placeholder="Correo electr??nico" />
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
