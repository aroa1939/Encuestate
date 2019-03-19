<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Encuestate</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #a6f3c2;
                color: #1b1e21;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin-left: 40px;
                margin-right: 40px;


            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color:#000000;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Encuestate
                </div>
                <div>
                    Encuestate es una herramienta para la creación de encuestas dirigidas
                    al ambito sanitario, cuyo objetivo es conocer las valoraciones que se le atribuyen a la empresa por
                    parte de los pacientes y empleados.<br>

                </div>


                <div class="links">
                    <a href="https://laravel.com/docs">Clínica</a>
                    <a href="https://laracasts.com">Sobre nosotros</a>
                    <a href="https://laravel-news.com">Pacientes</a>
                    <a href="https://blog.laravel.com">Trabajadores</a>
                    <a href="https://nova.laravel.com">Interés</a>
                    <a href="https://forge.laravel.com">Noticias</a>
                    <a href="https://github.com/laravel/laravel">Redes sociales</a>
                </div>
                <div align="right">
                Aroa López Ávarez
                </div>
                <div align="right">
                Marta Núñez Cascales
                </div>
                </div>
            </div>

    </body>
</html>
