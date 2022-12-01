paket1 = document.getElementById("paket1");
paket2 = document.getElementById("paket2");
paket3 = document.getElementById("paket3");
custom = document.getElementById("custom");
jenisF = document.getElementById("jfas");
jenisK = document.getElementById("jkamar");
lamaS = document.getElementById("lama");
paket1.addEventListener("change", function () {
  if (this.checked) {
    totalHarga = document.getElementById("total");
    totalHarga.value = "Rp.500.000";
    lamaS.classList.add("hidden");
    jenisK.classList.add("hidden");
    jenisF.classList.add("hidden");
  }
});
paket2.addEventListener("change", function () {
  if (this.checked) {
    totalHarga = document.getElementById("total");
    totalHarga.value = "Rp.570.000";
    lamaS.classList.add("hidden");
    jenisK.classList.add("hidden");
    jenisF.classList.add("hidden");
  }
});
paket3.addEventListener("change", function () {
  if (this.checked) {
    totalHarga = document.getElementById("total");
    totalHarga.value = "Rp.720.000";
    lamaS.classList.add("hidden");
    jenisK.classList.add("hidden");
    jenisF.classList.add("hidden");
  }
});
custom.addEventListener("change", function () {
  totalHarga = document.getElementById("total");
  totalHarga.value = "Rp.0";
  if (this.checked) {
    lamaS.classList.remove("hidden");
    jenisK.classList.remove("hidden");
    jenisF.classList.remove("hidden");
  }
});
console.log(paket1.checked, paket2.checked, paket3.checked, costum.checked);
