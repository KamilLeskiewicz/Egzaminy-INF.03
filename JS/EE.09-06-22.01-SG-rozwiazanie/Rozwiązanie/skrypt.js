let prawy = document.getElementById("prawy");
let obrazek = document.getElementById("obraz");
let li = document.getElementById("lista");

function tlo(kolor) {
  prawy.style.background = `${kolor}`;
}

let rozmiar = document.getElementById("rozmiar");

function zmienRozmiar(wielkosc) {
  prawy.style.fontSize = `${wielkosc}`;
}

function zmienRamke(border) {
  if (border == true) {
    obrazek.style.border = "1px solid white";
  } else {
    obrazek.style.border = "none";
  }
}

function zmienPunktor(punktor) {
  li.style.listStyle = `${punktor}`;
}

function zmienKolor(kolor) {
  prawy.style.color = `${kolor}`;
  console.log(kolor)
}


