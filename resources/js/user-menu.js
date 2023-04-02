const userMenu = document.getElementById('userMenuForm');
const menuBtn = document.getElementById('userMenuBtn');
const userMenuCloseBtn = document.getElementById('userMenuCloseBtn');
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
    isMenuOpen ? closeUserMenu() : openUserMenu();
})

userMenuCloseBtn.addEventListener('click', function () {
    isMenuOpen ? closeUserMenu() : openUserMenu();
})
