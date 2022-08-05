//Vanila Javascript
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

//JQUERY

//toggle the active class when tab links pay a bill, accepted insurance and visitors information is clicked.
$(document).ready(function () {
  $("#payBill").click(function () {
    $("#payBill").addClass("tab_activated");
    $("#acceptedInsurance").removeClass("tab_activated");
    $("#visitorInfo").removeClass("tab_activated");
  });
  $("#acceptedInsurance").click(function () {
    $("#payBill").removeClass("tab_activated");
    $("#acceptedInsurance").addClass("tab_activated");
    $("#visitorInfo").removeClass("tab_activated");
  });
  $("#visitorInfo").click(function () {
    $("#payBill").removeClass("tab_activated");
    $("#acceptedInsurance").removeClass("tab_activated");
    $("#visitorInfo").addClass("tab_activated");
  });
});

//toggle the active class when a testifier tab links is clicked, also add the patient's name.
$(document).ready(function () {
  $("#justin_p").click(function () {
    $("#person_one").addClass("showing");
    $("#person_two").removeClass("showing");
    $("#person_three").removeClass("showing");
    $("#person_four").removeClass("showing");
    $("#justin_p #imageText").addClass("display-text");
    $("#kathy_p #imageText").removeClass("display-text");
    $("#morris_p #imageText").removeClass("display-text");
    $("#sandra_p #imageText").removeClass("display-text");
  });

  $("#kathy_p").click(function () {
    $("#person_one").removeClass("showing");
    $("#person_two").addClass("showing");
    $("#person_three").removeClass("showing");
    $("#person_four").removeClass("showing");
    $("#kathy_p #imageText").addClass("display-text");
    $("#justin_p #imageText").removeClass("display-text");
    $("#morris_p #imageText").removeClass("display-text");
    $("#sandra_p #imageText").removeClass("display-text");
  });

  $("#morris_p").click(function () {
    $("#morris_p #imageText").addClass("display-text");
    $("#kathy_p #imageText").removeClass("display-text");
    $("#justin_p #imageText").removeClass("display-text");
    $("#sandra_p #imageText").removeClass("display-text");
    $("#person_one").removeClass("showing");
    $("#person_two").removeClass("showing");
    $("#person_three").addClass("showing");
    $("#person_four").removeClass("showing");
  });

  $("#sandra_p").click(function () {
    $("#person_one").removeClass("showing");
    $("#person_two").removeClass("showing");
    $("#person_three").removeClass("showing");
    $("#person_four").addClass("showing");
    $("#sandra_p #imageText").addClass("display-text");
    $("#justin_p #imageText").removeClass("display-text");
    $("#kathy_p #imageText").removeClass("display-text");
    $("#morris_p #imageText").removeClass("display-text");
  });
});

//Angular.Js

//Angular.js application for controlling both pay your bill to visitors information tab and testifiers section
var app = angular.module("myApplication", []);
app.controller("ctrlControl", function ($scope) {
  $scope.visit = true;
  $scope.accept = false;
  $scope.pay = false;

  $scope.visitorsInformation = function () {
    $scope.visit = true;
    $scope.accept = false;
    $scope.pay = false;
  };

  $scope.acceptedInsurance = function () {
    $scope.visit = false;
    $scope.accept = true;
    $scope.pay = false;
  };

  $scope.payABill = function () {
    $scope.visit = false;
    $scope.accept = false;
    $scope.pay = true;
  };

  //control for testifiers section
  $scope.sandra_comment = true;
  $scope.morris_comment = false;
  $scope.kathy_comment = false;
  $scope.justin_comment = false;
  $scope.testfier_sandra = function () {
    $scope.sandra_comment = true;
    $scope.morris_comment = false;
    $scope.kathy_comment = false;
    $scope.justin_comment = false;
  };
  $scope.testfier_morris = function () {
    $scope.sandra_comment = false;
    $scope.morris_comment = true;
    $scope.kathy_comment = false;
    $scope.justin_comment = false;
  };
  $scope.testfier_kathy = function () {
    $scope.sandra_comment = false;
    $scope.morris_comment = false;
    $scope.kathy_comment = true;
    $scope.justin_comment = false;
  };
  $scope.testfier_justin = function () {
    $scope.sandra_comment = false;
    $scope.morris_comment = false;
    $scope.kathy_comment = false;
    $scope.justin_comment = true;
  };
});
