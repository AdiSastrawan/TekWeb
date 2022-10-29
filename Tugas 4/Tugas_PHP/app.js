$(document).ready(function () {
  function Hitung(n, a, b) {
    return a + (n - 1) * b;
  }
  var a, b, n, result;
  a = parseInt($("#awal").val());
  b = parseInt($("#beda").val());
  n = parseInt($("#suku").val());
  $("#awal").change(function () {
    a = parseInt($("#awal").val());
    result = Hitung(n, a, b);
    $("#result").val(result);
    console.log(result);
  });
  $("#beda").change(function () {
    b = parseInt($("#beda").val());
    result = Hitung(n, a, b);
    $("#result").val(result);
    console.log(result);
  });
  $("#suku").change(function () {
    n = parseInt($("#suku").val());
    result = Hitung(n, a, b);
    $("#result").val(result);
    $("#det").text(n);
    console.log(result);
  });
  console.log(a, b, n);
});
