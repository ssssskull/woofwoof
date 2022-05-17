// Nav functionality

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

// Nav hide on scroll

var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    nav.style.top = "0";
  } else {
    nav.style.top = "-60px";
    if (window.innerWidth >= 1920) {
      nav.style.top = "-68.433px";
    }
  }
  prevScrollpos = currentScrollPos;
};

// Input field anim
const inputField = document.querySelectorAll("input");

inputField.forEach((item) => {
  item.addEventListener("focus", (event) => {
    const inputLabel = event.currentTarget.previousElementSibling;
    if (document.activeElement === event.currentTarget) {
      inputLabel.classList.add("has-focus");
    }
  });
  item.addEventListener("blur", (event) => {
    const inputLabel = event.currentTarget.previousElementSibling;
    inputLabel.classList.remove("has-focus");
  });
});

// Image hover effect
// TODO eventlistener på containeren
const linksCont = document.querySelector(".events__list");

linksCont.addEventListener("mousemove", (e) => {
  const link = e.target.closest(".events__element");
  const linkImage = link.firstElementChild;

  console.log(link, linkImage);
});
