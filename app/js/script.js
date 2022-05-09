const toggle = document.querySelector(".nav__toggle");

if (toggle) {
  console.log(toggle);

  toggle.addEventListener("click", function () {
    toggle.classList.toggle("nav-is-expanded");
  });
}
