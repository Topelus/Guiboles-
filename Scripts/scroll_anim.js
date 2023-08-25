const nav = document.querySelector('.header');
const logo= document.querySelector('.logo');
window.addEventListener('scroll',() =>{
    if(window.scrollY > 100){
        nav.classList.add('scroll_anim')
        logo.setAttribute("src","Images/Logo_white.png")
    }
    else
    {
        nav.classList.remove('scroll_anim')
        logo.setAttribute("src","Images/Logo_black.png")
    }
});