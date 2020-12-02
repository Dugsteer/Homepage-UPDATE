const menu = document.getElementById("menu");
const sidey = document.getElementById("sidebar");
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


//Christmas Countdown
const countdown = document.getElementById('countdown');
today=new Date();
var cmas=new Date(today.getFullYear(), 11, 25);
if (today.getMonth()==11 && today.getDate()>25) 
{
cmas.setFullYear(cmas.getFullYear()+1); 
}  
var one_day=1000*60*60*24;
countdown.innerHTML = (Math.ceil((cmas.getTime()-today.getTime())/(one_day)));

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


function playHorn(){
  const beep = new Audio("sounds/bus-horn.mp3");
  beep.play();
}

jiggly.addEventListener('click', playHorn);


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



function myFunction(x) {if (blue.matches) {sidey.classList.remove("block");}}
function toggler() {sidey.classList.toggle("block");}
myFunction(blue);

//GENERAL SCRIPT


