import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


const userMenu = document.getElementById('userMenuForm');
const menuBtn = document.getElementById('userMenuBtn');

let isMenuOpen = false;

function openUserMenu() {
    userMenu.classList.add('user-menu-active');
    isMenuOpen = true;
}

function closeUserMenu() {
    userMenu.classList.remove('user-menu-active');
    isMenuOpen = false;
}

menuBtn.addEventListener('click', function () {
    if (!isMenuOpen) {
        openUserMenu();
    } else {
        closeUserMenu();
    }
})

