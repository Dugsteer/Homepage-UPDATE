const menu = document.getElementById("menu");
const sidey = document.getElementById("sidebar");
const blue = window.matchMedia("(max-width: 800px)");

const randoms = document.getElementById("randoms").querySelectorAll('h1');

    randoms[0].parentNode.style.display = "flex";
    randoms[1].parentNode.style.display = "none";
    randoms[2].parentNode.style.display = "none";


  setInterval(revolveRandoms, 3000);
 revolveRandoms();


  function revolveRandoms(){
 if (randoms[0].parentNode.style.display === "flex" && randoms[1].parentNode.style.display === "none"  && randoms[2].parentNode.style.display === "none") {
randoms[0].parentNode.style.display = "none"; randoms[1].parentNode.style.display = "flex"; randoms[2].parentNode.style.display = "none";
 } else if (randoms[0].parentNode.style.display === "none" && randoms[1].parentNode.style.display === "flex"  && randoms[2].parentNode.style.display === "none") {
randoms[0].parentNode.style.display = "none"; randoms[1].parentNode.style.display = "none"; randoms[2].parentNode.style.display = "flex"; 
 } else if (randoms[0].parentNode.style.display === "none" && randoms[1].parentNode.style.display === "none"  && randoms[2].parentNode.style.display === "flex"){
   randoms[0].parentNode.style.display = "flex"; randoms[1].parentNode.style.display = "none"; randoms[2].parentNode.style.display = "none"; 
 }
 
  }


   
     






//Show ABOUT info
const extra = document.getElementById("info");

function show() {
  info.classList.toggle("xxc");
}

function unshow() {
  info.classList.remove("xxc");
}


function myFunction(x) {
  if (blue.matches) {
    sidey.classList.remove("block");
  }
}
function toggler() {
  sidey.classList.toggle("block");
}
myFunction(blue);

//GENERAL SCRIPT
