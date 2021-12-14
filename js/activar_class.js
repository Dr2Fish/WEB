var eliminar = document.getElementById("eliminarcuenta");
var nav = document.getElementById("navbarr");
var baner = document.getElementById("centroBaner");
var si = document.getElementById("si");
var no = document.getElementById("no");

eliminar.addEventListener("click", function (event) {
  event.preventDefault();
  nav.className = "blurr";
  baner.style.display = "flex";
});

no.addEventListener("click", function () {
  nav.classList.remove("blurr");
  baner.style.display = "none";
});
si.addEventListener("click", function () {
  location.href = "./php/eliminarCuenta.php?taba=alumno";
});
