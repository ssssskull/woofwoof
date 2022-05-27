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
const inputField = document.querySelectorAll(".footer__newsletter-input");

inputField.forEach((item) => {
  item.addEventListener("focus", (event) => {
    const inputLabel = event.currentTarget.previousElementSibling;
    if (document.activeElement === event.currentTarget) {
      inputLabel.classList.add("has-focus");
    }
  });
  item.addEventListener("blur", (event) => {
    if (item.value === "") {
      const inputLabel = event.currentTarget.previousElementSibling;
      inputLabel.classList.remove("has-focus");
    }
  });
});

// Image hover effect
const links = document.querySelectorAll(".events__element");
const linkImages = document.querySelectorAll(".events__img");

links.forEach((link) => {
  link.addEventListener("mousemove", (e) => {
    link.firstElementChild.classList.add("image-visible");
    link.firstElementChild.style.transform = `translate(${
      e.clientX - link.firstElementChild.offsetWidth / 2
    }px, ${e.pageY - link.firstElementChild.offsetHeight / 2}px)`;
  });

  links.forEach((link) => {
    link.addEventListener("mouseleave", (e) => {
      link.firstElementChild.classList.remove("image-visible");
    });
  });
});

// IIFY function for swiper
(function () {
  "use strict";

  // breakpoint where swiper will be destroyed
  const breakpoint = window.matchMedia("(min-width:64em)");

  // keep track of swiper instances to destroy later
  let mySwiper;

  const breakpointChecker = function () {
    // if larger viewport destroy instance
    if (breakpoint.matches === true) {
      // clean up old instances and inline styles when available
      if (mySwiper !== undefined) {
        mySwiper.destroy(false, true);
      }
      // or/and do nothing
      return;

      // if mobile screen
    } else if (breakpoint.matches === false) {
      // fire small viewport version of swiper
      return enableSwiper();
    }
  };

  const enableSwiper = function () {
    mySwiper = new Swiper(".mySwiper", {
      slidesPerView: 1.2,
      centeredSlides: true,
      centeredSlidesBounds: true,
      spaceBetween: 2,
      // Responsive breakpoints
      breakpoints: {
        420: {
          slidesPerView: 1.6,
          centeredSlides: true,
          centeredSlidesBounds: true,
        },
        640: {
          slidesPerView: 2.2,
          centeredSlides: true,
          centeredSlidesBounds: true,
        },
      },
    });
  };

  // keep an eye on viewport size changes
  breakpoint.addListener(breakpointChecker);

  // kickstart
  breakpointChecker();
})(); /* IIFE end */

// Collabs tabbed component

const collabsContainer = document.querySelector(".collabs__container");
const benefitContainer = document.querySelector(".benefits__content");

const revealEffect = function (e) {
  e.preventDefault();
  // TODO check for picture data and use z-index with grid to show it
  const revealEl = e.target.closest("[data-reveal]");
  if (!revealEl) return;

  const revealImg =
    revealEl.parentElement.parentElement.parentElement.nextElementSibling
      .firstElementChild;

  revealImg.classList.forEach((item) => {
    if (item.startsWith("reveal-image--")) {
      revealImg.classList.remove(item);
    }
  });

  revealImg.classList.add(`reveal-image--${revealEl.dataset.reveal}`);
};

const revealListener = function (container) {
  if (container) {
    container.addEventListener("mouseover", revealEffect);
  }
};

revealListener(benefitContainer);
revealListener(collabsContainer);

// Create account redirect
const submitButton = document.querySelector(".register__submit");

if (submitButton) {
  submitButton.addEventListener("click", function (e) {
    e.preventDefault();
    const submitButtonAddress = submitButton.dataset.link;
    console.log(submitButtonAddress);
    window.location.href = submitButtonAddress;
  });
}
