/*
FORMULARIO PARA AÑADIR NUEVOS ENLACES 
*/ 

let bLink = document.getElementById("bLink");
let formLink=document.getElementById("formLink");

bLink.addEventListener("click", function (e) {

   if (formLink.classList.contains("hidden"))
   {
    formLink.classList.remove("hidden");
    formLink.classList.remove("opacity-0");
    formLink.classList.add("opacity-100");
   }
    else 
    {
      formLink.classList.remove("opacity-100");
      formLink.classList.add("opacity-0");
      setTimeout(() => {
        formLink.classList.add("hidden");
      }, 200);
    }
});

/* QR CODE */

let showqr = document.getElementById("showqr");
let myqr = document.getElementById("myqr");


showqr.addEventListener("click", function (e) {

    if (myqr.classList.contains("hidden"))
    {
      myqr.classList.remove("hidden");
      showqr.innerHTML='Hidden QR Code';
    }
    else 
    {
      myqr.classList.add("hidden");
      showqr.innerHTML='Show QR Code';
    }
 });