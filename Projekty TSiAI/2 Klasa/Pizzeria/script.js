function obrocPlacek() {
  let pizzaLogo = document.getElementById("pizzaLogo");

  if (pizzaLogo.classList.contains("logoObroc")) {
    pizzaLogo.classList.remove("logoObroc");
  } else {
    pizzaLogo.classList.add("logoObroc");
  }
}
