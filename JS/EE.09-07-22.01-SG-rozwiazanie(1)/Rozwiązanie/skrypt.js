// ‒ Obsługuje akcje wywoływane kliknięciem na zdjęciach z bloku lewego za pomocą języka JavaScript
// ‒ Po kliknięciu na dowolnej miniaturze jest ona wyświetlona w bloku głównym (zamiast lanzarotte.jpg)
// ‒ Po kliknięciu ikony icon-off.jpg jest ona podmieniana na ikonę icon-on.jpg. Po ponownym kliknięciu –
// powraca do icon-off.jpg i tak na zmianę – realizowane za pomocą funkcji.

let icon = document.getElementById("icon");
let Zdjęcie = document.getElementById("zdjecie");
let iconState = false;

function zdjecie(id) {
  Zdjęcie.setAttribute("src", `${id}.jpg`);
}

function ikona() {
  if (iconState == false) {
    iconState = true;
    icon.setAttribute("src", "icon-on.png");
  } else {
    iconState = false;
    icon.setAttribute("src", "icon-off.png");
  }
}
