"use strict";console.log("hola mundo");var e=document.querySelector(".hover"),t=document.querySelector(".menu__button");console.log(t),e.addEventListener("click",(function(){t.classList.toggle("active"),e.classList.toggle("active")}));var o=document.querySelectorAll(".tabs__btn");console.log(o);var c=document.querySelectorAll(".tabs__seccion");console.log(c),o.forEach((function(e,t){o[t].addEventListener("click",(function(){c.forEach((function(e,t){c[t].classList.remove("active"),o[t].classList.remove("active")})),c[t].classList.add("active"),o[t].classList.add("active")}))}));var s=document.querySelector(".contenedor__p"),a=document.querySelector(".proyectos__h1"),n=document.querySelector(".proyectos__p"),i=document.querySelectorAll(".proyectos__tarjeta"),l=document.querySelector(".tabs"),r=document.querySelector(".contacto");window.addEventListener("scroll",(function(){var e=window,t=e.innerHeight,o=e.scrollY,c=s.offsetTop,i=s.classList,d=a.offsetTop,v=n.offsetTop,u=l.offsetTop,f=r.offsetTop;o>=c-t?i.add("active"):i.remove("active"),o>=d-t?a.classList.add("active"):a.classList.remove("active"),o>=v-t?n.classList.add("active"):n.classList.remove("active"),o>=u-t?l.classList.add("active"):l.classList.remove("active"),o>=f-t?r.classList.add("active"):r.classList.remove("active")})),i.forEach((function(e,t){window.addEventListener("scroll",(function(){var e=window,o=e.innerHeight,c=e.scrollY;window.innerHeight,window.scrollY;c>=i[t].offsetTop-o?i[t].classList.add("active"):i[t].classList.remove("active")}))}));var d=document.querySelector(".mouse");console.log(d),window.addEventListener("mousemove",(function(e){var t=e.clientY,o=e.clientX;console.log(o),d.style.top="".concat(t-30,"px"),d.style.left="".concat(o+60,"px")}));