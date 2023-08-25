var sidenav = document.getElementById("menu");
var openBtn = document.getElementById("openMenu");
var closeBtn = document.getElementById("closeMenu");

openMenu.onclick = openNav;
closeMenu.onclick = closeNav;

/* Set the width of the side navigation to 250px */
function openNav() {
  sidenav.classList.add("active_menu");
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  sidenav.classList.remove("active_menu");
}



const bannImgs = [
  'Images/pexels-andrea-piacquadio-3756165.jpg',
  'Images/',
  'Images/'
];
indexBann = 0;
var bann = document.getElementById("img_bann");

function changeBann() {
  bann.style.opacity = 0;

  setTimeout(() => {
    bann.setAttribute("src", bannImgs[indexBann]);
    indexBann = (indexBann + 1) % bannImgs.length;

    bann.style.opacity = 1;
  },100);
}
setInterval(changeBann, 7000);