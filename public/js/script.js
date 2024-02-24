let bLink = document.getElementById("bLink");
let formLink=document.getElementById("formLink");

bLink.addEventListener("click", function (e) {

   if (formLink.classList.contains("hidden"))
    formLink.classList.remove("hidden");
   else 
    formLink.classList.add("hidden");

});


