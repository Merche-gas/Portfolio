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

