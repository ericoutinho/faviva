const modalWhatsapp = document.querySelector(".modal-whatsapp__wrapper");
const modalWhatsapp_Button = document.querySelector(".modal-whatsapp__button");
const modalClose = document.querySelector(".modal-whatsapp__close");

modalWhatsapp_Button.addEventListener("click", (e) => {
    modalWhatsapp.classList.toggle("js-modal-whatsapp-open");
})

modalClose.addEventListener("click", (e) => {
    modalWhatsapp.classList.remove("js-modal-whatsapp-open");
})