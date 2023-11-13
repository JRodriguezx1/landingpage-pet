<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu mascota en las mejores manos | petsanar</title>
    <meta name="title" name="Tu mascota en las mejores manos | petsanar">
    <meta name="description" content="Asegura la salud y el bienestar de tu mascota con los mejores profesionales y planes que puedes encontrar solo en petsanar">
    <link rel="canomical" href="https://petsanar.com/">
    <!-- Critical CSS -->
  
    <!-- Fin de Critical CSS  -->
    <!--<meta name="google-site-verification" content="xIv_-RaEZfJZMnrlFwBTjxIJc7ebWf2_oslKVewfzuY" />-->
    <link href="https://fonts.cdnfonts.com/css/simply-rounded?styles=45940,45938" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sofia-pro?styles=17636,17630,17632,17634,17638,17628,17626" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preload" href="/build/css/estilos.css" type="style">
    <link rel="stylesheet" href="/build/css/estilos.css">
    <link rel="icon" type="image/png" href="/build/img/logo.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>
<body class="" id="">
    <div class="registromascota">
        <?php include './templates/sidebarmovil.php'; ?>
        <div class="registromascota__contenedor">
            <!--<div class="header__logo">
                <a href="/"><img src="/build/img/logo+texto-blanco.svg" alt="petsanar"></a>
            </div>-->
            <?php include './templates/header.php'; ?>
            
            <div class="registromascota__formularios">
                <form class="formulario" action="/registromascota" method="POST">
                    <h4 class="registromascota__formtitulo">Informacion personal de la mascota</h4>
                    <div class="formulario__campo">
                        <label class="formulario__label" for="nombre">Nombre</label>
                        <input class="formulario__input" type="text" placeholder="Ingresa tu nombre" id="nombre" name="nombre" value="<?php echo $usuario->nombre??'';?>" requiered>
                    </div>
                    <div class="formulario__campo">
                        <label class="formulario__label" for="apellido">Apellido</label>
                        <input class="formulario__input" type="text" placeholder="Ingresa tu apellido" id="apellido" name="apellido" value="<?php echo $usuario->apellido??'';?>" requiered>
                    </div>
                    <div class="formulario__campo">
                        <label class="formulario__label" for="movil">Número de Teléfono</label>
                        <input class="formulario__input" type="number" placeholder="Ingresa tu número de telefónico" id="movil" name="movil" value="<?php echo $usuario->movil??'';?>" requiered>
                    </div>
                    <div class="formulario__campo">
                        <label class="formulario__label" for="email">Correo Electrónico</label>
                        <input class="formulario__input" type="email" placeholder="Ingresa tu correo electrónico" id="email" name="email" value="<?php echo $usuario->email??'';?>" requiered>
                    </div>
                    <input class="formulario__submit--login" type="submit" value="ENVIAR" style="background-color: <?php echo $negocio[0]->colorprincipal??'';?>;">
                </form>

                <form class="formulario" action="/registrodueño" method="POST">
                    <h4 class="registromascota__formtitulo">Datos del dueño responsable</h4>
                    <div class="formulario__campo">
                        <label class="formulario__label" for="nombre">Nombre</label>
                        <input class="formulario__input" type="text" placeholder="Ingresa tu nombre" id="nombre" name="nombre" value="<?php echo $usuario->nombre??'';?>" requiered>
                    </div>
                    <div class="formulario__campo">
                        <label class="formulario__label" for="apellido">Apellido</label>
                        <input class="formulario__input" type="text" placeholder="Ingresa tu apellido" id="apellido" name="apellido" value="<?php echo $usuario->apellido??'';?>" requiered>
                    </div>
                    <div class="formulario__campo">
                        <label class="formulario__label" for="movil">Número de Teléfono</label>
                        <input class="formulario__input" type="number" placeholder="Ingresa tu número de telefónico" id="movil" name="movil" value="<?php echo $usuario->movil??'';?>" requiered>
                    </div>
                    <div class="formulario__campo">
                        <label class="formulario__label" for="email">Correo Electrónico</label>
                        <input class="formulario__input" type="email" placeholder="Ingresa tu correo electrónico" id="email" name="email" value="<?php echo $usuario->email??'';?>" requiered>
                    </div>
                   
                    <input class="formulario__submit--login" type="submit" value="ENVIAR" style="background-color: <?php echo $negocio[0]->colorprincipal??'';?>;">
                </form>
            </div>
            <div class="registromascota__volver"><a href="/">VOLVER</a></div>
        </div>
    </div>
   
    
    
    <!--<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script> efecto de escritura-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/build/js/landingPage.js"></script>
</body>
</html>