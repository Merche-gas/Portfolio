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

