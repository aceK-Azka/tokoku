// Your JavaScript code for responsive features can go here

// Example: Toggle navigation menu on small screens
const menuButton = document.getElementById('menuButton');
const navigationMenu = document.getElementById('navigationMenu');

menuButton.addEventListener('click', () => {
    navigationMenu.classList.toggle('show-menu');
});
// JavaScript untuk fitur responsif
const menuSection = document.getElementById('menu');
const uploadSection = document.getElementById('upload');

const adjustLayout = () => {
    if (window.innerWidth <= 600) {
        menuSection.style.padding = '10px 0';
        uploadSection.style.padding = '10px 0';
    } else {
        menuSection.style.padding = '20px 0';
        uploadSection.style.padding = '20px 0';
    }
};

// Panggil fungsi pertama kali
adjustLayout();

// Tambahkan event listener untuk menyesuaikan layout saat ukuran layar berubah
window.addEventListener('resize', adjustLayout);
