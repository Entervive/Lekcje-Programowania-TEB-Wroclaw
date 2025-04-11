let notatki = [];

function sprawdzPrzed() {
  let nazwa = document.getElementById("nazwa").value;
  let opis = document.getElementById("tekst").value;

  if (nazwa === "") {
    alert("Uzupełnij nazwę!");
    return;
  }

  if (opis === "") {
    alert("Uzupełnij tekst");
    return;
  }

  dodaj();
  zapisz();
}

function dodaj() {
  let nazwa = document.getElementById("nazwa").value;
  let opis = document.getElementById("tekst").value;
  let kolorNotatki = document.getElementById("kolorNotatki").value;
  let kolorCzionki = document.getElementById("kolorCzcionki").value;
  let grid = document.getElementById("notatki-grid");

  let notka = document.createElement("div");
  notka.style.backgroundColor = kolorNotatki;
  notka.style.color = kolorCzionki;
  notka.classList.add("notatka", "new");
  notka.dataset.originalBg = kolorNotatki;
  notka.dataset.originalColor = kolorCzionki;

  notka.innerHTML = `
        <h2>${nazwa}</h2>
        <p>${opis}</p>
        <button onclick='del(event)'>Usuń Notatkę</button>
        <button onclick='zrob(event)'>Zrobione</button>
    `;

  grid.appendChild(notka);

  notka.addEventListener(
    "animationend",
    () => {
      notka.classList.remove("new");
    },
    { once: true }
  );

  document.getElementById("nazwa").value = "";
  document.getElementById("tekst").value = "";
}

function del(event) {
  let notatka = event.target.parentElement;

  notatka.classList.add(
    "animate__animated",
    "animate__fadeOutRight",
    "animate__faster"
  );

  let handleAnimationEnd = () => {
    return new Promise((resolve) => {
      function handleEnd() {
        notatka.removeEventListener("animationend", handleEnd);
        resolve();
      }
      notatka.addEventListener("animationend", handleEnd);
    });
  };

  handleAnimationEnd().then(() => {
    notatka.remove();
    zapisz();
  });
}

function zrob(event) {
  let notatka = event.target.parentElement;

  notatka.classList.remove(
    "animate__animated",
    "animate__bounce",
    "animate__bounceIn",
    "animate__faster"
  );

  if (notatka.classList.contains("done")) {
    notatka.classList.remove("done");
    notatka.style.backgroundColor = notatka.dataset.originalBg;
    notatka.style.color = notatka.dataset.originalColor;

    setTimeout(() => {
      notatka.classList.add(
        "animate__animated",
        "animate__bounceIn",
        "animate__faster"
      );
    }, 10);
  } else {
    notatka.classList.add("done");
    notatka.style.backgroundColor = "green";
    notatka.style.color = "white";

    setTimeout(() => {
      notatka.classList.add(
        "animate__animated",
        "animate__bounce",
        "animate__faster"
      );
    }, 10);
  }

  notatka.addEventListener(
    "animationend",
    () => {
      notatka.classList.remove(
        "animate__animated",
        "animate__bounce",
        "animate__bounceIn",
        "animate__faster"
      );
    },
    { once: true }
  );

  zapisz();
}

function wczytajNotatki() {
  let grid = document.getElementById("notatki-grid");
  let zapisaneNotatki = localStorage.getItem("notatki");

  if (zapisaneNotatki) {
    grid.innerHTML = zapisaneNotatki;

    grid.querySelectorAll(".notatka").forEach((notatka) => {
      if (!notatka.dataset.originalBg) {
        notatka.dataset.originalBg = notatka.style.backgroundColor;
      }
      if (!notatka.dataset.originalColor) {
        notatka.dataset.originalColor = notatka.style.color;
      }
    });
  }
}

function zapisz() {
  let grid = document.getElementById("notatki-grid");
  localStorage.setItem("notatki", grid.innerHTML);
}

function wyzeruj() {
  localStorage.setItem("notatki", " ");
  let grid = document.getElementById("notatki-grid");

  grid.innerHTML = "";
}

window.addEventListener("load", wczytajNotatki);
