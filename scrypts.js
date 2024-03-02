// sistema de orbservação de elementos

const Observador = new IntersectionObserver((entries) => {
    entries.forEach((entrada) => {
        if (entrada.isIntersecting) {
            entrada.target.classList.add('Show')
        } else {
            entrada.target.classList.remove('Show')
        }
    });
})

const elements = document.querySelectorAll('.hidden')

elements.forEach((elements) => Observador.observe(elements))