<!DOCTYPE html>
<html lang="es">
<head>  
    <?php include "componentes/head.html"; ?>
<title>Portfolio</title>
</head>
<body>
    <div class="mouse rotar">
        <img src="img/mouse.png" alt="raton" loading="lazy">
    </div>
    <?php include "componentes/menu.html"; ?>

    <main class = "contenedor" >
        
        <p class="contenedor__p">¡Hola! 🖖 Me llamo <strong>Merche</strong>  y soy <strong>desarrolladora web front end.</strong>  <br> Me apasiona crear webs que ayuden a la gente en su día a día. He llegado <br> hace poco al mundo del desarrollo web y he descubierto que me encanta. <br> Estoy en proceso de convertirme en desarrolladora web full stack y <br> disfruto mucho de cada nuevo aprendizaje 😋 </p>
        
        <section class="proyectos" id="seccionProyectos">
            <h1 class="proyectos__h1 animado">Sip, he trabajado muy duro. </h1>
            <p class="proyectos__p">En cada proyecto he puesto todo mi esfuerzo. </p>
            <div class="proyectos__tarjeta fantic">
                <div class="proyectos__izda">
                    <p>REDISEÑO WEB PARA PRÁCTICAS</p>
                </div>
                <div class="proyectos__centro">
                    <div class="proyectos__overflow">
                        <p>fantic <span>by merche</span> </p>
                    </div>
                </div>
                <div class="proyectos__dcha">
                    <h2 class="proyectos__h2">Fantic</h2>
                    <a href="#" class="proyectos__a">VISITAR</a>
                </div>
            </div>
            <div class="proyectos__tarjeta apple">
                <div class="proyectos__izda">
                    <p>MAQUETACIÓN DE LA WEB</p>
                </div>
                <div class="proyectos__centro">
                    <div class="proyectos__overflow">
                        <p>apple <span>by merche</span> </p>
                    </div>
                </div>
                <div class="proyectos__dcha">
                    <h2 class="proyectos__h2">Apple</h2>
                    <a href="#" class="proyectos__a">VISITAR</a>
                </div>
            </div>
            <div class="proyectos__tarjeta pixar">
                <div class="proyectos__izda">
                    <p>MAQUETACIÓN DE LA WEB</p>
                </div>
                <div class="proyectos__centro">
                    <div class="proyectos__overflow">
                        <p>pixar <span>by merche</span> </p>
                    </div>
                </div>
                <div class="proyectos__dcha">
                    <h2 class="proyectos__h2">Pixar</h2>
                    <a href="#" class="proyectos__a">VISITAR</a>
                </div>
            </div>
            <div class="proyectos__tarjeta restaurante">
                <div class="proyectos__izda">
                    <p>MAQUETACIÓN DE LA WEB</p>
                </div>
                <div class="proyectos__centro">
                    <div class="proyectos__overflow">
                        <p>pesto <span>by merche</span> </p>
                    </div>
                </div>
                <div class="proyectos__dcha">
                    <h2 class="proyectos__h2">Pesto</h2>
                    <a href="#" class="proyectos__a">VISITAR</a>
                </div>
            </div>
        </section>
        <div class="tabs">
            <ul class="tabs__ul">
                <li class="tabs__li">
                    <button class="tabs__btn active">HTML
                        <span class="tabs__overflow">
                            <img src="img/html.png" alt="logo html" loading="lazy">
                        </span>
                    </button>
                </li>
                <li class="tabs__li">
                    <button class="tabs__btn">CSS
                        <span class="tabs__overflow">
                            <img src="img/css.png" alt="logo css" loading="lazy">
                        </span>
                    </button>
                </li>
                <li class="tabs__li">
                    <button class="tabs__btn">Sass
                        <span class="tabs__overflow">
                            <img src="img/sass.png" alt="logo sass" loading="lazy">
                        </span>
                    </button>
                </li>
                <li class="tabs__li">
                    <button class="tabs__btn">JS
                        <span class="tabs__overflow">
                            <img src="img/js.png" alt="logo javascript" loading="lazy">
                        <span>
                    </button>
                </li>
                <li class="tabs__li">
                    <button class="tabs__btn">jQuery
                        <span class="tabs__overflow">
                            <img src="img/jQ.png" alt="logo jquery" loading="lazy">
                        </span>
                    </button>
                </li>
            </ul>
            <div class="tabs__contenedor">
                <section class="tabs__seccion active">
                    <h2 class="tabs__h2">HTML</h2>
                    <p class="tabs__p">Cuando comencé a estudiar HTML, float me pareció difícil de usar por primera vez, pero cuando nos enseñaron flex y grid, ¡la cosa cambió! Para mi fue como magia y una vez que llevas unos meses practicando, puedes hacer cosas realmente sorprendentes. <br> 
                    </p>
                    
                </section>
                
                <section class="tabs__seccion">
                    <h2 class="tabs__h2">CSS</h2>
                    <p class="tabs__p">La parte más difícil de diseñar una web para mi es el CSS. Pero mi profe nos enseñó el truco de colorear los contendores y ahora todo resulta mucho más sencillo. ¿Quieres ver algunos ejemplos?</p>
                </section>
                
                <section class="tabs__seccion">
                    <h2 class="tabs__h2">sass</h2>
                    <p class="tabs__p">Es la forma más organizada de trabajar con CSS, me encanta verlo todo tan clasificado y ordenado. Desde que aprendí a utilizarlo ya no trabajo con CSS.</p>
                </section>

                <section class="tabs__seccion">
                    <h2 class="tabs__h2">JS</h2>
                    <p class="tabs__p">Al principio me pareció súper difícil. Comenzamos estudiando JS para animaciones, pero cuando entramos a JS para datos, me di cuenta de que las animaciones no eran para tanto 😂  Después de un tiempo he ido viéndolo más claro, pero me parece bastante difícil. ¡Hay que practicar! </p>
                </section>

                <section class="tabs__seccion">
                    <h2 class="tabs__h2">jQuery</h2>
                    <p class="tabs__p">Una vez que terminamos JS, jQuery me pareció un paseo por el campo. Me encanta usarlo, ¡es tan corto y tan limpio!</p>
                </section>
            </div>
        </div>
        <section class="contacto">
            <h3 class="contacto__h3">Contacto</h3>
            <p class="contacto__p">Gracias por llegar hasta aquí. Espero que mi portfolio te haya gustado. Si quieres contactar conmigo puedes enviarme un <a href="mailto:merchegas75@gmail.com" target="blank" rel="noopener noreferrer" class="contacto__a"> ✉️ a merchegas75@gmail.com</a>  y hablamos.</p>

            <h3 class="contacto__h3">Redes Sociales</h3>
            <div class="media__right">
                <a href="https://github.com/Merche-gas" target ="_blank" rel="noopener noreferrer" class="media__a"><i class="fa-brands fa-github"></i> GitHub</a>
                <a href="https://www.linkedin.com/in/mercedes-gasca-3804296b/" target="_blank" rel="noopener noreferrer" class="media__a"> <i class="fa-brands fa-linkedin"></i> Linkedin</a>
            </div>
        </section>

    </main>
    
    <?php include "componentes/footer.html"; ?>
</body>
</html>