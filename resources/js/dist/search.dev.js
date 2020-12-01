"use strict";

var buscador = $("#table").DataTable();
$("#texto").keyup(function () {
  buscador.search($(this).val()).draw();

  if ($("#input-searchtexto").val() == "") {
    $(".content-search").fadeOut(300);
  } else {
    $(".content-search").fadeIn(300);
  }
});