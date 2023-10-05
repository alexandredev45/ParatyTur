function typeWriter(elemento) {
    const textoArray = elemento.innerHTML.split('');
    elemento.innerHTML = '';
    textoArray.forEach((letra, i) => {
      setTimeout(() => elemento.innerHTML += letra, 75 * i);
    });
  }

  const titulo = document.querySelector('i');
  typeWriter(titulo);

  //typeWriter(document.querySelector('.escreve'));
  //typeWriter(document.querySelector('.escreve02'));