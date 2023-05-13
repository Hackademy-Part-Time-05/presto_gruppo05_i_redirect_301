const navE1=document.querySelector('.navbar');
window.addEventListener('scroll',() => {
    if (window.scrollY >= 56){
        navE1.classList.add('navbar-scrolled');
    } else if (window.scrollY < 56){
        navE1.classList.remove('navbar-scrolled');
    }
});
