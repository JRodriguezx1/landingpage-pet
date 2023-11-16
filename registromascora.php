<!DOCTYPE html>
<html lang="en">

<?php include './templates/header.php'; ?>

<body>

    <main>
        <div class="registromascota">
            <div class="registromascota__contenedor">
                <!--<div class="header__logo">
                    <a href="/"><img src="/build/img/logo+texto-blanco.svg" alt="petsanar"></a>
                </div>-->
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
    </main>
   
    
    
    <!--<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script> efecto de escritura-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/build/js/landingPage.js"></script>
</body>
</html>