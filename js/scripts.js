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
            botones[j].classList.remove('active')
        })
        secciones[i].classList.add('active')
        botones[i].classList.add('active')

    })
})

// Scroll<

const contenedor  = document.querySelector('.contenedor__p')
const trabajoDuro = document.querySelector('.proyectos__h1')
const proyectosP  = document.querySelector('.proyectos__p')
const tarjetas    = document.querySelectorAll('.proyectos__tarjeta')
const tabs        = document.querySelector('.tabs')
const contacto    = document.querySelector('.contacto')


window.addEventListener('scroll', ()=>{

    let { innerHeight , scrollY} = window
    let { offsetTop : offsetContenedor ,
          classList : classListContenedor } = contenedor
    
    
    let distTrabajar    = trabajoDuro.offsetTop
    let distProyectosP  = proyectosP.offsetTop
    let distTabs        = tabs.offsetTop
    let distContacto    = contacto.offsetTop
    

    scrollY >= ( offsetContenedor - (innerHeight)) 
    ? classListContenedor.add('active')
    : classListContenedor.remove('active')
    
    scrollY >= ( distTrabajar - (innerHeight)) 
    ? trabajoDuro.classList.add('active')
    : trabajoDuro.classList.remove('active')

    scrollY >= ( distProyectosP - (innerHeight)) 
    ? proyectosP.classList.add('active')
    : proyectosP.classList.remove('active')

    scrollY >= ( distTabs - (innerHeight)) 
    ? tabs.classList.add('active')
    : tabs.classList.remove('active')

    scrollY >= ( distContacto - (innerHeight)) 
    ? contacto.classList.add('active')
    : contacto.classList.remove('active')

})

tarjetas.forEach((cadaTarjeta, i)=>{
    window.addEventListener('scroll', ()=>{
        let {innerHeight , scrollY} = window
        let altoWindow      = window.innerHeight
        let pixel           = window.scrollY
        let distTarjetas    = tarjetas[i].offsetTop

        scrollY >= ( distTarjetas - (innerHeight)) 
        ? tarjetas[i].classList.add('active')
        : tarjetas[i].classList.remove('active')
    })
})

const mouse = document.querySelector('.mouse')
console.log(mouse)

window.addEventListener('mousemove', (e)=>{

    let{ clientY , clientX } = e
    
    console.log(clientX)

    mouse.style.top = `${clientY - 30}px`
    mouse.style.left = `${clientX + 60}px`
    
})