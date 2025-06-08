function odkryj() {
  let krotkie = document.getElementById("krotkie");
  let srednie = document.getElementById("srednie");
  let poldlugie = document.getElementById("poldlugie");
  let dlugie = document.getElementById("dlugie");

  let cena = 0;

  if (krotkie.checked) {
    cena += 25 - 10;
  }
  if (srednie.checked) {
    cena += 30 - 10;
  }
  if (poldlugie.checked) {
    cena += 40 - 10;
  }
  if (dlugie.checked) {
    cena += 50 - 10;
    }
    
  let wynik = document.getElementById("wynik");
  wynik.innerHTML = "cena promocyjna:" + cena;
}
