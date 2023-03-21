let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.cnavbar');
let darkmode = document.querySelector('#darkmode');

darkmode.onclick = () => {
    if (darkmode.classList.contains('bx-moon')){
        darkmode.classList.replace('bx-moon', 'bx-sun');
        document.body.classList.add('color');
    }else{
        darkmode.classList.replace('bx-sun', 'bx-moon');
        document.body.classList.remove('color');
    }
}

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}

