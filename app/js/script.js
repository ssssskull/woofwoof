const toggle = document.querySelector(".nav__toggle");
const submenu = document.querySelector("#menu-header-menu");
const icons = document.querySelectorAll("[data-visibility]");
console.log(icons);

if (toggle) {
  console.log(toggle);

  toggle.addEventListener("click", function (e) {
    toggle.classList.toggle("nav-is-expanded");

    if (toggle.classList.contains("nav-is-expanded")) {
      submenu.classList.add("visible");
      icons.forEach((el) => el.classList.add("hidden-icon"));
    } else {
      submenu.classList.remove("visible");
      icons.forEach((el) => el.classList.remove("hidden-icon"));
    }
    return false;
  });
}
