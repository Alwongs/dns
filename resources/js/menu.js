const menu = document.getElementById('menu');
const menuBtn = document.getElementById('menuBtn');
let isMenuOpen = false;

function openMenu() {
    menu.classList.add('menu-active');
    isMenuOpen = true;
}
function closeMenu() {
    menu.classList.remove('menu-active');
    isMenuOpen = false;
}

if (menuBtn) menuBtn.addEventListener('click', openMenu);
if (menu) menu.addEventListener('click', closeMenu);
