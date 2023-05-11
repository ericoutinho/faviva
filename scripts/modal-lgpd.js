const modalLgpd = document.querySelector(".modal-lgpd");
const modalLgpdClose = modalLgpd.querySelector("button");

if ( localStorage.getItem("lgpd-takeon") != "accept-terms" ) {
    modalLgpd.classList.add("modal-lgpd__js-show");
}

modalLgpdClose.addEventListener("click", (e) => {
    modalLgpd.classList.remove("modal-lgpd__js-show");
    localStorage.setItem("lgpd-takeon", "accept-terms");
})