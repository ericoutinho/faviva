// document.onscroll = () => {
//     if (window.scrollY > 100) {
//         console.log("scroll")
//     }
// }

// const toggle = document.querySelector(".menu__toggle");
// const menu = document.querySelector(".menu__links");
// toggle.addEventListener("click", () => {
//     menu.classList.toggle("open");
// })


// Menu toggle
const menuToggle = () => {
    document.querySelector(".menu-top").classList.toggle("active")
}


// Format telefone
const telefone = document.querySelector('input[name="telefone"]');
telefone.addEventListener('input', function (e) {
    let telefone = e.target.value
        .replace(/\D/g, '')
        // .replace(/(\+*5{2})(\d)/, "$1 $2")
        .replace(/(\d{2})(\d)/, "\($1\) $2")
        .replace(/(\s\d{4})(\d)/, "$1\-$2")
        .replace(/(\d{4})-(\d)(\d{4})/, "$1$2-$3")
        .replace(/(\-\d{4})\d+?/, "$1")
    e.target.value = telefone;
});


// Envio de email
const formContato = document.getElementById("js-form-contato");
formContato.addEventListener("submit", (e)=> {
    e.preventDefault();

    e.target.querySelectorAll(".error").forEach((element) => {
        element.classList.remove("error");
    })

    const data = new FormData();
    data.append("action", "sendMyMail");

    if (e.target.nome.value == "") {
        e.target.nome.classList.add("error");
        return false;
    } else {
        data.append("nome", e.target.nome.value);
    }

    if (!e.target.email.value.match(/^\D[a-z\.\_\d]+@[a-z]+[\.a-z]*\.[a-z]{2,5}$/)) {
        e.target.email.classList.add("error");
        return false;
    } else {
        data.append("email", e.target.email.value);
    }

    if (!e.target.telefone.value.match(/^[(]+[0-9]{2}[)]+[\s]+[0-9]{4,5}[-]+[0-9]{4}$/)) {
        e.target.telefone.classList.add("error");
        return false;
    } else {
        data.append("telefone", e.target.telefone.value);
    }

    if (e.target.mensagem.value == "" || e.target.mensagem.value.lenght > 5) {
        e.target.mensagem.classList.add("error");
        return false;
    } else {
        data.append("mensagem", e.target.mensagem.value);
    }


    fetch("/wp-admin/admin-ajax.php", {
        method : "POST",
        credentials: 'same-origin',
        body: data
    })
    // .then((response) => response.json())
    .then( (data) => {
        if (data) {
            alert("Mensagem enviada com sucesso!");
            formContato.reset();
        }
    })
    .catch((error) => {
        alert("Não foi possível enviar a mensagem. Tente novamente mais tarde.");
    })
})

function toggleMatriz() {
    document.body.classList.toggle("open-matriz");
}