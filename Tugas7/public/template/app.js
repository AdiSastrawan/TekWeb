paket1 = document.getElementById("paket1");
paket2 = document.getElementById("paket2");
paket3 = document.getElementById("paket3");

desc1 = document.getElementById("desc_1");
desc2 = document.getElementById("desc_2");
desc3 = document.getElementById("desc_3");

paket1.addEventListener("change", function () {
    if (this.checked) {
        totalHarga = document.getElementById("total");
        totalHarga.value = "Rp.500.000";
        desc1.classList.remove("hidden");
        if (!desc2.classList.contains("hidden")) {
            desc2.classList.add("hidden");
        } else if (!desc3.classList.contains("hidden")) {
            desc3.classList.add("hidden");
        }
    }
});
paket2.addEventListener("change", function () {
    if (this.checked) {
        totalHarga = document.getElementById("total");
        totalHarga.value = "Rp.570.000";
        desc2.classList.remove("hidden");
        if (!desc1.classList.contains("hidden")) {
            desc1.classList.add("hidden");
        } else if (!desc3.classList.contains("hidden")) {
            desc3.classList.add("hidden");
        }
    }
});
paket3.addEventListener("change", function () {
    if (this.checked) {
        totalHarga = document.getElementById("total");
        totalHarga.value = "Rp.720.000";
        desc3.classList.remove("hidden");
        if (!desc2.classList.contains("hidden")) {
            desc2.classList.add("hidden");
        } else if (!desc1.classList.contains("hidden")) {
            desc1.classList.add("hidden");
        }
    }
});
