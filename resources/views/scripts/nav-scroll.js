//scroll events
window.addEventListener('scroll', function() {
    var navbar = document.querySelector('.navbar');

    //when scrolls
    if (window.scrollY > 0) {
        navbar.classList.remove('w-75', 'col-9', 'border-0');
        navbar.classList.add('glass', 'col-6', 'rounded', 'rounded-pill', 'transparent-border');
    } else {
        navbar.classList.add('w-75', 'border-0', 'transparent-border');
        navbar.classList.remove('glass', 'col-6', 'col-9', 'rounded', 'rounded-pill');
    }
});
