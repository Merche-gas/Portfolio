'use strict'
console.log('hola mundo')
// Menu 
const menu   = document.querySelector('.hover')
const burger = document.querySelector('.menu__button')

console.log(burger)

menu.addEventListener('click', ()=>{

    burger.classList.toggle('active')
    menu.classList.toggle('active')

})

//Tabs

const botones = document.querySelectorAll('.tabs__btn')
console.log(botones)

const secciones = document.querySelectorAll('.tabs__seccion')
console.log(secciones)

botones.forEach((cadaBtn, i)=>{
    botones[i].addEventListener('click', ()=>{

        secciones.forEach((cadaSeccion, j)=>{

            secciones[j].classList.remove('active')
        
        })
    secciones[i].classList.add('active')

        botones.forEach((cadaBtn, j)=>{
            
            botones[j].classList.remove('active')

        })

    botones[i].classList.add('active')

    })
})

// Scroll<

const contenedor  = document.querySelector('.contenedor__p')
const trabajoDuro = document.querySelector('.proyectos__h1')
const proyectosP  = document.querySelector('.proyectos__p')
const tarjetas    = document.querySelectorAll('.proyectos__tarjeta')
const tabs        = document.querySelector('.tabs')

window.addEventListener('scroll', ()=>{

    let altoWindow      = window.innerHeight
    let pixel           = window.scrollY
    let distContenedor  = contenedor.offsetTop
    let distTrabajar    = trabajoDuro.offsetTop
    let distProyectosP  = proyectosP.offsetTop
    let distTabs        = tabs.offsetTop
    

    pixel >= ( distContenedor - (altoWindow)) 
    ? contenedor.classList.add('active')
    : contenedor.classList.remove('active')
    
    pixel >= ( distTrabajar - (altoWindow)) 
    ? trabajoDuro.classList.add('active')
    : trabajoDuro.classList.remove('active')

    pixel >= ( distProyectosP - (altoWindow)) 
    ? proyectosP.classList.add('active')
    : proyectosP.classList.remove('active')

    pixel >= ( distTabs - (altoWindow)) 
    ? tabs.classList.add('active')
    : tabs.classList.remove('active')

})

tarjetas.forEach((cadaTarjeta, i)=>{
    window.addEventListener('scroll', ()=>{
        let altoWindow      = window.innerHeight
        let pixel           = window.scrollY
        let distTarjetas    = tarjetas[i].offsetTop

        pixel >= ( distTarjetas - (altoWindow)) 
        ? tarjetas[i].classList.add('active')
        : tarjetas[i].classList.remove('active')
    })
})
