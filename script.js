/* globals Chart:false, feather:false */

(function () {
  "use strict";

  feather.replace({ "aria-hidden": "true" });
})();
const btnColor = document.querySelectorAll(".btn-color");
btnColor.forEach((element) => {
  if (element.textContent == "Open") {
    element.classList.add("bg-success");
  } else if (element.textContent == "High") {
    element.classList.add("bg-danger");
  } else if (element.textContent == "Close") {
    element.classList.add("bg-dark");
  } else if (element.textContent == "Medium") {
    element.classList.add("bg-primary");
  } else if (element.textContent == "Solving") {
    element.classList.add("bg-warning", "text-dark");
  } else {
    element.classList.add("bg-secondary");
  }
});
