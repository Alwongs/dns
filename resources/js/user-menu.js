const userMenu = document.getElementById('userMenuForm');
const userMenuBtn = document.getElementById('userMenuBtn');
let isUserMenuOpen = false;

function openUserMenu() {
    userMenu.classList.add('user-menu-active');
    isUserMenuOpen = true;
}
function closeUserMenu() {
    userMenu.classList.remove('user-menu-active');
    isUserMenuOpen = false;
}

if (userMenuBtn) {
    userMenuBtn.addEventListener('click', function () {
         if (isUserMenuOpen) closeUserMenu(); else openUserMenu();
    });
}

if (userMenu) userMenu.addEventListener('click', closeUserMenu)