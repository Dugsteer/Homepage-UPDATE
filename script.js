const menu = document.getElementById("menu");
const sidey = document.getElementById("conto");
const blue = window.matchMedia("(max-width: 800px)");
const changePic = document.getElementById('ghostly');
const loader = document.getElementById("loaderDiv");
const jiggly = document.getElementById('imageCard');

//Show ABOUT info
const extra = document.getElementById('info');

function show(){
    info.classList.toggle('xxc');
};

function unshow(){
    info.classList.remove('xxc');
};

//Change main pic

setInterval(picChanger, 5000);
picChanger();

function picChanger(){
  changePic.innerHTML === '<img src="img/london.png" alt="">' ? changePic.innerHTML = '<img src="img/newyork.png" alt="">' :  changePic.innerHTML ='<img src="img/london.png" alt="">'
}


//Jiggle the imagecard

setInterval(jiggleMe, 15000);

jiggleMe();
 jiggleYou();

function jiggleMe(){
  setTimeout(jiggleYou, 500);
 
}

function removeJiggle(){
  jiggly.classList.remove('jiggle');
}

function jiggleYou(){
  jiggly.classList.add('jiggle');
  setTimeout(removeJiggle, 2000);
}



//check for top of window
function checkForTop (){
  loader.style.top = (window.pageYOffset) + "px";

}

checkForTop();

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


