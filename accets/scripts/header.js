window.onscroll = function show() {
    var header = document.querySelector('.nav_menu');
    if (window.pageYOffset > 144) {
        header.classList.add('header_fixed');
    }
    else {
        header.classList.remove('header_fixed');
    }
}