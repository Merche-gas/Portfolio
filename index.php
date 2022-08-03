<!DOCTYPE html>
<html lang="en">
<head>  
    <?php include "componentes/head.html"; ?>
<title>Portfolio</title>
</head>
<body>
    <?php include "componentes/menu.html"; ?>

    <main class = "contenedor" >
        
        <p>¡Hola! 🖖 Me llamo Merche y soy desarrolladora web front end. <br> Me apasiona crear webs que ayuden a la gente en su día a día.</p>
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
                    <button class="tabs__btn active">html
                        <div class="tabs__overflow">
                            <img src="img/html_sm.png" alt="">
                        </div>
                    </button>
                </li>
                <li class="tabs__li">
                    <button class="tabs__btn">css
                        <div class="tabs__overflow">
                            <img src="img/css_sm.png" alt="">
                        </div>
                    </button>
                </li>
                <li class="tabs__li">
                    <button class="tabs__btn">sass
                        <div class="tabs__overflow">
                            <img src="img/css_sm.png" alt="">
                        </div>
                    </button>
                </li>
                <li class="tabs__li">
                    <button class="tabs__btn">js
                        <div class="tabs__overflow">
                            <img src="img/js_sm.png" alt="">
                        </div>
                    </button>
                </li>
                <li class="tabs__li">
                    <button class="tabs__btn">jquery
                        <div class="tabs__overflow">
                            <img src="img/js_sm.png" alt="">
                        </div>
                    </button>
                </li>
            </ul>
            <div class="tabs__contenedor">
                <section class="tabs__seccion active">
                    <h2 class="tabs__h2">html</h2>
                    <p class="tabs__p">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum accusantium dolore porro iste voluptates cupiditate, veniam et sapiente, rerum, qui eos! Impedit id in non ab corporis dolor nihil maxime.</p>
                </section>
                
                <section class="tabs__seccion">
                    <h2 class="tabs__h2">css</h2>
                    <p class="tabs__p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet recusandae optio expedita sint veniam suscipit numquam, magnam ex deserunt corporis? Harum praesentium quia inventore molestiae, et id cum nulla ratione?</p>
                </section>
                
                <section class="tabs__seccion">
                    <h2 class="tabs__h2">sass</h2>
                    <p class="tabs__p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis temporibus nam veritatis quibusdam facilis adipisci pariatur magni velit sint voluptatibus. Quisquam ex consequatur, nemo totam porro perspiciatis reiciendis? A, eos.</p>
                </section>

                <section class="tabs__seccion">
                    <h2 class="tabs__h2">js</h2>
                    <p class="tabs__p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis temporibus nam veritatis quibusdam facilis adipisci pariatur magni velit sint voluptatibus. Quisquam ex consequatur, nemo totam porro perspiciatis reiciendis? A, eos.</p>
                </section>

                <section class="tabs__seccion">
                    <h2 class="tabs__h2">jquery</h2>
                    <p class="tabs__p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis temporibus nam veritatis quibusdam facilis adipisci pariatur magni velit sint voluptatibus. Quisquam ex consequatur, nemo totam porro perspiciatis reiciendis? A, eos.</p>
                </section>
            </div>
        </div>

    </main>
    
    <?php include "componentes/footer.html"; ?>
</body>
</html>