// ABRIR MENU

let menu = document.querySelector('.img-menu');

menu.addEventListener('click', abrirMenu);

function abrirMenu() {
    let nav =  document.querySelector('#nav-1');
    nav.style.display = 'block';
}

// CERRAR MENÚ

let cerrar = document.querySelector('.li-cerrar');

cerrar.addEventListener('click', cerrarMenu);

function cerrarMenu() {
    let liCerrar =  document.querySelector('#nav-1');
    liCerrar.style.display = 'none';
}