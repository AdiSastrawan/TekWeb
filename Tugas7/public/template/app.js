paket1 = document.getElementById("paket1");
paket2 = document.getElementById("paket2");
paket3 = document.getElementById("paket3");
paket4 = document.getElementById("paket4");

desc1 = document.getElementById("desc_1");
desc2 = document.getElementById("desc_2");
desc3 = document.getElementById("desc_3");
desc4 = document.getElementById("desc_4");
if (paket1 != undefined) {
    paket1.addEventListener("change", function () {
        if (this.checked) {
            totalHarga = document.getElementById("total");
            totalHarga.value = "Rp.500.000";
            desc1.classList.remove("hidden");
            if (!desc2.classList.contains("hidden")) {
                desc2.classList.add("hidden");
            } else if (!desc3.classList.contains("hidden")) {
                desc3.classList.add("hidden");
            } else if (!desc4.classList.contains("hidden")) {
                desc4.classList.add("hidden");
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
            } else if (!desc4.classList.contains("hidden")) {
                desc4.classList.add("hidden");
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
            } else if (!desc4.classList.contains("hidden")) {
                desc4.classList.add("hidden");
            }
        }
    });
    paket4.addEventListener("change", function () {
        if (this.checked) {
            totalHarga = document.getElementById("total");
            totalHarga.value = "Rp.620.000";
            desc4.classList.remove("hidden");
            if (!desc2.classList.contains("hidden")) {
                desc2.classList.add("hidden");
            } else if (!desc1.classList.contains("hidden")) {
                desc1.classList.add("hidden");
            } else if (!desc3.classList.contains("hidden")) {
                desc3.classList.add("hidden");
            }
        }
    });
}

const hamburger = document.getElementById("hamburger");
const login = document.getElementById("login");
const listHid = document.querySelectorAll("li.hidden");

hamburger.addEventListener("click", function (e) {
    if (!hamburger.classList.contains("active")) {
        hamburger.classList.add("active");
        login.classList.remove("hidden");
        for (l of listHid) {
            l.classList.remove("hidden");
        }
    } else {
        login.classList.add("hidden");
        hamburger.classList.remove("active");
        for (l of listHid) {
            l.classList.add("hidden");
        }
    }
});
