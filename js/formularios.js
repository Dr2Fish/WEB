// var result = document.getElementById("results");
// function verificarSuma(event) {
//   var total = 6;
//   var puntos = 0;
//   var miform = document.forms["sumasQuiz"];
//   var respuestas = ["a", "c", "b", "d", "a", "d"];

//   for (let i = 1; i < total; i++) {
//     if (miform["p" + i].value == null || miform["p" + i].value == "") {
//       alert(`te falta la ${i}`);
//       return false;
//     }
//     if (miform["p" + i].value == respuestas[i - 1]) {
//       puntos++;
//     }
//   }
//   result.textContent = `el resultado es ${puntos}`;
//   console.log(puntos);
//   return false;
// }

function verificarResta(event) {
  var total = 6;
  var puntos = 0;
  var miform = document.forms["RestaQuiz"];
  var respuestas = ["a", "c", "b", "d", "a", "d"];

  for (let i = 1; i < total; i++) {
    if (miform["p" + i].value == null || miform["p" + i].value == "") {
      alert(`te falta la ${i}`);
      return false;
    }
    if (miform["p" + i].value == respuestas[i - 1]) {
      puntos++;
    }
  }
  console.log(puntos);
  return false;
}

function verificarDiv() {
  var total = 6;
  var puntos = 0;
  var miform = document.forms["DivQuiz"];
  var respuestas = ["a", "c", "b", "d", "a", "d"];

  for (let i = 1; i < total; i++) {
    if (miform["p" + i].value == null || miform["p" + i].value == "") {
      alert(`te falta la ${i}`);
      return false;
    }
    if (miform["p" + i].value == respuestas[i - 1]) {
      puntos++;
    }
  }
  console.log(puntos);
  return false;
}

function verificarMulti() {
  var total = 6;
  var puntos = 0;
  var miform = document.forms["MultiQuiz"];
  var respuestas = ["a", "c", "b", "d", "a", "d"];

  for (let i = 1; i < total; i++) {
    if (miform["p" + i].value == null || miform["p" + i].value == "") {
      alert(`te falta la ${i}`);
      return false;
    }
    if (miform["p" + i].value == respuestas[i - 1]) {
      puntos++;
    }
  }
  console.log(puntos);
  return false;
}
