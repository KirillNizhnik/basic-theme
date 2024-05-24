document.addEventListener('DOMContentLoaded', function() {
    const burgerMenuButton = document.querySelector('.burger-menu');
    const mobileMenu = document.querySelector('.header-mobile-menu');
    const closeButton = document.querySelector('.header-close-svg');

    burgerMenuButton.addEventListener('click', function() {
        mobileMenu.classList.add('active');
    });

    closeButton.addEventListener('click', function() {
        mobileMenu.classList.remove('active');
    });
});
