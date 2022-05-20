/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./app/js/script.js":
/*!**************************!*\
  !*** ./app/js/script.js ***!
  \**************************/
/***/ (() => {

// Nav functionality
var nav = document.querySelector(".nav");
var dropdown = document.querySelector(".nav__list");
var icons = document.querySelectorAll("[data-visibility]");

if (window.innerWidth < 1024) {
  nav.addEventListener("click", function (e) {
    var toggle = e.target.closest(".nav__toggle");
    var submenu = e.target.closest(".menu-item");

    if (submenu) {
      var nestedDropdown = submenu.lastElementChild;
      nestedDropdown.classList.toggle("sub-menu--visible");
    }

    if (!toggle) return;
    toggle.classList.toggle("nav-is-expanded");

    if (toggle.classList.contains("nav-is-expanded")) {
      dropdown.classList.add("visible");
      icons.forEach(function (el) {
        return el.classList.add("hidden-icon");
      });
      nav.classList.add("overlay");
    } else {
      dropdown.classList.remove("visible");
      icons.forEach(function (el) {
        return el.classList.remove("hidden-icon");
      });
      nav.classList.remove("overlay");
    }
  });
} // Nav hide on scroll


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
}; // Input field anim


var inputField = document.querySelectorAll("input");
inputField.forEach(function (item) {
  item.addEventListener("focus", function (event) {
    var inputLabel = event.currentTarget.previousElementSibling;

    if (document.activeElement === event.currentTarget) {
      inputLabel.classList.add("has-focus");
    }
  });
  item.addEventListener("blur", function (event) {
    var inputLabel = event.currentTarget.previousElementSibling;
    inputLabel.classList.remove("has-focus");
  });
}); // Image hover effect

var links = document.querySelectorAll(".events__element");
var linkImages = document.querySelectorAll(".events__img");
links.forEach(function (link) {
  link.addEventListener("mousemove", function (e) {
    console.log(link, link.firstElementChild);
    link.firstElementChild.classList.add("image-visible");
    link.firstElementChild.style.transform = "translate(".concat(e.clientX - link.firstElementChild.offsetWidth / 2, "px, ").concat(e.pageY - link.firstElementChild.offsetHeight / 2, "px)");
  });
  links.forEach(function (link) {
    link.addEventListener("mouseleave", function (e) {
      link.firstElementChild.classList.remove("image-visible");
    });
  });
}); // IIFY function for swiper

(function () {
  "use strict"; // breakpoint where swiper will be destroyed

  var breakpoint = window.matchMedia("(min-width:64em)"); // keep track of swiper instances to destroy later

  var mySwiper;

  var breakpointChecker = function breakpointChecker() {
    // if larger viewport destroy instance
    if (breakpoint.matches === true) {
      // clean up old instances and inline styles when available
      if (mySwiper !== undefined) {
        mySwiper.destroy(false, true);
      } // or/and do nothing


      return; // if mobile screen
    } else if (breakpoint.matches === false) {
      // fire small viewport version of swiper
      return enableSwiper();
    }
  };

  var enableSwiper = function enableSwiper() {
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
          centeredSlidesBounds: true
        },
        640: {
          slidesPerView: 2.2,
          centeredSlides: true,
          centeredSlidesBounds: true
        }
      }
    });
  }; // keep an eye on viewport size changes


  breakpoint.addListener(breakpointChecker); // kickstart

  breakpointChecker();
})();
/* IIFE end */

/***/ }),

/***/ "./app/scss/style.scss":
/*!*****************************!*\
  !*** ./app/scss/style.scss ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/script": 0,
/******/ 			"css/style": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunkwoofwoof"] = self["webpackChunkwoofwoof"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/style"], () => (__webpack_require__("./app/js/script.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/style"], () => (__webpack_require__("./app/scss/style.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;