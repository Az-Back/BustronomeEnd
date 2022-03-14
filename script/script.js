window.addEventListener("load", () => {
  autoSlide();
})

function autoSlide() {
  setInterval(() => {
     slide(getItemActiveIndex() + 1);
  }, 5000); // slide speed = 3s
}

function slide(toIndex) {
  const itemsArray = Array.from(document.querySelectorAll(".carousel_item"));
  const itemActive = document.querySelector(".carousel_item__active");

  // check if toIndex exceeds the number of carousel items
  if (toIndex >= itemsArray.length) {
     toIndex = 0;
  }

  const newItemActive = itemsArray[toIndex];

  // start transition
  newItemActive.classList.add("carousel_item__pos_next");
  setTimeout(() => {
     newItemActive.classList.add("carousel_item__next");
     itemActive.classList.add("carousel_item__next");
  }, 20);

  // remove all transition class and switch active class
  newItemActive.addEventListener("transitionend", () => {
     itemActive.className = "carousel_item";
     newItemActive.className = "carousel_item carousel_item__active";
  }, {
     once: true
  });
}

function getItemActiveIndex() {
  const itemsArray = Array.from(document.querySelectorAll(".carousel_item"));
  const itemActive = document.querySelector(".carousel_item__active");
  const itemActiveIndex = itemsArray.indexOf(itemActive);
  return itemActiveIndex;
}

let changeH1 = document.querySelector(".MainH1");
let changeH2 = document.querySelector(".MainH2");

window.addEventListener("load", () =>  
{
   textchange()
   textchange2()
   textchange3()
   textchange4()
})

function textchange(){
   setInterval(() =>{
      changeH1.textContent = "SAVOUREZ UNE PAUSE BIEN ÊTRE";
      changeH2.textContent = "BUSTRONOME : Agréable moyen de découvrir la cuisine et les vins d’une capitale culturelle tout en visitant les plus beaux monuments de Paris.";
  }, 5000);
}

function textchange2(){
   setInterval(() =>{
      changeH1.textContent = "LAISSEZ VOS SENS VOUS TRANSPORTER";
      changeH2.textContent = "À bord du BUSTRONOME, les passagers découvrent les plus belles vues de Paris en profitant du meilleur de la gastronomie.";
  }, 10000);
}

function textchange3(){
   setInterval(() =>{
      changeH1.textContent = "DÉGUSTEZ DES METS RAFFINÉS";
      changeH2.textContent = "Menu découverte de 4 plats pour le déjeuner et de 6 plats pour le dîner au format dégustation proposés avec une selection de vins et champagnes";
  }, 15000);
}

function textchange4(){
   setInterval(() =>{
      changeH1.textContent = "PROFITEZ D’UNE VUE IMPRENABLE";
      changeH2.textContent = "Grâce au toit entièrement vitré de ce bus à impériale, plongez dans l’univers parisien dans les meilleures conditions de confort, quelle que soit la saison.";
  }, 20000);
}
