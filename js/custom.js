// lazzy load para as imagens
const lazzyLoad = () => {
    document.querySelectorAll('.lazzy').forEach(function (element, index) {
        if (element.getBoundingClientRect().top < window.innerHeight) {
            element.classList.add('play');
        }
    });
}

window.addEventListener('load', lazzyLoad);
window.addEventListener('scroll', lazzyLoad);


// Mascara para o campo telefone
const telefone = document.querySelector('.mask-telefone');
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


// Envio do formulário
const form = document.getElementById("formulario-mensagem");

form.querySelectorAll("input, textarea").forEach(function (elemento, index) {
    elemento.addEventListener("input", function (evento) {
        var pattern = RegExp(evento.target.getAttribute("pattern"));
        if (evento.target.value.match(pattern)) {
            evento.target.classList.remove("is-invalid");
        }
    })
})

form.addEventListener('submit', function (evento) {
    evento.preventDefault();
    if (!form.nome.value.match(/[\w\s]{3,}/g)) {
        form.nome.classList.add("is-invalid");
    }

    if (!form.email.value.match(/^\D[a-z\.\_\d]+@[a-z]+[\.a-z]*\.[a-z]{2,5}$/)) {
        form.email.classList.add("is-invalid");
    }

    if (!form.telefone.value.match(/^\(\d{2}\)\s\d{4,5}\-\d{4}$/)) {
        form.telefone.classList.add("is-invalid");
    }

    if (!form.mensagem.value.length > 10) {
        form.mensagem.classList.add("is-invalid");
    }

    if (form.querySelectorAll(".is-invalid").length === 0) {
        jQuery.ajax({
                url: evento.target.action,
                type: 'POST',
                data: {
                    action: "ajaxSendMessage",
                    nome: form.nome.value,
                    email: form.email.value,
                    telefone: form.telefone.value,
                    mensagem: form.mensagem.value
                },
                beforeSend: function (xhr) {
                    form.enviar.setAttribute("disabled", "disabled");
                }
            })
            .done(function (data) {
                if (data) {
                    alert("sucesso!");
                }
            })
            .fail(function (errorThrow) {
                console.error(errorThrow);
                alert("Não foi possível enviar");
            })
            .always(function () {
                form.enviar.removeAttribute("disabled");
            })
    }

})