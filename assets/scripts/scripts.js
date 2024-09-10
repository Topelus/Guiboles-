window.onscroll = function () {
    var header = document.getElementById("navigation");
    if (window.pageYOffset > 200) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
};
