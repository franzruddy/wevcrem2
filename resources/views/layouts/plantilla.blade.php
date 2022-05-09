<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href=" {{asset('lib/estilos.css')}}">
    

    <script src="https://kit.fontawesome.com/d41ce36db8.js" crossorigin="anonymous"></script>


    <script src=" {{asset('lib/estilosapp.js')}} "></script>


    <title>Document</title>



</head>
<body>
    <!--Header-->
    <header>
        <nav>
            <label class="logo1"><img class="imgen1" src=" {{asset('img/logo2.png')}} " alt=""> </label>
        </nav>
        <nav class="menu">
            <label class="logo">Web Cementerio</label>
            <ul class="menu_items">
                <li class="active " ><a  href="#"></a>Inicio</li>
                <li ><a  href="#"></a>Contactos</li>
                <li ><a  href="#"></a>Historia</li>
                <li ><a  href="#"></a>Obituario</li>
                <li ><a  href="#"></a>Servicios</li>
            </ul>
            <span class="btn_menu">
                <i class="fa fa-bars"></i>
            </span>
        </nav>    
    </header>

@yield('content')

<footer>

</footer>

</body>
</html>