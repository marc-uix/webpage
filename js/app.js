
const menubtn = document.querySelector('.menu-toggle');
const sidebar = document.querySelector('.sidebar');

menubtn.addEventListener('click', () => {
    sidebar.classList.toggle('active');    
});