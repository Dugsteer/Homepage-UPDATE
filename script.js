const menu = document.getElementById("menu");
const sidey = document.getElementById("conto");
const blue = window.matchMedia("(max-width: 800px)");

const loader = document.getElementById("loaderDiv");

function stopLoader() {
  loader.classList.add("stop");
}



function startLoader(){
  loader.classList.remove("stop");
  setTimeout(stopLoader, 1000);
}

setTimeout(stopLoader, 1000);



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


