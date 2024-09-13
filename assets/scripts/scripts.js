window.onscroll = function () {
    var header = document.getElementById("navigation");
    if (window.pageYOffset > 200) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
};
var menu = document.getElementById("menu");
var openBtn = document.getElementById("openMenu");
openBtn.addEventListener('click',function(event){
    menu.classList.toggle('active-menu');
    openBtn.classList.toggle('closeMenu');
})


var mvs = document.getElementsByClassName('ourMVs');

// Convertir en tableau pour utiliser forEach
Array.from(mvs).forEach(lists => {
    lists.addEventListener('click', function(event) {
        lists.classList.toggle('tooglemv');
    });
});
var backgroundContainer = document.getElementById("parralax-header");
var images = [
    'url("assets/images/bannpic.webp")',
    'url("assets/images/pexels-fauxels-3183150.webp")',
    'url("assets/images/reading-glasses-piles-coins-high-view.webp")'
];

var currentIndex = 0;

function changeBackgroundImage() {
    // Change the background image
    backgroundContainer.style.backgroundImage = images[currentIndex];
    // Update the index, and loop back to the start if necessary
    currentIndex = (currentIndex + 1) % images.length;
}
// Initial call to set the first background image
changeBackgroundImage();
// Change the background every 10 seconds (10000 milliseconds)
setInterval(changeBackgroundImage, 10000);

const loader= document.querySelector('.loader');
window.addEventListener('load',() =>{
    loader.classList.add('loader-out')
});