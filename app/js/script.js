const nav = document.querySelector(".nav");
const dropdown = document.querySelector(".nav__list");
const icons = document.querySelectorAll("[data-visibility]");

if (window.innerWidth < 1024) {
  nav.addEventListener("click", function (e) {
    const toggle = e.target.closest(".nav__toggle");
    const submenu = e.target.closest(".menu-item");

    if (submenu) {
      const nestedDropdown = submenu.lastElementChild;
      nestedDropdown.classList.toggle("sub-menu--visible");
    }

    if (!toggle) return;

    toggle.classList.toggle("nav-is-expanded");

    if (toggle.classList.contains("nav-is-expanded")) {
      dropdown.classList.add("visible");
      icons.forEach((el) => el.classList.add("hidden-icon"));
      nav.classList.add("overlay");
    } else {
      dropdown.classList.remove("visible");
      icons.forEach((el) => el.classList.remove("hidden-icon"));
      nav.classList.remove("overlay");
    }
  });
}

var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    nav.style.top = "0";
  } else {
    nav.style.top = "-60px";
  }
  prevScrollpos = currentScrollPos;
};
