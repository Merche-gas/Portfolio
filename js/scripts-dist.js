"use strict";console.log("hola mundo");var e=document.querySelector(".hover"),t=document.querySelector(".menu__button"),o=document.querySelector(".menuMovil");console.log(t),e.addEventListener("click",(function(){t.classList.toggle("active"),e.classList.toggle("active"),o.classList.toggle("active")}));var c=document.querySelectorAll(".menuMovil__a");c.forEach((function(s,a){c[a].addEventListener("click",(function(){t.classList.remove("active"),e.classList.remove("active"),o.classList.remove("active")}))}));var s=document.querySelectorAll(".tabs__btn");console.log(s);var a=document.querySelectorAll(".tabs__seccion");console.log(a),s.forEach((function(e,t){s[t].addEventListener("click",(function(){a.forEach((function(e,t){a[t].classList.remove("active"),s[t].classList.remove("active")})),a[t].classList.add("active"),s[t].classList.add("active")}))}));var l=document.querySelector(".contenedor__about");console.log(l);var i=document.querySelector(".proyectos__h1"),n=document.querySelector(".proyectos__p"),r=document.querySelectorAll(".proyectos__tarjeta"),v=document.querySelector(".tabs"),d=document.querySelector(".contacto");window.addEventListener("scroll",(function(){var e=window,t=e.innerHeight,o=e.scrollY,c=l.offsetTop,s=l.classList,a=i.offsetTop,r=n.offsetTop,u=v.offsetTop,m=d.offsetTop;o>=c-t/1.2?s.add("active"):s.remove("active"),o>=a-t/1.1?i.classList.add("active"):i.classList.remove("active"),o>=r-t/1.1?n.classList.add("active"):n.classList.remove("active"),o>=u-t/1.1?v.classList.add("active"):v.classList.remove("active"),o>=m-t/1.1?d.classList.add("active"):d.classList.remove("active")})),r.forEach((function(e,t){window.addEventListener("scroll",(function(){var e=window,o=e.innerHeight;e.scrollY>=r[t].offsetTop-o/1.2?r[t].classList.add("active"):r[t].classList.remove("active")}))}));var u=document.querySelector(".mouse");console.log(u),window.addEventListener("mousemove",(function(e){var t=e.clientY,o=e.clientX;console.log(o),u.style.top="".concat(t-30,"px"),u.style.left="".concat(o+60,"px")}));