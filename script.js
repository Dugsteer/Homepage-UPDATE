const menu = document.getElementById("menu");
const sidey = document.getElementById("conto");
const blue = window.matchMedia("(max-width: 800px)");
const ghostly = document.getElementById("ghostly");


function ghostify(){
  ghostly.innerHTML === '<img src="./img/funpic1.png" alt="decorative">' ? 
  ghostly.innerHTML = '<img src="./img/funpic2.png" alt="decorative">' : ghostly.innerHTML = '<img src="./img/funpic1.png" alt="decorative">';
}

function getNewCards(){
location.reload();
}
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



var bingoArray = [
  "bat.svg",
  "bone.svg",
  "broomstick.svg",
  "candles.svg",
  "candy.svg",
  "cat.svg",
  "cauldron.svg",
  "clown.svg",
  "coffin.svg",
  "death.svg",
  "fancy-dress.svg",
  "fangs.svg",
  "frankenstein.svg",
  "ghost.svg",
  "grave.svg",
  "halloween.svg",
  "hat.svg",
  "monster.svg",
  "moon.svg",
  "mummy.svg",
  "pirate.svg",
  "pumpkin.svg",
  "skeleton.svg",
  "skull.svg",
  "spell.svg",
  "spider.svg",
  "vampire.svg",
  "wand.svg",
  "web.svg",
  "werewolf.svg",
  "witch.svg",
  "wizard.svg",
  "zombie.svg",
];

function shuffle(bingoArray) {
  var j, x, i;
  for (i = bingoArray.length - 1; i > 0; i--) {
    j = Math.floor(Math.random() * (i + 1));
    x = bingoArray[i];
    bingoArray[i] = bingoArray[j];
    bingoArray[j] = x;
  }
  return bingoArray;
}

function shuffle(redArray) {
  var j, x, i;
  for (i = redArray.length - 1; i > 0; i--) {
    j = Math.floor(Math.random() * (i + 1));
    x = redArray[i];
    redArray[i] = redArray[j];
    redArray[j] = x;
  }
  return redArray;
}

function shuffle(greenArray) {
  var j, x, i;
  for (i = greenArray.length - 1; i > 0; i--) {
    j = Math.floor(Math.random() * (i + 1));
    x = greenArray[i];
    greenArray[i] = greenArray[j];
    greenArray[j] = x;
  }
  return greenArray;
}
function shuffle(silverArray) {
  var j, x, i;
  for (i = silverArray.length - 1; i > 0; i--) {
    j = Math.floor(Math.random() * (i + 1));
    x = silverArray[i];
    silverArray[i] = silverArray[j];
    silverArray[j] = x;
  }
  return silverArray;
}
function shuffle(orangeArray) {
  var j, x, i;
  for (i = orangeArray.length - 1; i > 0; i--) {
    j = Math.floor(Math.random() * (i + 1));
    x = orangeArray[i];
    orangeArray[i] = orangeArray[j];
    orangeArray[j] = x;
  }
  return orangeArray;
}
function shuffle(blackArray) {
  var j, x, i;
  for (i = blackArray.length - 1; i > 0; i--) {
    j = Math.floor(Math.random() * (i + 1));
    x = blackArray[i];
    blackArray[i] = blackArray[j];
    blackArray[j] = x;
  }
  return blackArray;
}
function shuffle(puceArray) {
  var j, x, i;
  for (i = puceArray.length - 1; i > 0; i--) {
    j = Math.floor(Math.random() * (i + 1));
    x = puceArray[i];
    puceArray[i] = puceArray[j];
    puceArray[j] = x;
  }
  return puceArray;
}
function shuffle(carrotArray) {
  var j, x, i;
  for (i = carrotArray.length - 1; i > 0; i--) {
    j = Math.floor(Math.random() * (i + 1));
    x = carrotArray[i];
    carrotArray[i] = carrotArray[j];
    carrotArray[j] = x;
  }
  return carrotArray;
}

shuffle(bingoArray);
var newArray = bingoArray.slice(0, 12);
var blueArray = newArray;
pastePics();

var redArray = bingoArray;
shuffle(redArray);
var blueArray = redArray.slice(0, 12);
pastePics1();

var greenArray = bingoArray;
shuffle(greenArray);
var pinkArray = greenArray.slice(0, 12);
pastePics2();

var blackArray = bingoArray;
shuffle(blackArray);
var whiteArray = blackArray.slice(0, 12);
pastePics3();

var puceArray = bingoArray;
shuffle(puceArray);
var greyArray = puceArray.slice(0, 12);
pastePics4();

var carrotArray = bingoArray;
shuffle(carrotArray);
var brownArray = carrotArray.slice(0, 12);
pastePics5();

function pastePics() {
  document.getElementById("id1").innerHTML = `<img src="img/${newArray[0]}">`;
  document.getElementById("id2").innerHTML = `<img src="img/${newArray[1]}">`;
  document.getElementById("id3").innerHTML = `<img src="img/${newArray[2]}">`;
  document.getElementById("id4").innerHTML = `<img src="img/${newArray[3]}">`;
  document.getElementById("id5").innerHTML = `<img src="img/${newArray[4]}">`;
  document.getElementById("id6").innerHTML = `<img src="img/${newArray[5]}">`;
  document.getElementById("id7").innerHTML = `<img src="img/${newArray[6]}">`;
  document.getElementById("id8").innerHTML = `<img src="img/${newArray[7]}">`;
  document.getElementById("id9").innerHTML = `<img src="img/${newArray[8]}">`;
  document.getElementById("id10").innerHTML = `<img src="img/${newArray[9]}">`;
  document.getElementById("id11").innerHTML = `<img src="img/${newArray[10]}">`;
  document.getElementById("id12").innerHTML = `<img src="img/${newArray[11]}">`;
}

function pastePics1() {
  document.getElementById("id13").innerHTML = `<img src="img/${blueArray[0]}">`;
  document.getElementById("id14").innerHTML = `<img src="img/${blueArray[1]}">`;
  document.getElementById("id15").innerHTML = `<img src="img/${blueArray[2]}">`;
  document.getElementById("id16").innerHTML = `<img src="img/${blueArray[3]}">`;
  document.getElementById("id17").innerHTML = `<img src="img/${blueArray[4]}">`;
  document.getElementById("id18").innerHTML = `<img src="img/${blueArray[5]}">`;
  document.getElementById("id19").innerHTML = `<img src="img/${blueArray[6]}">`;
  document.getElementById("id20").innerHTML = `<img src="img/${blueArray[7]}">`;
  document.getElementById("id21").innerHTML = `<img src="img/${blueArray[8]}">`;
  document.getElementById("id22").innerHTML = `<img src="img/${blueArray[9]}">`;
  document.getElementById(
    "id23"
  ).innerHTML = `<img src="img/${blueArray[10]}">`;
  document.getElementById(
    "id24"
  ).innerHTML = `<img src="img/${blueArray[11]}">`;
}
function pastePics2() {
  document.getElementById("id25").innerHTML = `<img src="img/${pinkArray[0]}">`;
  document.getElementById("id26").innerHTML = `<img src="img/${pinkArray[1]}">`;
  document.getElementById("id27").innerHTML = `<img src="img/${pinkArray[2]}">`;
  document.getElementById("id28").innerHTML = `<img src="img/${pinkArray[3]}">`;
  document.getElementById("id29").innerHTML = `<img src="img/${pinkArray[4]}">`;
  document.getElementById("id30").innerHTML = `<img src="img/${pinkArray[5]}">`;
  document.getElementById("id31").innerHTML = `<img src="img/${pinkArray[6]}">`;
  document.getElementById("id32").innerHTML = `<img src="img/${pinkArray[7]}">`;
  document.getElementById("id33").innerHTML = `<img src="img/${pinkArray[8]}">`;
  document.getElementById("id34").innerHTML = `<img src="img/${pinkArray[9]}">`;
  document.getElementById(
    "id35"
  ).innerHTML = `<img src="img/${pinkArray[10]}">`;
  document.getElementById(
    "id36"
  ).innerHTML = `<img src="img/${pinkArray[11]}">`;
}
function pastePics3() {
  document.getElementById(
    "id37"
  ).innerHTML = `<img src="img/${whiteArray[0]}">`;
  document.getElementById(
    "id38"
  ).innerHTML = `<img src="img/${whiteArray[1]}">`;
  document.getElementById(
    "id39"
  ).innerHTML = `<img src="img/${whiteArray[2]}">`;
  document.getElementById(
    "id40"
  ).innerHTML = `<img src="img/${whiteArray[3]}">`;
  document.getElementById(
    "id41"
  ).innerHTML = `<img src="img/${whiteArray[4]}">`;
  document.getElementById(
    "id42"
  ).innerHTML = `<img src="img/${whiteArray[5]}">`;
  document.getElementById(
    "id43"
  ).innerHTML = `<img src="img/${whiteArray[6]}">`;
  document.getElementById(
    "id44"
  ).innerHTML = `<img src="img/${whiteArray[7]}">`;
  document.getElementById(
    "id45"
  ).innerHTML = `<img src="img/${whiteArray[8]}">`;
  document.getElementById(
    "id46"
  ).innerHTML = `<img src="img/${whiteArray[9]}">`;
  document.getElementById(
    "id47"
  ).innerHTML = `<img src="img/${whiteArray[10]}">`;
  document.getElementById(
    "id48"
  ).innerHTML = `<img src="img/${whiteArray[11]}">`;
}
function pastePics4() {
  document.getElementById("id49").innerHTML = `<img src="img/${greyArray[0]}">`;
  document.getElementById("id50").innerHTML = `<img src="img/${greyArray[1]}">`;
  document.getElementById("id51").innerHTML = `<img src="img/${greyArray[2]}">`;
  document.getElementById("id52").innerHTML = `<img src="img/${greyArray[3]}">`;
  document.getElementById("id53").innerHTML = `<img src="img/${greyArray[4]}">`;
  document.getElementById("id54").innerHTML = `<img src="img/${greyArray[5]}">`;
  document.getElementById("id55").innerHTML = `<img src="img/${greyArray[6]}">`;
  document.getElementById("id56").innerHTML = `<img src="img/${greyArray[7]}">`;
  document.getElementById("id57").innerHTML = `<img src="img/${greyArray[8]}">`;
  document.getElementById("id58").innerHTML = `<img src="img/${greyArray[9]}">`;
  document.getElementById(
    "id59"
  ).innerHTML = `<img src="img/${greyArray[10]}">`;
  document.getElementById(
    "id60"
  ).innerHTML = `<img src="img/${greyArray[11]}">`;
}
function pastePics5() {
  document.getElementById(
    "id61"
  ).innerHTML = `<img src="img/${brownArray[0]}">`;
  document.getElementById(
    "id62"
  ).innerHTML = `<img src="img/${brownArray[1]}">`;
  document.getElementById(
    "id63"
  ).innerHTML = `<img src="img/${brownArray[2]}">`;
  document.getElementById(
    "id64"
  ).innerHTML = `<img src="img/${brownArray[3]}">`;
  document.getElementById(
    "id65"
  ).innerHTML = `<img src="img/${brownArray[4]}">`;
  document.getElementById(
    "id66"
  ).innerHTML = `<img src="img/${brownArray[5]}">`;
  document.getElementById(
    "id67"
  ).innerHTML = `<img src="img/${brownArray[6]}">`;
  document.getElementById(
    "id68"
  ).innerHTML = `<img src="img/${brownArray[7]}">`;
  document.getElementById(
    "id69"
  ).innerHTML = `<img src="img/${brownArray[8]}">`;
  document.getElementById(
    "id70"
  ).innerHTML = `<img src="img/${brownArray[9]}">`;
  document.getElementById(
    "id71"
  ).innerHTML = `<img src="img/${brownArray[10]}">`;
  document.getElementById(
    "id72"
  ).innerHTML = `<img src="img/${brownArray[11]}">`;
}

function printdiv() {
  var headstr = "BINGO CARDS";
  var footstr = "More bingo at www.esl-ology.com";
  var newstr = document.getElementById("container").innerHTML;
  var oldstr = document.body.innerHTML;
  document.body.innerHTML = headstr + newstr + footstr;
  window.print();
  document.body.innerHTML = oldstr;
  return false;
}


//TOGGLE SIDEBAR

// const sideBar = document.getElementById("infobox");

// function openSidebar() {
//   sideBar.classList.toggle("moveinfobox");
// }
