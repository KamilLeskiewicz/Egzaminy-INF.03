function odkryj() {
    let wynik = document.getElementById("wynik");
    let cena = 0;

    const krotkie = document.getElementById('krotkie');
    const srednie = document.getElementById('srednie');
    const poldlugie = document.getElementById('poldlugie');
    const dlugie = document.getElementById('dlugie');

    if (krotkie.checked) {
        cena = 25 - 10;
    }
    else if (srednie.checked) {
        cena = 30 - 10;
    }
    else if (poldlugie.checked) {
        cena = 40 - 10;
    }
    else if (dlugie.checked) {
        cena = 50 - 10;
    }

    wynik.innerHTML = "<p>cena promocyjna: " + cena + "</p>";
}