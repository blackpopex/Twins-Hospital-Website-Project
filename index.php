<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Twins Hospital | We provide healthcare services</title>
    <link rel="icon" type="image/x-icon" href="./img/logo/favicon.ico.png" />
    <meta name="description" content="" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/slick.css" />
    <link rel="stylesheet" href="./css/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <script src="http://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script>
      //Search Container

      //Clear Input filed when close BTN is clicked
      $(document).ready(function () {
        $("#SearchBTN").click(function () {
          $("#searchQuery").val("");
          $("#searchWrapper").removeClass("show-searchResultWrapper");
        });
      });

      searchBTN.addEventListener("click", function () {
        inputValue.value = "hello";
      });
      //Ajax codes
      function showSearchBox(str) {
        if (str.length == 0) {
          document.getElementById("showSearchResult").innerHTML = " ";
          document
            .getElementById("searchWrapper")
            .classList.remove("show-searchResultWrapper");
          return;
        }

        var ajaxCall = new XMLHttpRequest();
        ajaxCall.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("showSearchResult").innerHTML =
              this.responseText;
            document
              .getElementById("searchWrapper")
              .classList.add("show-searchResultWrapper");
          }
        };
        ajaxCall.open("GET", "searchResult.php?q=" + str, true);
        ajaxCall.send();
      }
    </script>
  </head>
  <body ng-app="myApplication" ng-controller="ctrlControl">
    <!-----------------------------------------------HEADER BEGINS------------------------------------------------------------------>
    <!--header-hero section-->
    <div class="header-hero-container">
      <header id="Header">
        <!-----------First Navbar------------->
        <div class="first-navbar bg-darker-purple">
          <div class="flex-end container">
            <ul class="inline-block">
              <li><a href="#/">Career</a></li>
              <li><a href="#/">Donate Now</a></li>
            </ul>
          </div>
        </div>

        <!--------------------FIXED THIS SECTION TO TOP ON SCROLL----------------------->
        <div id="secondThirdNavbar">
          <!-----------Second Navbar------------->
          <div class="second-navbar bg-lighter-purple">
            <div class="flex container">
              <a href="index.php" id="logo" class="logo-brand">
                <img
                  src="img/logo/Western lighter logo.jpg"
                  alt="Hospital logo"
                />
              </a>
              <nav class="inline-block">
                <div class="hamburger-menu" id="navToggle">
                  <div class="span bar1"></div>
                  <div class="span bar2"></div>
                  <div class="span bar3"></div>
                </div>
                <a
                  href="javascript:void(0)"
                  class="fa fa-search"
                  id="SearchBTN"
                ></a>
                <div class="second-third-navbar-wrappper" id="mobileMenu">
                  <!-------------HIDE THIS SECTION ON SCREEN SIZES ABOVE 768PX------------------->
                  <div class="increase-container third-navbar">
                    <ul id="navbar-3" class="inline-block">
                      <!--Dropdown-content for About Us-->
                      <li class="dropdown">
                        <a href="#/" class="dropbtn-accordion">About Us </a>
                        <div
                          class="header-dropdown-content"
                          id="dropDownContent"
                        >
                          <!-- SHOW ON LARGE AND MOBILE SCREENS -->
                          <ul class="col-30 panel">
                            <li><a href="about-us/history.php">History</a></li>
                            <li>
                              <a href="about-us/awards-and-accreditation.php"
                                >Awards & Accreditation</a
                              >
                            </li>
                            <li>
                              <a href="about-us/mission-vision-values.php"
                                >Vision, Mission & Values</a
                              >
                            </li>
                            <li>
                              <a href="about-us/meet-the-team.php"
                                >Meet the Team</a
                              >
                            </li>
                            <li>
                              <a href="about-us/patient-stories.php"
                                >Patient Stories</a
                              >
                            </li>
                            <li>
                              <a href="about-us/phone-directory.php"
                                >Phone Directories</a
                              >
                            </li>
                          </ul>
                        </div>
                      </li>
                      <!--Dropdown-content Patient and visitors-->
                      <li class="dropdown">
                        <a href="#/" class="dropbtn-accordion"
                          >Patient & Visitors
                        </a>
                        <div class="header-dropdown-content">
                          <!-- SHOW ON LARGE AND MOBILE SCREENS -->
                          <ul class="col-25 panel">
                            <li>
                              <a href="patients-and-visitors/visitors.php"
                                >Visitors</a
                              >
                            </li>
                            <li>
                              <a
                                href="patients-and-visitors/visiting-hours.php"
                                >Visiting Hours</a
                              >
                            </li>
                            <li>
                              <a
                                href="patients-and-visitors/your-visits-or-stay.php"
                                >Your Visits or Stay</a
                              >
                            </li>
                            <li>
                              <a
                                href="patients-and-visitors/what-to-expect.php"
                                >What to Expect</a
                              >
                            </li>
                            <li>
                              <a
                                href="patients-and-visitors/patient-rights-and-responsibilities.php"
                                >Patient Rights & Responsibilities</a
                              >
                            </li>
                          </ul>
                          <ul class="col-25 panel">
                            <li>
                              <a
                                href="patients-and-visitors/accepted-insurance.php"
                                >Accepted Insurance</a
                              >
                            </li>
                            <li>
                              <a
                                href="patients-and-visitors/billing-and-financial-asistance.php"
                                >Biling and Financial Asistance</a
                              >
                            </li>
                            <li>
                              <a href="patients-and-visitors/pay-your-bill.php"
                                >Pay your Bill</a
                              >
                            </li>
                            <li>
                              <a
                                href="patients-and-visitors/medical-records.php"
                                >Request Medical Records</a
                              >
                            </li>
                            <li>
                              <a
                                href="patients-and-visitors/patient-education.php"
                                >Patient Education</a
                              >
                            </li>
                          </ul>
                        </div>
                      </li>
                      <!--Other non dropdown section-->
                      <li>
                        <a
                          href="services.php"
                          class="dropbtn-accordion-children"
                          >Services</a
                        >
                      </li>
                      <li>
                        <a
                          href="map-and-direction.php"
                          class="dropbtn-accordion-children"
                          >Map & Directions</a
                        >
                      </li>
                      <li>
                        <a
                          href="contact-us.php"
                          class="dropbtn-accordion-children"
                          >Contact Us</a
                        >
                      </li>
                    </ul>
                  </div>
                  <!----------------HIDDEN SECTION ENDS---------------------->
                  <!----------------SHOW THIS SECTION ON SCREEN SIZES ABOVE 768PX---------------------->
                  <ul id="navbar-2" class="inline-block">
                    <div class="flex">
                      <i class="fas fa-clock shiny-lighter-grey"></i>
                      <div class="info-box">
                        <h6 class="shiny-lighter-grey">
                          Mon - Sun, 8:00 - 5:00pm
                        </h6>
                        <p>Everyday of the Week</p>
                      </div>
                    </div>
                    <div class="flex">
                      <i
                        class="fa-solid fa-headphones-simple shiny-lighter-grey"
                      ></i>
                      <div class="info-box">
                        <h6 class="shiny-lighter-grey">+447975777666</h6>
                        <p>Emergency Hotline</p>
                      </div>
                    </div>
                    <div class="flex">
                      <i class="fa-solid fa-street-view shiny-lighter-grey"></i>
                      <div class="info-box">
                        <h6 class="shiny-lighter-grey">Southhampton, UK</h6>
                        <p>Our Location</p>
                      </div>
                    </div>
                  </ul>
                  <!----------------HIDDEN SECTION ENDS---------------------->
                </div>
              </nav>
            </div>
          </div>
          <!------------------THIRD NAVABAR------------------------->
          <div class="third-navbar-mobile" id="thirdNavbarMobile">
            <div class="flex container">
              <!--------SHOW THIS SECTION ONLY ON SCREEN SIZES ABOVE 768PX ------------>
              <nav>
                <ul id="navbar-3-show-on-tablet" class="inline-block">
                  <!--------------Dropdown-content for About Us------------------->
                  <li class="dropdown">
                    <a href="#/" class="dropbtn-accordion">About Us </a>
                    <div class="header-dropdown-content bg-white">
                      <div class="flex">
                        <!----------------HIDE ON MOBILE SCREENS ----------------->
                        <div class="col-30 col-hidden-mobile">
                          <h5 class="text-black text-left">
                            Giving Back to the Commnuity
                          </h5>
                          <img
                            src="img/other photos/filipp-romanovski-33HfFxmJ9O4-unsplash.jpg"
                            alt="photos of hands together"
                          />
                          <p class="text-black">
                            Lorem Ipsum is simply dummy text of the,dummy text
                            of the
                          </p>
                          <a href="#" class="lighter-purple">Find Out More</a>
                        </div>
                        <!-------------------HIDE ON MOBILE SCREENS --------------->
                        <div class="col-30 col-hidden-mobile">
                          <h5 class="text-black text-left">
                            We Treat Everyone Equally
                          </h5>
                          <img
                            src="img/other photos/nathan-anderson-FHiJWoBodrs-unsplash.jpg"
                            alt="photos of two men smiling"
                          />
                          <p class="text-black">
                            Lorem Ipsum is simply dummy text of the,dummy text
                            of the
                          </p>
                          <a href="#" class="lighter-purple">Find Out More</a>
                        </div>
                        <!--------------- SHOW ON LARGE AND MOBILE SCREENS ---------->
                        <ul class="col-30 panel">
                          <li><a href="about-us/history.php">History</a></li>
                          <li>
                            <a href="about-us/awards-and-accreditation.php"
                              >Awards & Accreditation</a
                            >
                          </li>
                          <li>
                            <a href="about-us/mission-vision-values.php"
                              >Vision, Mission & Values</a
                            >
                          </li>
                          <li>
                            <a href="about-us/meet-the-team.php"
                              >Meet the Team</a
                            >
                          </li>
                          <li>
                            <a href="about-us/patient-stories.php"
                              >Patient Stories</a
                            >
                          </li>
                          <li>
                            <a href="about-us/phone-directory.php"
                              >Phone Directories</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <!----------------Dropdown-content Patient and visitors---------->
                  <li class="dropdown">
                    <a href="#/" class="dropbtn-accordion"
                      >Patient & Visitors
                    </a>
                    <div
                      class="header-dropdown-content increased-width bg-white"
                    >
                      <div class="flex">
                        <!-----------------HIDE ON MOBILE SCREENS ----------------->
                        <div class="col-25 col-hidden-mobile">
                          <h5 class="text-black text-left">
                            Looking for a suitable Medical Care ?
                          </h5>
                          <img
                            src="img/other photos/istockphoto-1369166126-170667a.jpg"
                            alt="photos of hands together"
                          />
                          <p class="text-black">
                            Lorem Ipsum is simply dummy text of the
                          </p>
                          <a href="#/" class="lighter-purple">Find Out More</a>
                        </div>
                        <!----------------HIDE ON MOBILE SCREENS ------------------------>
                        <div class="col-25 col-hidden-mobile">
                          <h5 class="text-black text-left">
                            Looking for a suitable Health Insurance ?
                          </h5>
                          <img
                            src="img/other photos/gettyimages-1286713467-170667a.jpg"
                            alt="photos of two men smiling"
                          />
                          <p class="text-black">
                            Lorem Ipsum is simply dummy text of the
                          </p>
                          <a href="#/" class="lighter-purple">Find Out More</a>
                        </div>
                        <!-------------- SHOW ON LARGE AND MOBILE SCREENS ------------->
                        <ul class="col-25 panel">
                          <li>
                            <a href="patients-and-visitors/visitors.php"
                              >Visitors</a
                            >
                          </li>
                          <li>
                            <a href="patients-and-visitors/visiting-hours.php"
                              >Visiting Hours</a
                            >
                          </li>
                          <li>
                            <a
                              href="patients-and-visitors/your-visits-or-stay.php"
                              >Your Visits or Stay</a
                            >
                          </li>
                          <li>
                            <a href="patients-and-visitors/what-to-expect.php"
                              >What to Expect</a
                            >
                          </li>
                          <li>
                            <a
                              href="patients-and-visitors/patient-rights-and-responsibilities.php"
                              >Patient Right & Responsibilities</a
                            >
                          </li>
                        </ul>
                        <ul class="col-25 panel">
                          <li>
                            <a
                              href="patients-and-visitors/accepted-insurance.php"
                              >Accepted Insurance</a
                            >
                          </li>
                          <li>
                            <a
                              href="patients-and-visitors/billing-and-financial-asistance.php"
                              >Billing and Financial Asistance</a
                            >
                          </li>
                          <li>
                            <a href="patients-and-visitors/pay-your-bill.php"
                              >Pay your Bill</a
                            >
                          </li>
                          <li>
                            <a href="patients-and-visitors/medical-records.php"
                              >Request Medical Records</a
                            >
                          </li>
                          <li>
                            <a
                              href="patients-and-visitors/patient-education.php"
                              >Patient Education</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="tk-font"><a href="services.php">Services</a></li>
                  <li class="tk-font">
                    <a href="map-and-direction.php">Map & Directions</a>
                  </li>
                  <li class="tk-font">
                    <a href="contact-us.php">Contact Us</a>
                  </li>
                </ul>
              </nav>
              <!---------------------SHOW THIS SECTION ON ALL SCREEN SIZES ----------->
              <!--HEADER SEARCH CONTAINER WITH FORM-->
              <form action="" method="post" id="searchForm">
                <div class="input-wrapper">
                  <input
                    type="text"
                    placeholder="Search..."
                    name="Search"
                    onkeyup="showSearchBox(this.value)"
                    id="searchQuery"
                  />
                  <button type="submit"><i class="fa fa-search"></i></button>
                </div>
                <div class="searchResultWrapper" id="searchWrapper">
                  <div
                    id="showSearchResult"
                    class="search_result_container"
                  ></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </header>

      <!-------------------------HERO IMAGE FOR HEADER ---------------------->
      <section id="hero_container">
        <div class="hero-image-container" id="heroImageWrapper">
          <img
            src="img/hero-image/twins-hero-image-large.jpg"
            alt="Nurse performing surgery"
            id="hero_image"
          />
          <div class="absolute-hero-text">
            <div class="container">
              <div class="align-left">
                <h1 class="purple-text">
                  Not Just Health Care But a Better <span>Experience</span>
                </h1>
                <p>
                  Get a second opinion from the nation's best. We are here for
                  you!
                </p>
                <a href="http://twinsclinic.42web.io/about-us/history.php" class="text-purple"
                  >Learn More
                  <i class="fa fa-fw fa-chevron-right text-purple"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!---------------------------------------------------------------------HEADER ENDS ----------------------------------------------------------------->

    <!---------------------------------------------------------------------MAIN PAGE CONTENT----------------------------------------------------------------->

    <!--Quick Navigation for Appointment, Location and Direction and Refer a Patient-->
    <section id="quickNavigation">
      <div class="container">
        <div class="container-mini-width">
          <div class="flex" id="myQuickNavigation">
            <div class="col-30">
              <div class="text-center">
                <h4 class="purple-text mini-h3-tiny">Appointments</h4>
                <p>
                  A more convenience way to book an apponintment A more
                  convenience way to book an apponintment
                </p>
                <a href="request-appointment.php" class="divided-btn-70-30 btn"
                  ><span class="purple-text">Request Appointment</span>
                  <i
                    class="fa fa-fw fa-chevron-right bg-lighter-purple angle-white"
                  ></i
                ></a>
              </div>
            </div>
            <div class="col-30">
              <div class="text-center">
                <h4 class="purple-text mini-h3-tiny">Map & Direction</h4>
                <p>
                  A more convenience way to locating us. Find your way to our
                  hospital by accessing our google maps
                </p>
                <a href="map-and-direction.php" class="divided-btn-70-30 btn"
                  ><span class="purple-text">Get Directions</span>
                  <i
                    class="fa fa-fw fa-chevron-right bg-lighter-purple angle-white"
                  ></i
                ></a>
              </div>
            </div>
            <div class="col-30">
              <div class="text-center">
                <h4 class="purple-text mini-h3-tiny">Refer a Patient</h4>
                <p>
                  A more convenience way to locating us. Find your way to our
                  hospital by accessing our google maps
                </p>
                <a href="refer-a-patient.php" class="divided-btn-70-30 btn"
                  ><span class="purple-text">Refer Patient</span>
                  <i
                    class="fa fa-fw fa-chevron-right bg-lighter-purple angle-white"
                  ></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--WhatWeDo-->
    <section id="whatWeDo">
      <div class="what-we-do">
        <div class="container">
          <div class="col-50">
            <h2 class="text-black text-left">What We Do ?</h2>
            <p class="small-text-box">
              We would like to welcome our community back to HRH. We will
              continue to mask and socially distance at HRH to ensure We would
              like to welcome our community back to HRH. We will
            </p>
            <div class="test-container-numeric-value-name">
              <div class="test-wrapper">
                <!--Line 1-->
                <div class="row flex">
                  <a href="#/" class="box-33">
                    <h2 class="purple-text text-left">01</h2>
                    <h5 class="purple-text text-left">Urology</h5>
                  </a>
                  <a href="#/" class="box-33">
                    <h2 class="purple-text text-left">02</h2>
                    <h5 class="purple-text text-left">Neurosurgery</h5>
                  </a>
                  <a href="#/" class="box-33">
                    <h2 class="purple-text text-left">03</h2>
                    <h5 class="purple-text text-left">Imaging Services</h5>
                  </a>
                </div>
                <div class="faint-horizontal-line"></div>
                <!--Line 2-->
                <div class="row flex">
                  <a href="#/" class="box-33">
                    <h2 class="purple-text text-left">04</h2>
                    <h5 class="purple-text text-left">Surgery</h5>
                  </a>
                  <a href="#/" class="box-33">
                    <h2 class="purple-text text-left">05</h2>
                    <h5 class="purple-text text-left">Peadiatrics</h5>
                  </a>
                  <a href="#/" class="box-33">
                    <h2 class="purple-text text-left">06</h2>
                    <h5 class="purple-text text-left">Laboratory Services</h5>
                  </a>
                </div>
                <div class="faint-horizontal-line"></div>
                <!--Line 3-->
                <div class="row flex">
                  <a href="#/" class="box-33">
                    <h2 class="purple-text text-left">07</h2>
                    <h5 class="purple-text text-left">Neurology</h5>
                  </a>
                  <a href="#/" class="box-33">
                    <h2 class="purple-text text-left">08</h2>
                    <h5 class="purple-text text-left">Wound Care</h5>
                  </a>
                  <a href="#/" class="box-33">
                    <h2 class="purple-text text-left">09</h2>
                    <h5 class="purple-text text-left">Ambulance Services</h5>
                  </a>
                </div>

                <a href="services.php" class="purple-text text-center"
                  >View A-Z List of Our Services
                  <i class="fa fa-fw fa-chevron-right purple-text"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--pay-a-Bill, Accepted-Insurance, and Visitors Information, angular.js applied for changing between tabs-->
    <section id="payAceptVist">
      <div class="container">
        <!--Navigation Links-->
        <ul class="inline-block">
          <li>
            <a href="#/" ng-click="payABill()" id="payBill">Pay a Bill</a>
          </li>
          <li>
            <a href="#/" ng-click="acceptedInsurance()" id="acceptedInsurance"
              >Accepted Insurance</a
            >
          </li>
          <li>
            <a
              href="#/"
              ng-click="visitorsInformation()"
              class="tab_activated"
              id="visitorInfo"
              >Visitors Information</a
            >
          </li>
        </ul>

        <!--Links Content1, visible by default-->
        <div class="link-content" ng-show="visit">
          <div class="container-mini-width align-left">
            <div class="flex align-start">
              <div class="col-50">
                <div>
                  <h2 class="text-black">Visiting a Loved One ?</h2>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Mollitia dolorum deleniti quod repellat doloribus Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Mollitia
                    dolorum deleniti quod repellat doloribus necessitatibus,
                    ducimus odit labore alias, nihil quos magnam a tempora.
                  </p>
                  <a href="#" class="btn btn-bg-purple">
                    Learn More
                    <i class="fa fa-fw fa-chevron-right angle-white"></i
                  ></a>
                </div>
              </div>
              <div class="col-50">
                <img
                  src="img/other photos/VisitorPolicy.jpg"
                  alt="hospital visitors"
                />
              </div>
            </div>
          </div>
        </div>

        <!--Links Content2 visble when accepted insurance tab is clicked-->
        <div class="link-content" ng-show="accept">
          <div class="container-mini-width align-left">
            <div class="flex align-start">
              <div class="col-50">
                <div>
                  <h2 class="text-black">Insurance Types</h2>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Mollitia dolorum deleniti quod repellat doloribus Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Mollitia
                    dolorum deleniti quod repellat doloribus necessitatibus,
                    ducimus odit labore alias.
                  </p>
                  <a href="#" class="btn btn-bg-purple">
                    Learn More
                    <i class="fa fa-fw fa-chevron-right angle-white"></i
                  ></a>
                </div>
              </div>
              <div class="col-50">
                <img
                  src="img/other photos/insurance2.jpg"
                  alt="Insurance photo"
                />
              </div>
            </div>
          </div>
        </div>

        <!--Links Content3-->
        <div class="link-content" ng-show="pay">
          <div class="container-mini-width align-left">
            <div class="flex align-start">
              <div class="col-50">
                <div>
                  <h2 class="text-black">Online Pay Accepted</h2>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Mollitia dolorum deleniti quod repellat doloribus Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Mollitia
                    dolorum deleniti.
                  </p>
                  <a href="#" class="btn btn-bg-purple">
                    Learn More
                    <i class="fa fa-fw fa-chevron-right angle-white"></i
                  ></a>
                </div>
              </div>
              <div class="col-50">
                <img src="img/other photos/paybill.jpg" alt="pay a bill" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Patient's Testimonies-->
    <section id="patientTestimonies">
      <div class="container">
        <div class="col-100">
          <h2 class="text-black text-center">Patient's Testimonies</h2>
          <div class="mini-width-text-paragraph margin-bottom">
            <p class="text-center">
              Twins Hospital regularly receives letters of thanks from former
              patients or their family members for the high level of care we
              provide throughout our facility. Below are just a few examples
              Twins Hospital regularly receives
            </p>
          </div>
        </div>
        <div class="flex testifier-main-wrapper">
          <div class="testifiers-container col-50">
            <div class="testifiers">
              <h3 class="purple-text text-center h3-tiny">Testifiers</h3>
              <!------------Testifiers------------>
              <div class="icons-wrapper">
                <!--first justin-->
                <div
                  class="testifier-img-flex"
                  id="justin_p"
                  ng-click="testfier_justin()"
                >
                  <div class="outermost-white-circle-wrapper">
                    <div class="outer-wrapper purple-border" id="person_one">
                      <img
                        src="./img/testifiers/pexels-justin-shaifer-1222271.jpg"
                        alt="justin"
                        id="image1"
                      />
                    </div>
                  </div>
                  <h4 id="imageText" class="imageText">Justin Lorem</h4>
                </div>

                <!--second kathy-->
                <div
                  class="testifier-img-flex"
                  id="kathy_p"
                  ng-click="testfier_kathy()"
                >
                  <div class="outermost-white-circle-wrapper">
                    <div
                      class="outer-wrapper header-border-color"
                      id="person_two"
                    >
                      <img
                        src="./img/testifiers/freestocks-9UVmlIb0wJU-unsplash.jpg"
                        alt="kathy"
                        id="image2"
                      />
                    </div>
                  </div>
                  <h4 id="imageText" class="imageText show-text">
                    Kathy Lorem
                  </h4>
                </div>

                <!--third Morris-->
                <div
                  class="testifier-img-flex"
                  id="morris_p"
                  ng-click="testfier_morris()"
                >
                  <div class="outermost-white-circle-wrapper">
                    <div class="outer-wrapper navy-border" id="person_three">
                      <img
                        src="./img/testifiers/remi-turcotte-usSV8umsRDA-unsplash.jpg"
                        alt="Morris"
                        id="image3"
                      />
                    </div>
                  </div>
                  <h4 id="imageText" class="imageText">Morris Lorem</h4>
                </div>

                <!--fourth sandra-->
                <div
                  class="testifier-img-flex testfier-active"
                  id="sandra_p"
                  ng-click="testfier_sandra()"
                >
                  <div class="outermost-white-circle-wrapper">
                    <div
                      class="outer-wrapper pitch-border showing"
                      id="person_four"
                    >
                      <img
                        src="./img/testifiers/pexels-christina-morillo-1181519.jpg"
                        alt="sandra"
                        id="image4"
                      />
                    </div>
                  </div>
                  <h4 id="imageText" class="imageText display-text">
                    Sandra Harmon
                  </h4>
                </div>
              </div>
              <a href="./about-us/patient-stories.php" class="purple-text"
                >More Testifiers
                <i class="fa fa-fw fa-chevron-right purple-text"></i
              ></a>
            </div>
          </div>

          <div class="testifiers-comments col-50">
            <div class="comments-wrapper">
              <!---------------Sandra's Comment------------------------>
              <div id="justinComment" ng-show="sandra_comment">
                <h3>
                  <span
                    class="iconify"
                    data-icon="icomoon-free:quotes-left"
                  ></span>
                  <span class="comment-block">
                    I recently found myself under your care for a cardiac issue.
                    While there, accompanied by my husband, we found that the
                    entire staff at Twins Hospital was exceedingly professional
                    and efficient, from your E.R. receptionists to the cardiac
                    care team.
                  </span>
                  <span
                    class="iconify"
                    data-icon="icomoon-free:quotes-right"
                  ></span>
                </h3>
              </div>

              <!---------------Morris's Comment------------------------>
              <div id="justinComment" ng-show="morris_comment">
                <h3>
                  <span
                    class="iconify"
                    data-icon="icomoon-free:quotes-left"
                  ></span>
                  <span class="comment-block">
                    I am writing on behalf of my brother who was a patient in
                    your hospital. I would like to thank you on behalf of my
                    entire family for the help and consideration shown to me in
                    what was a very difficult time. Again, I would like to thank
                    you for the services you provide to patients and their
                    families.
                  </span>
                  <span
                    class="iconify"
                    data-icon="icomoon-free:quotes-right"
                  ></span>
                </h3>
              </div>
              <!---------------Kathy's Comment------------------------>
              <div id="justinComment" ng-show="kathy_comment">
                <h3>
                  <span
                    class="iconify"
                    data-icon="icomoon-free:quotes-left"
                  ></span>
                  <span class="comment-block">
                    We would like to let you know how much we appreciate the
                    special care our daughter was given by the doctors and staff
                    at your hospital. Our baby???s physician was professional,
                    kind, understanding, and her treatment was ???right on.??? Your
                    organization should be proud to have such kind hearted
                    people. They made sure that my daughter???s hospitalization
                    was very pleasant.
                  </span>
                  <span
                    class="iconify"
                    data-icon="icomoon-free:quotes-right"
                  ></span>
                </h3>
              </div>
              <!---------------Justin's Comment------------------------>
              <div id="justinComment" ng-show="justin_comment">
                <h3>
                  <span
                    class="iconify"
                    data-icon="icomoon-free:quotes-left"
                  ></span>
                  <span class="comment-block">
                    I recently had a nine day stay at Jamaica Hospital and I
                    wanted to express how impressed I was with the level of care
                    I received from everyone I encountered. The Trauma Center
                    saved my life! I found it amazing and I am grateful that it
                    services my community.
                  </span>
                  <span
                    class="iconify"
                    data-icon="icomoon-free:quotes-right"
                  ></span>
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Map and Container information-->
    <section id="mapContactInfo" style="padding: 0">
      <div class="map-container-relative">
        <div class="fade"></div>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.2736075584744!2d5.7600891147657345!3d5.526363995992851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1041b284d577bb99%3A0x807fcc5d147211ed!2sTwins%20Clinic%20Drive%2C%20Warri%20332104%2C%20Warri!5e0!3m2!1sen!2sng!4v1658535252274!5m2!1sen!2sng"
          width="1920"
          height="700"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          id="googleMap"
        ></iframe>
        <div class="map-info-box-absolute">
          <div class="info-box">
            <div class="flex">
              <div class="border-right text-right">
                <h3 class="tiny-text text-black">Contact Info</h3>
                <p style="color: black">(+974) 4439 5777 , (+974) 4439 5777</p>
                <a href="mailto:admin@twinsclinic.co.uk" class="purple-text"
                  >admin@twinsclinic.co.uk</a
                >
                <p style="color: black">
                  301 N. Washington Ave., Dallas, TX 75246
                </p>
              </div>
              <div>
                <h3 class="purple-text text-left">Let???s Help You Find Us</h3>
                <a
                  href="https://www.google.com.ng/maps/dir//Twins+Clinic+%26+Hospital,+1+Twins+Clinic+Drive,+Off+Deco+Rd,+332211,+Warri/@5.5262409,5.760367,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x1041b284d980d8f3:0x28bb58a1ce4ff287!2m2!1d5.7625557!2d5.5262356?hl=en" target="_blank"
                  class="purple-text"
                  style="display: flex; align-items: center"
                  >Get driving direction
                  <span
                    class="iconify"
                    data-icon="carbon:direction-bear-right-02"
                    style="font-size: 1.5em"
                  ></span
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!------------------------------------------------------------------MAIN PAGE CONTENT ENDS--------------------------------------------------------------->

    <!-------BACK TO THE TOP BUTTON---------->

    <div class="container" style="padding: 0">
      <div class="back-top-btn-wrapper" id="btnWrapper">
        <button
          class="scrollTopBtn flex-column"
          id="myTopBTN"
          onclick="topFunction()"
        >
          <i class="fa fa-long-arrow-up"></i>
        </button>
        <p class="show-text" id="BackTopBtn">Back to Top</p>
      </div>
    </div>

    <!----------------------------------------------------------------------FOOTER SECTION ------------------------------------------------------------------>
    <footer>
      <!--First footer section-->
      <div class="bg-lighter-purple">
        <div class="flex container half-section-padding">
          <div class="col-50 flex">
            <div class="column-25">
              <h5 class="text-left text-white">About Us</h5>
              <ul>
                <li><a href="about-us/history.php">History</a></li>
                <li>
                  <a href="about-us/awards-and-accreditation.php"
                    >Awards & Accreditation</a
                  >
                </li>
                <li><a href="about-us/meet-the-team.php">Meet the Team</a></li>
                <li>
                  <a href="about-us/mission-vision-values.php"
                    >Mission, Vision & Values</a
                  >
                </li>
                <li><a href="contact-us.php">Contact Us</a></li>
              </ul>
            </div>
            <div class="column-25">
              <h5 class="text-left text-white">Health Professionals</h5>
              <ul>
                <li><a href="refer-a-patient.php">Refer a Patient</a></li>
                <li>
                  <a href="request-appointment.php">Request Appointment</a>
                </li>
                <li><a href="career.php">Career</a></li>
                <li><a href="#/">For Nurses</a></li>
                <li><a href="#/">For Physician</a></li>
              </ul>
            </div>
          </div>
          <div class="col-50 flex">
            <div class="column-25">
              <h5 class="text-left text-white">Patient & Visitors</h5>
              <ul>
                <li>
                  <a href="patients-and-visitors/visitors.php">Visitors</a>
                </li>
                <li>
                  <a href="patients-and-visitors/medical-records.php"
                    >Medical Records</a
                  >
                </li>
                <li>
                  <a href="patients-and-visitors/accepted-insurance.php"
                    >Accepted Insurance</a
                  >
                </li>
                <li>
                  <a href="patients-and-visitors/pay-your-bill.php"
                    >Pay Your Bill</a
                  >
                </li>
                <li>
                  <a
                    href="patients-and-visitors/billing-and-financial-asistance.php"
                    >Billing and Financial Asistance</a
                  >
                </li>
              </ul>
            </div>
            <div class="column-25">
              <h5 class="text-left text-white">Resources</h5>
              <ul>
                <li><a href="services.php">Services</a></li>
                <li>
                  <a href="map-and-direction.php">Get Driving Direction</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!--Second footer section-->
      <div class="bg-darker-purple">
        <div class="flex container half-section-padding">
          <div class="text-logo-brand flex-row col-50">
            <h3 class="text-white border-right thicker-h3">
              WE ARE HERE FOR YOU
            </h3>
            <img
              src="img/logo/images2 copy(Dark).jpg"
              alt="Twins clinic darker logo"
            />
          </div>
          <div class="social-icon-container col-50">
            <h3 class="text-white thiner-h3 text-center">Connect With Us</h3>
            <div>
              <a href="#/" class="fa-brands fa-facebook-f"></a>
              <a href="#/" class="fa-brands fa-twitter"></a>
              <a href="#/" class="fa-brands fa-linkedin-in"></a>
              <a href="#/" class="fa-brands fa-instagram"></a>
            </div>
          </div>
        </div>
      </div>

      <!--Third footer section-->
      <div class="bg-white affiliation">
        <div class="container half-section-padding">
          <h3 class="purple-text text-center">OUR PARTNERS</h3>
          <div class="flex flex-wrap">
            <img src="img/logo/evenflo-logo-vector.png" alt="logo1" />
            <img src="img/logo/A08022_LogoExabyteCMYK.png" alt="logo1" />
            <img
              src="img/logo/StethoMe_logo-color-kolor-400x400.png"
              alt="logo1"
            />
            <img src="img/logo/ipanema_sandals.png" alt="logo1" />
            <img
              src="img/logo/123-1233488_dream-designs-graphics-dream-design-logo-hd-png.jpg"
              alt="logo1"
            />
          </div>
        </div>
      </div>

      <div class="faint-horizontal-line"></div>

      <div class="address-privacy-sitemap">
        <div class="flex container half-section-padding">
          <div class="address">
            <address>301 N. Washington Ave., Dallas, TX 75246</address>
            <p>
              <a href="mailto:admin@twinsclinic.co.uk"
                >admin@twinsclinic.co.uk,</a
              >
              (+974) 4439 5777
            </p>
            <small> &copy; <?php echo date("Y"); ?> Twins Hospital. All Right Reserved. </small>
          </div>
          <ul>
            <li><a href="#/">Privacy</a></li>
            <li><a href="#/">Disclaimer</a></li>
            <li><a href="#/">FAQ</a></li>
            <li><a href="#">Sitemap</a></li>
            <li>
              <a href="https://www.blackpopex.com/" target="_blank"
                >Designed and Built By
                <span class="text-purple">Blackpopex</span></a
              >
            </li>
          </ul>
        </div>
      </div>
    </footer>
    <script src="./js/main.js"></script>
    <script src="./js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="./js/slick.js"></script>
    <script src="./js/slick.min.js"></script>
    <script>
      $(document).ready(function () {
        $(".slick-slider-container").slick({
          dots: true,
          infinite: true,
          speed: 2500,
          slidesToShow: 1,
          centerMode: true,
          autoplay: true,
          autoplaySpeed: 6000,
          prevArrow: false,
          nextArrow: false,
          pauseOnHover: false,
          variableWidth: true,
        });
      });
    </script>
  </body>
</html>
