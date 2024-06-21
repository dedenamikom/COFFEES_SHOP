// Toggle class active
const navbarNav = document.querySelector ('.navbar-nav');
// ketika menu di klick
document.querySelector('#menu').onclick = () => {
    navbarNav.classList.toggle('active');
};