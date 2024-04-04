
const imagenLight = document.querySelector('.agregar-imagen');
const contenedorLight = document.querySelector('.imagen-light')
const closeLight = document.querySelector('.close')

contenedorLight?.addEventListener('click',(e)=>{
    if(e.target !== imagenLight){
        contenedorLight.classList.toggle('show')
        imagenLight.classList.toggle('showImage')
    }
})




const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');
const body = document.querySelector('body');

function abrirImagen() {
    imagenLight.classList.add('show');
    body.classList.add('body-no-scroll');
    prevButton.style.display = 'block';
    nextButton.style.display = 'block';
}

function cerrarImagen() {
    imagenLight.classList.remove('show');
    body.classList.remove('body-no-scroll');
    prevButton.style.display = 'none';
    nextButton.style.display = 'none';
}

prevButton?.addEventListener('click', () => {
    // Lógica para mostrar la imagen anterior
});

nextButton?.addEventListener('click', () => {
    // Lógica para mostrar la siguiente imagen
});

closeLight?.addEventListener('click', cerrarImagen);


const imagenes = document.querySelectorAll('.img-galeria');

imagenes.forEach(imagen => {
    imagen.addEventListener('click', () => {
        aparecerImagen(imagen.getAttribute('src'));
    })
});

imagenes.forEach(imagen => {
    imagen.addEventListener('click', () => {
        aparecerImagen(imagen.getAttribute('src'));
    });
});

const aparecerImagen = (imagen) => {
    imagenLight.src = imagen;
    abrirImagen();
};

closeLight?.addEventListener('click', cerrarImagen);
