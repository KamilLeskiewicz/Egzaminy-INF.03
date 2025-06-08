let cytat1 = document.getElementById("osoba1");
let cytat2 = document.getElementById("osoba2");
let cytat3 = document.getElementById("osoba3");
let cytat = document.getElementById("cytat");
cytat.addEventListener("click", change);
let Acytat = 1;
function change() {
  if (Acytat == 3) {
    Acytat = 1;
  } else {
    Acytat++;
  }
  if (Acytat == 1) {
    cytat1.style.display = "block";
    cytat2.style.display = "none";
    cytat3.style.display = "none";
  }
  if (Acytat == 2) {
    cytat1.style.display = "none";
    cytat2.style.display = "block";
    cytat3.style.display = "none";
  }
  if (Acytat == 3) {
    cytat1.style.display = "none";
    cytat2.style.display = "none";
    cytat3.style.display = "block";
  }

  console.log(Acytat);
}
