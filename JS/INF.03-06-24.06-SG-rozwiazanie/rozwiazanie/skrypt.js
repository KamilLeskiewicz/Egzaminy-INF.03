let btn1 = document.getElementById("next1");
let form1 = document.getElementById("form1");
let btn2 = document.getElementById("next2");
let form2 = document.getElementById("form2");
let form3 = document.getElementById("form3");

let widok1 = true;
let widok2 = false;
let widok3 = false;

if (btn1.click) {
  widok1 = true;
  widok2 = false;
  widok3 = false;
}
if (btn2.click) {
  widok1 = false;
  widok2 = true;
  widok3 = false;
}

if (widok1 == true) {
  form1.style.display = "block";
  form2.style.display = "none";
  form3.style.display = "none";
}
if (widok2 == true) {
  form1.style.display = "none";
  form2.style.display = "block";
  form3.style.display = "none";
}
if (widok3 == true) {
  form1.style.display = "none";
  form2.style.display = "none";
  form3.style.display = "block";
}
