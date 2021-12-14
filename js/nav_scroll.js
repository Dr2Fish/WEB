window.onscroll = function () {
  var nav = document.getElementById("scroll_change");
  if (window.scrollY > 150) {
    nav.classList.add("cambio_scroll");
  } else {
    nav.classList.remove("cambio_scroll");
  }

  var y = window.scrollY;
  console.log(y);
};
