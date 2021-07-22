const menuButton = document.getElementById('menu_button')
const menu = document.getElementById('menu')

menuButton.addEventListener('click', () => {
    menu.classList.toggle('open_menu');
})