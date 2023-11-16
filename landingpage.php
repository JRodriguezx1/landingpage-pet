<!DOCTYPE html>
<html lang="en">

<?php include './templates/header.php'; ?>

<body>
    <main>
        <div class="encabezado">
            <div class="encabezado__contenedor">
                <div class="encabezado__contenidotext">
                    <h1 class="encabezado__titulo">¡Bienvenido a <span>PetSanar!</span></h1>
                    <p class="encabezado__descripcion">Donde el amor por las mascotas y la salud se unen.</p>
                    <a class="encabezado__enlace" href="#planes">Conoce los planes</a>
                </div>
            </div>
        </div>
        <section class="petsanar">
            <div class="petsanar__contenedor">
                <div class="petsanar__texto">
                    <div class="petsanar__divp">
                        <img class="petsanar__letrap" src="/build/img/P.svg" alt="">
                    </div>
                    <p class="petsanar__parrafo">
                        En PetSanar entendemos que tus peludos amigos son parte de tu
                        familia. Por eso, estamos aquí para brindarles la mejor atención 
                        médica, el cariño que se merecen y la tranquilidad que necesitas.
                    </p>
                </div>
                <img class="petsanar__doctores" src="/build/img/doctores.png" alt="">
            </div>
        </section>

        <section id="veterinarios" class="veterinarias">
            <div class="veterinarias__contenedor">
                <h2 class="veterinarias__titulo line-seudoelement--down">Veterinarias vinculadas</h2>
                <!--<div class="veterinarias__vinculadas">
                    <div class="veterinarias__vinculada">
                        <img class="veterinarias__miniflag" src="/build/img/miniflagcol.png" alt="">
                        <img class="veterinarias__logo" src="/build/img/carevet_col.png" alt="">
                    </div>
                    <div class="veterinarias__vinculada">
                        <img class="veterinarias__miniflag" src="/build/img/miniflagmex.png" alt="">
                        <img class="veterinarias__logo" src="/build/img/carevet_mx.png" alt="">
                    </div>
                    <div class="veterinarias__vinculada">
                        <img class="veterinarias__miniflag" src="/build/img/miniflagcol.png" alt="">
                        <img class="veterinarias__logo" src="/build/img/saludanimal.jpeg" alt="">
                    </div>
                    <div class="veterinarias__vinculada">
                        <img class="veterinarias__miniflag" src="/build/img/miniflagcol.png" alt="">
                        <img class="veterinarias__logo--agrandar" src="/build/img/murgivet.png" alt="">
                    </div>
                </div>-->
                <div class="swiper veterinarias__swiper">
                    <div class="swiper-wrapper veterinarias__vinculadas">
                        <div class="swiper-slide">
                            <div class="veterinarias__vinculada">
                                <img class="veterinarias__miniflag" src="/build/img/miniflagcol.png" alt="">
                                <img class="veterinarias__logo" src="/build/img/carevet_col.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="veterinarias__vinculada">
                                <img class="veterinarias__miniflag" src="/build/img/miniflagmex.png" alt="">
                                <img class="veterinarias__logo" src="/build/img/carevet_mx.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="veterinarias__vinculada">
                                <img class="veterinarias__miniflag" src="/build/img/miniflagcol.png" alt="">
                                <img class="veterinarias__logo" src="/build/img/saludanimal.jpeg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="veterinarias__vinculada">
                                <img class="veterinarias__miniflag" src="/build/img/miniflagmex.png" alt="">
                                <img class="veterinarias__logo" src="/build/img/drozzmx.jpeg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="veterinarias__vinculada">
                                <img class="veterinarias__miniflag" src="/build/img/miniflagmex.png" alt="">
                                <img class="veterinarias__logo" src="/build/img/petslandmx.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="veterinarias__vinculada">
                                <img class="veterinarias__miniflag" src="/build/img/miniflagcol.png" alt="">
                                <img class="veterinarias__logo" src="/build/img/murgivet.png" alt="">
                            </div>
                        </div>  
                    </div>
                    <div class="swiper-button-next"></div>  
                    <div class="swiper-button-prev"></div> 
                    <div class="swiper-pagination"></div>
                </div>

                <div class="veterinarias__sticker">
                    <img class="inyeccion" src="/build/img/inyeccion1.png" alt="">
                </div>
            </div>
        </section>

        <section class="novedades">
            <div class="novedades__contenedor line-seudoelement--up">
                <div class="novedades__contenido">
                    <h2 class="novedades__titulo">Enterate de nuestras</h2>
                    <h2 class="novedades__tituloverde">novedades</h2>
                    <div class="novedades__subcontenido">
                        <h2 class="novedades__titulofarmacia">Farmacia   <img src="/build/img/P-verde.svg" alt="">ets</h2>
                        <h4 class="novedades__parrafo">Estamos trabajando para que pronto puedas <br> encontrar aquí a la venta:</h4>
                        <div class="novedades__medicamentos">
                            <div class="novedades__medicamento">
                                <h4 class="tipo-medicamento">Medicamentos farmacologicos</h4>
                                <p class="observacion line-seudoelement--down">(bajo prescripción medica)</p>
                                <ul class="lista">
                                    <li>Pastillas</li>
                                    <li>Inyecciones</li>
                                    <li>Jarabes</li>
                                    <li>Antiparasitarios</li>
                                    <li>Antibióticos</li>
                                </ul>
                            </div>
                            <div class="novedades__medicamento">
                                <h4 class="tipo-medicamento">Medicamentos naturales</h4>
                                <p class="observacion line-seudoelement--down">(bajo prescripción medica)</p>
                                <ul class="lista">
                                    <li>Sueros</li>
                                    <li>Cosméticos naturales</li>
                                    <li>Jabones</li>
                                    <li>Vitaminas</li>
                                </ul>
                                <img class="super-p-verde" src="/build/img/P-verde.svg" alt="">
                            </div>   
                        </div>
                    </div>
                </div>
                <div class="novedades__img">
                    <img class="banner" src="/build/img/BANNER2.png" alt="">
                </div>
            </div>
        </section>

        <section class="standpets">
            <div class="standpets__contenedor">
                <div class="standpets__titulo line-seudoelement--down">
                    <img class="standpets__imgtitulo" src="/build/img/titulo-standpets.svg" alt="">
                </div>
                <h4 class="standpets__descripcion">En el equipo PetSanar estamos trabajando para tenerte una gran tienda online donde pronto podrás encontrar:</h4>
                
                <div class="standpets__retangulo">
                    <img class="perros perro2" src="/build/img/perro2.png" alt="">
                    <img class="perros perro3" src="/build/img/perro3.png" alt="">
                    <div class="standpets__textohuella">
                        <p class="texto">Juguetes, alimentos, ropa, elementos de higiene accesorios y más</p>
                        <img class="huella" src="/build/img/huella.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section id="servicios" class="paises">
            <div class="paises__contenedor">
                <div class="paises__bloque">
                    <div class="paises__contenido">
                        <div class="paises__icono"><img src="/build/img/veterinario1.png" alt=""></div>
                        <h4 class="paises__titulo">MEXICO</h4>
                        <ul class="paises__lista">
                            <li>Telemedicina</li>
                            <li>Consulta médica veterinaria especializada</li>
                            <li>Stan web de productos</li>
                            <li>Podcast sobre educación y cuidado de la mascota</li>
                            <li>Recomendaciones médicas</li>
                        </ul>
                        <div class="btn"><a href="">Aquiéralo aqui</a></div>
                    </div>
                </div>
                <div class="paises__bloque">
                    <div class="paises__contenido">
                        <div class="paises__icono"><img src="/build/img/veterinario1.png" alt=""></div>
                        <h4 class="paises__titulo">COLOMBIA</h4>
                        <ul class="paises__lista">
                            <li>Telemedicina</li>
                            <li>Consulta médica veterinaria especializada</li>
                            <li>Stan web de productos</li>
                            <li>Podcast sobre educación y cuidado de la mascota</li>
                            <li>Recomendaciones médicas</li>
                        </ul>
                        <div class="btn"><a href="">Aquiéralo aqui</a></div>
                    </div>
                </div>
                <div class="paises__bloque">
                    <div class="paises__contenido">
                        <div class="paises__icono"><img src="/build/img/icono-perro1.png" alt=""></div>
                        <h4 class="paises__titulo">CURSO DE CUIDADO Y PROTECCIÓN DE LA MASCOTA</h4>
                        <p class="paises__descripcion">Este curso te brindará las habilidades necesarias para identificar 
                            cuándo tu mascota requiere atención médica de urgencia y comprender las necesidades nutricionales
                            esenciales para proporcionar la alimentación adecuada en cada etapa de su vida. Aprenderás 
                            aspectos vitales para garantizar el bienestar y protección de tu mascota.</p>
                        <div class="btn"><a href="">Aquiéralo aqui</a></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="planes" class="planes">
            <div class="planes__contenedor">
                <div class="planes__titulo">
                    <div class="detalletitulo">
                        <h2 class="tituloblanco">Elige tu plan</h2>
                        <h2 class="tituloverde">favorito</h2>
                    </div>
                </div>
                <!--<div class="planes__planescontenido">-->
                <div class="contenedorswiper">
                <div class="swiper planes__swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="planes__plan">
                                <img class="planes__imghueso" src="/build/img/huesoplan.svg" alt="imagenhuesoplan">
                                <div class="planes__plancontenido">
                                    <div class="planes__precio">
                                        <img src="/build/img/plan_gold.png" alt="">
                                        <div class="planes__moneda">
                                            <p class="divisa">usd</p>
                                            <p class="valor">500000</p>
                                        </div>
                                    </div>
                                    <div class="planes__detalleplan">
                                        <h4 class="planes__nombreplan">PLAN GOLD</h4>
                                        <p class="planes__descripcion">Consultas periodicas y valoracion especializada Parto al año de permanencia y se cubre el 20% Radiografia Cirugia Ortopedia Control de parasitos internos y externos Vacunacion Ecografia Microship</p>
                                    </div>
                                    <div class="planes__btn">
                                        <a href="">APPLY NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="planes__plan">
                                <img class="planes__imghueso" src="/build/img/huesoplan.svg" alt="imagenhuesoplan">
                                <div class="planes__plancontenido">
                                    <div class="planes__precio">
                                        <img src="/build/img/plan_gold.png" alt="">
                                        <div class="planes__moneda">
                                            <p class="divisa">Cop</p>
                                            <p class="valor">500.000</p>
                                        </div>
                                    </div>
                                    <div class="planes__detalleplan">
                                        <h4 class="planes__nombreplan">PLAN GOLD</h4>
                                        <p class="planes__descripcion">Consultas periodicas y valoracion especializada Parto al año de permanencia y se cubre el 20% Radiografia Cirugia Ortopedia Control de parasitos internos y externos Vacunacion Ecografia Microship</p>
                                    </div>
                                    <div class="planes__btn">
                                        <a href="">APPLY NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="planes__plan">
                                <img class="planes__imghueso" src="/build/img/huesoplan.svg" alt="imagenhuesoplan">
                                <div class="planes__plancontenido">
                                    <div class="planes__precio">
                                        <img src="/build/img/plan_gold.png" alt="">
                                        <div class="planes__moneda">
                                            <p class="divisa">usd</p>
                                            <p class="valor">99</p>
                                        </div>
                                    </div>
                                    <div class="planes__detalleplan">
                                        <h4 class="planes__nombreplan">Evaluation and processing</h4>
                                        <p class="planes__descripcion">Consultas periodicas y valoracion especializada Parto al año de permanencia y se cubre el 20% Radiografia Cirugia Ortopedia Control de parasitos internos y externos Vacunacion Ecografia Microship</p>
                                    </div>
                                    <div class="planes__btn">
                                        <a href="">APPLY NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- swiper wraper-->
                    <div class="swiper-button-next"></div>  
                    <div class="swiper-button-prev"></div> 
                    <div class="swiper-pagination"></div>
                </div>
                </div>
                <!--</div> <!-- fin planescontenido --->
            </div> <!-- fin planes__contenedor-->
        </section>
        <div class="boton-arriba">
            <a class="btn-up" href="#"> <i class="fa-solid fa-angles-up"></i></a> <!-- solo con poner el # se va hacia arriba de la pagina -->
        </div>
    </main>

    <footer class="footer">
        <div class="footer__contenedor">
            <div class="colum footer__infoempresa">
                <img class="footer__logopetsanar" src="/build/img/logo+texto-verde.svg" alt="logopetsanar">
                <p>London Oxford Street, Memory Lane Chicago 012 United Kingdom.</p>
                <p>443 5445 333 | moontheme@studio.net</p>
            </div>
            <div class="colum footer__navegacion">
                <a href="/">Home</a>
                <a href="/">Buy a home</a>
                <a href="/">Refinance</a>
                <a href="/">About</a>
            </div>
            <div class="colum footer__mas">
                <a href="/">Apply</a>
                <a href="/">Contact</a>
                <a href="/">Blog</a>
            </div>
        </div>
    </footer>
    
    <!--<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script> efecto de escritura-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/build/js/landingPage.js"></script>
</body>
</html>