<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="">
        <title>Tienda online 2.1</title>
        <meta name="description" content="descripción de la web, se recomienda 90 caracteres">
        <meta name="keywords"    content="palabras clave, separadas, por comas">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
        <link href="/style/app.css" rel="stylesheet">

        <script type="module" src="dist/index.js"></script>
    </head>
    <body>
        <header>
            <div class="logo">
                <div class="header-logo">
                    <picture>
                        <a href="#"><img src="./images/Logo.webp" alt="Chromatic, vive tus colores."></a>
                    </picture>
                </div>
            </div>
            <div class="header-title">
                <div class="header-title">
                    <h1>Clientes</h1>
                </div>
            </div>
            <div class="header-hamburger">
                <div class="hamburger">
                    <span class="line line-1"></span>
                    <span class="line line-2"></span>
                    <span class="line line-3"></span>
                </div>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
    </body> 
</html>