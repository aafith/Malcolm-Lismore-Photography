// Side Menu open

var sidemenu = document.getElementById("navbar-nav");

function openMenu() {
  sidemenu.style.right = "0";
}

function closeMenu() {
  sidemenu.style.right = "-200px";
}

// Menu Open

var menulinks = document.getElementsByClassName("menu-link");
var menucontents = document.getElementsByClassName("menu-contents");

function openmenu(menuname) {
  for (menulink of menulinks) {
    menulink.classList.remove("active");
  }
  for (menucontent of menucontents) {
    menucontent.classList.remove("active-menu");
  }
  event.currentTarget.classList.add("active");
  document.getElementById(menuname).classList.add("active-menu");
}



// Load More
let loadmore = document.querySelector("#moreBtn");
let currentItem = 6;

loadmore.onclick = () => {
  let works = [...document.querySelectorAll(".work")];
  for (var i = currentItem; i < currentItem + 6; i++) {
    works[i].style.display = "inline-block";
  }
  currentItem += 3;
};
