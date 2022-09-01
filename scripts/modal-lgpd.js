const modalLgpd = document.querySelector(".modal-lgpd");
const modalLgpdClose = modalLgpd.querySelector("button");

if ( sessionStorage.getItem("lgpd-takeon") != "accept-terms" ) {
    modalLgpd.classList.add("modal-lgpd__js-show");
}

modalLgpdClose.addEventListener("click", (e) => {
    modalLgpd.classList.remove("modal-lgpd__js-show");
    sessionStorage.setItem("lgpd-takeon", "accept-terms");
})