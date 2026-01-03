document.addEventListener('DOMContentLoaded', () => {
    // Elementos que vamos animar
    const titulo = document.querySelector('.texto h2');
    const subtitulo = document.querySelector('.texto h3');

    // Guardamos o texto original e limpamos o HTML para começar "vazio"
    const textoTitulo = titulo.innerText;
    const textoSubtitulo = subtitulo.innerText;

    titulo.innerText = '';
    subtitulo.innerText = '';

    // Função que digita letra por letra
    function digitar(elemento, texto, velocidade, callback) {
        let index = 0;
        
        // Adiciona a classe do cursor piscando
        elemento.classList.add('digitando');

        const intervalo = setInterval(() => {
            if (index < texto.length) {
                elemento.innerHTML += texto.charAt(index);
                index++;
            } else {
                // Quando terminar de digitar:
                clearInterval(intervalo);
                elemento.classList.remove('digitando'); // Remove o cursor
                if (callback) callback(); // Chama a próxima função (se houver)
            }
        }, velocidade);
    }

    // INÍCIO DA ANIMAÇÃO
    // 1. Começa digitando o H2 (velocidade 40ms)
    // 2. Quando acabar, chama a função para digitar o H3 (velocidade 20ms - mais rápido)
    digitar(titulo, textoTitulo, 40, () => {
        digitar(subtitulo, textoSubtitulo, 20);
    });
});