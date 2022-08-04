var accordion, i;

accordion = document.getElementsByClassName("dropbtn-accordion");

for (i = 0; i < accordion.length; i++) {
  accordion[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

//show search form when search BTN is clicked
//declare variables
var searchButton, thirdNavbar, hamburgerMenuBTN, dropdownMenubar;
searchButton = document.getElementById("SearchBTN");
thirdNavbar = document.getElementById("thirdNavbarMobile");
hamburgerMenuBTN = document.getElementById("navToggle");
dropdownMenubar = document.getElementById("mobileMenu");

//add event listeners
searchButton.addEventListener("click", function () {
  if (dropdownMenubar.classList.contains("showmenu")) {
    dropdownMenubar.classList.remove("showmenu");
  }
  thirdNavbar.classList.toggle("showSearchContainer");
});
hamburgerMenuBTN.addEventListener("click", function () {
  if (thirdNavbar.classList.contains("showSearchContainer")) {
    thirdNavbar.classList.remove("showSearchContainer");
  }
  dropdownMenubar.classList.toggle("showmenu");
});

//Disclares the scroll height of the webpage
var prevScollPos = window.pageYOffset;
//HERE WINDOW.ONSCROLL FUNCTION IS USED TO SOLVE BOTH NAVBAR FIXED TO TOP AND BACK TO THE TOP BTN HIDE AND SHOW
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (prevScollPos < currentScrollPos) {
    document.getElementById("secondThirdNavbar").classList.add("fixedNavbar");
    document.getElementById("logo").classList.add("activated");
    document
      .getElementById("heroImageWrapper")
      .classList.add("activated-hero-image-container");
  } else {
    document
      .getElementById("secondThirdNavbar")
      .classList.remove("fixedNavbar");
    document.getElementById("logo").classList.remove("activated");
    document
      .getElementById("heroImageWrapper")
      .classList.remove("activated-hero-image-container");
  }
  prevScollPos = currentScrollPos;

  //Declared the scrollfunction() to handle hide and show back to top button;
  scrollFunction();
};
//The scrollfunction() that displays the button when scroll height is > 500
var topBtn = document.getElementById("myTopBTN");
var topBtnText = document.getElementById("BackTopBtn");
function scrollFunction() {
  if (
    document.documentElement.scrollTop > 500 ||
    document.body.scrollTop > 500
  ) {
    topBtn.style.display = "block";
    topBtnText.style.display = "block";
  } else {
    topBtn.style.display = "none";
    topBtnText.style.display = "none";
  }
}
//This function takes the webpage back to the top
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

//add click event to each of the testifers
