let aujourdhui = new Date();
document.getElementById("demo").innerHTML = aujourdhui;

let update = document.querySelector("#update");
let bottom = document.querySelector(".bottom");
let plus = document.querySelector(".menu+");
let minus = document.querySelector(".menu-");

plus.addEventListener('click', () =>{
    count = parseInt(update.innerHTML);
});


minus.addEventListener('click', () =>{
    update.innerHTML = count++;
});