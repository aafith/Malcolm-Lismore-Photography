// Side Menu open

var sidemenu = document.getElementById("navbar-nav");

function openMenu() {
  sidemenu.style.right = "0";
}

function closeMenu() {
  sidemenu.style.right = "-200px";
}

// Drop Button

function clickFun() {
  document.getElementById("dropNav").classList.toggle("show");
}

window.onclick = function (event) {
  if (!event.target.matches(".drop-btn")) {
    var dropdowns = document.getElementsByClassName("drop-nav");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
};

// Tab Open

var tablinks = document.getElementsByClassName("tab-link");
var tabcontents = document.getElementsByClassName("tab-contents");

function openTab(tabname) {
  for (tablink of tablinks) {
    tablink.classList.remove("active");
  }
  for (tabcontent of tabcontents) {
    tabcontent.classList.remove("active-tab");
  }
  event.currentTarget.classList.add("active");
  document.getElementById(tabname).classList.add("active-tab");
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
let currentItem = 3;

loadmore.onclick = () => {
  let works = [...document.querySelectorAll(".work")];
  for (var i = currentItem; i < currentItem + 3; i++) {
    works[i].style.display = "inline-block";
  }
  currentItem += 3;
};
