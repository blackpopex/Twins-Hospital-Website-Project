<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Twins Hospital | Visitors</title>
    <link rel="icon" type="image/x-icon" href="./img/logo/favicon.ico.png" />
    <meta name="description" content="" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <script src="http://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://kit.fontawesome.com/12d9de5a0c.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script
      src="https://kit.fontawesome.com/f1874d02aa.js"
      crossorigin="anonymous"
    ></script>
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
  <body>
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
              <a href="../index.php" id="logo" class="logo-brand">
                <img
                  src="../img/logo/Western lighter logo.jpg"
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
                            <li>
                              <a href="../about-us/history.php">History</a>
                            </li>
                            <li>
                              <a
                                href="../about-us/awards-and-accreditation.php"
                                >Awards & Accreditation</a
                              >
                            </li>
                            <li>
                              <a href="../about-us/mission-vision-values.php"
                                >Vision, Mission & Values</a
                              >
                            </li>
                            <li>
                              <a href="../about-us/meet-the-team.php"
                                >Meet the Team</a
                              >
                            </li>
                            <li>
                              <a href="../about-us/patient-stories.php"
                                >Patient Stories</a
                              >
                            </li>
                            <li>
                              <a href="../about-us/phone-directory.php"
                                >Phone Directory</a
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
                              <a href="../patients-and-visitors/visitors.php"
                                >Visitors</a
                              >
                            </li>
                            <li>
                              <a
                                href="../patients-and-visitors/visiting-hours.php"
                                >Visiting Hours</a
                              >
                            </li>
                            <li>
                              <a
                                href="../patients-and-visitors/your-visits-or-stay.php"
                                >Your Visits or Stay</a
                              >
                            </li>
                            <li>
                              <a
                                href="../patients-and-visitors/what-to-expect.php"
                                >What to Expect</a
                              >
                            </li>
                            <li>
                              <a
                                href="../patients-and-visitors/patient-rights-and-responsibilities.php"
                                >Patient Rights & Responsibilities</a
                              >
                            </li>
                          </ul>
                          <ul class="col-25 panel">
                             <li>
                              <a
                                href="../patients-and-visitors/accepted-insurance.php"
                                >Accepted Insurance</a
                              >
                            </li>
                            <li>
                              <a
                                href="../patients-and-visitors/billing-and-financial-asistance.php"
                                >Biling and Financial Asistance</a
                              >
                            </li>
                            <li>
                              <a
                                href="../patients-and-visitors/pay-your-bill.php"
                                >Pay your Bill</a
                              >
                            </li>
                            <li>
                              <a
                                href="../patients-and-visitors/medical-records.php"
                                >Request Medical Records</a
                              >
                            </li>
                            <li>
                              <a
                                href="../patients-and-visitors/patient-education.php"
                                >Patient Education</a
                              >
                            </li>
                          </ul>
                        </div>
                      </li>
                      <!--Other non dropdown section-->
                     <li>
                        <a
                          href="../services.php"
                          class="dropbtn-accordion-children"
                          >Services</a
                        >
                      </li>
                      <li>
                        <a
                          href="../map-and-direction.php"
                          class="dropbtn-accordion-children"
                          >Map & Directions</a
                        >
                      </li>
                      <li>
                        <a
                          href="../contact-us.php"
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
                            src="../img/other photos/filipp-romanovski-33HfFxmJ9O4-unsplash.jpg"
                            alt="photos of hands together"
                          />
                          <p class="text-black">
                            Lorem Ipsum is simply dummy text of the,dummy text
                            of the
                          </p>
                          <a href="#/" class="lighter-purple">Find Out More</a>
                        </div>
                        <!-------------------HIDE ON MOBILE SCREENS --------------->
                        <div class="col-30 col-hidden-mobile">
                          <h5 class="text-black text-left">
                            We Treat Everyone Equally
                          </h5>
                          <img
                            src="../img/other photos/nathan-anderson-FHiJWoBodrs-unsplash.jpg"
                            alt="photos of two men smiling"
                          />
                          <p class="text-black">
                            Lorem Ipsum is simply dummy text of the,dummy text
                            of the
                          </p>
                          <a href="#/" class="lighter-purple">Find Out More</a>
                        </div>
                        <!--------------- SHOW ON LARGE AND MOBILE SCREENS ---------->
                        <ul class="col-30 panel">
                           <li>
                            <a href="../about-us/history.php">History</a>
                          </li>
                          <li>
                            <a href="../about-us/awards-and-accreditation.php"
                              >Awards & Accreditation</a
                            >
                          </li>
                          <li>
                            <a href="../about-us/mission-vision-values.php"
                              >Vision, Mission & Values</a
                            >
                          </li>
                          <li>
                            <a href="../about-us/meet-the-team.php"
                              >Meet the Team</a
                            >
                          </li>
                          <li>
                            <a href="../about-us/patient-stories.php"
                              >Patient Stories</a
                            >
                          </li>
                          <li>
                            <a href="../about-us/phone-directory.php"
                              >Phone Directory</a
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
                            src="../img/other photos/istockphoto-1369166126-170667a.jpg"
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
                            src="../img/other photos/gettyimages-1286713467-170667a.jpg"
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
                            <a href="../patients-and-visitors/visitors.php"
                              >Visitors</a
                            >
                          </li>
                          <li>
                            <a
                              href="../patients-and-visitors/visiting-hours.php"
                              >Visiting Hours</a
                            >
                          </li>
                          <li>
                            <a
                              href="../patients-and-visitors/your-visits-or-stay.php"
                              >Your Visits or Stay</a
                            >
                          </li>
                          <li>
                            <a
                              href="../patients-and-visitors/what-to-expect.php"
                              >What to Expect</a
                            >
                          </li>
                          <li>
                            <a
                              href="../patients-and-visitors/patient-rights-and-responsibilities.php"
                              >Patient Right & Responsibilities</a
                            >
                          </li>
                        </ul>
                        <ul class="col-25 panel">
                            <li>
                            <a
                              href="../patients-and-visitors/accepted-insurance.php"
                              >Accepted Insurance</a
                            >
                          </li>
                          <li>
                            <a
                              href="../patients-and-visitors/billing-and-financial-asistance.php"
                              >Billing and Financial Asistance</a
                            >
                          </li>
                          <li>
                            <a
                              href="../patients-and-visitors/pay-your-bill.php"
                              >Pay your Bill</a
                            >
                          </li>
                          <li>
                            <a
                              href="../patients-and-visitors/medical-records.php"
                              >Request Medical Records</a
                            >
                          </li>
                          <li>
                            <a
                              href="../patients-and-visitors/patient-education.php"
                              >Patient Education</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="tk-font">
                    <a href="../services.php">Services</a>
                  </li>
                  <li class="tk-font">
                    <a href="../map-and-direction.php">Map & Directions</a>
                  </li>
                  <li class="tk-font">
                    <a href="../contact-us.php">Contact Us</a>
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

      <!-------------------------HEADER SECTION  ----------style="box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.1)"------------>
      <section id="sectionHeader">
        <div class="section-image-container">
          <div class="header-bg-image visitors-bg-image"></div>
        </div>
        <div class="container">
          <!--max-width: 80px-->
          <div class="you-are-here flex breadcrumb">
            <h5 class="purple-text">You Are Here:</h5>
            <ul style="padding: 0.5em 0">
              <li>
                <a href="../index.php">
                  <i class="fa fa-fw fa-home purple-text" aria-hidden="true"></i
                ></a>
              </li>
              <li style="color: #bbbbbb">Visitors</li>
            </ul>
          </div>
        </div>
      </section>
    </div>

    <!---------------------------------------------------------------------HEADER ENDS ----------------------------------------------------------------->

    <!---------------------------------------------------------------------MAIN PAGE CONTENT----------------------------------------------------------------->
    <main>
      <section id="history">
        <div class="container">
          <div class="flex align-start">
            <!--column to left-->
            <div class="col-70">
              <div class="visit">
                <h3 class="purple-text text-left">Visitors Guidelines</h3>
                <div>
                  <p>How many people can visit or be with a patient?</p>
                  <ul class="margin-bottom circular-dots">
                    <li>
                      Staying in the hospital: 2 visitors allowed from 8 a.m -
                      9pm and 1 overnight visitor allowed
                    </li>
                    <li>In the ER: 2 people allowed</li>
                    <li>At clinic appointment: 2 people allowed</li>
                  </ul>

                  <p>At medical visits and in the hospital, visitors must:</p>

                  <ul class="margin-bottom circular-dots">
                    <li>Wear a mask</li>
                    <li>Be 12 or older</li>
                    <li>Not have Covid-19 symptoms or exposures</li>
                  </ul>
                </div>

                <div class="margin-bottom">
                  <h4 class="purple-text">Bringing Your Child as a Visitor</h4>
                  <p>
                    In most cases, children over 12 can visit someone in the
                    hospital. However, some areas, such as the behavioral health
                    areas, have more restrictions. Call 434.924.3627 before you
                    come to confirm specific visitor restrictions and
                    exceptions.
                  </p>
                </div>

                <div class="margin-bottom">
                  <h4 class="purple-text">
                    When You Can Have a Visitor: Policy Exceptions
                  </h4>
                  <p>
                    For questions about exceptions and beyond what's listed
                    here, talk to the unit manager or the patient's care team.
                    They will review your request.
                  </p>

                  <div>
                    <h5 class="black-text">End of Life</h5>
                    <p>If facing death, we can allow 2 visitors, 24/7.</p>
                  </div>
                  <div>
                    <h5 class="black-text">Having a Baby</h5>
                    <p>
                      If you???re having a baby, you can have 2 visitors, 24/7.
                    </p>
                  </div>
                  <div>
                    <h5 class="black-text">Clergy</h5>
                    <p>
                      In the hospital, clergy members can visit in addition to
                      your allowed visitors.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!--COLUM RIGHT -->
            <div class="col-30">
              <aside>
                <!--hide this on mobile since the sidebar carries less significance-->
                <div class="sidebar hide-on-mobile">
                  <img
                    src="../img/bg-image/himanshu-singh-gurjar-iSi02D_Qx_w-unsplash(1).jpg"
                    alt="young-girl-smiling"
                  />
                  <div class="side-content bg-lighter-purple">
                    <h4 class="text-white text-center bigger-h4">
                      Quick Links
                    </h4>
                    <ul>
                     <li>
                        <a href="../patients-and-visitors/visitors.php"
                          >Visitors</a
                        >
                      </li>
                      <li>
                        <a
                          href="../patients-and-visitors/your-visits-or-stay.php"
                          >Your Visit or Stay</a
                        >
                      </li>
                      <li>
                        <a href="../patients-and-visitors/what-to-expect.php"
                          >What to Expect</a
                        >
                      </li>
                      <li>
                        <a
                          href="../patients-and-visitors/patient-rights-and-responsibilities.php"
                          >Patient Rights & Responsibilities</a
                        >
                      </li>
                      <li>
                        <a href="../patients-and-visitors/visiting-hours.php"
                          >Visiting Hours</a
                        >
                      </li>
                    </ul>
                  </div>
                  <div class="side-content bg-darker-purple">
                    <ul>
                     <li>
                        <a
                          href="../patients-and-visitors/accepted-insurance.php"
                          >Accepted Insurance</a
                        >
                      </li>
                      <li>
                        <a
                          href="../patients-and-visitors/billing-and-financial-asistance.php"
                          >Billing & Financial Asistance</a
                        >
                      </li>
                      <li>
                        <a href="../patients-and-visitors/pay-your-bill.php"
                          >Pay Your Bill</a
                        >
                      </li>
                      <li>
                        <a href="../patients-and-visitors/medical-records.php"
                          >Request Medical Records</a
                        >
                      </li>
                      <li>
                        <a href="../patients-and-visitors/find-a-doctor.php"
                          >Find a Doctor</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <!--------News section--------->
          <div class="news-section">
            <h3 class="purple-text text-left">Latest news</h3>
            <div class="flex">
              <!--news one-->
              <div>
                <img
                  src="../img/news-image/pexels-marina-hinic-730778.jpg"
                  alt="news1"
                />
                <div class="content">
                  <h5 class="max-width">
                    US To Drop COVID Testing for International Air Travelers
                  </h5>
                  <p class="post-date text-grey">25 May , 2022</p>
                  <p>
                    The Biden administration will stop requiring international
                    air travelers to prove they've tested negative for COVID-19
                    before being
                  </p>
                  <a href="#/" class="purple-text"
                    >Learn More <i class="fa-solid fa-chevron-right"></i
                  ></a>
                </div>
              </div>
              <!--news-two-->
              <div>
                <img
                  src="../img/news-image/pexels-birdie-wyatt-2447525.jpg"
                  alt="news1"
                />
                <div class="content">
                  <h5 class="max-width">
                    All cancer patients in drug trial appear to be cured
                  </h5>
                  <p class="post-date text-grey">06 June, 2022</p>
                  <p>
                    An experimental cancer drug appears to have cured every
                    single patient in a small clinical trial conducted in the
                    US.
                  </p>
                  <a href="#/" class="purple-text"
                    >Learn More <i class="fa-solid fa-chevron-right"></i
                  ></a>
                </div>
              </div>
              <!--news-three-->
              <div>
                <img
                  src="../img/news-image/breastfeeding-mother-456x259-1.jpg"
                  alt="news1"
                />
                <div class="content">
                  <h5 class="max-width">
                    New Nonhormonal Birth Control Options
                  </h5>
                  <p class="post-date text-grey">02 June, 2022</p>
                  <p>
                    The Biden administration will stop requiring international
                    air travelers to prove they've tested negative for COVID-19
                    before being
                  </p>
                  <a href="#/" class="purple-text"
                    >Learn More <i class="fa-solid fa-chevron-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!------------------------------------------------------------------MAIN PAGE CONTENT ENDS--------------------------------------------------------------->

    <!-------BACK TO THE TOP BUTTON---------->

    <div class="container">
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
               <li><a href="../about-us/history.php">History</a></li>
                <li>
                  <a href="../about-us/awards-and-accreditation.php"
                    >Awards & Accreditation</a
                  >
                </li>
                <li>
                  <a href="../about-us/meet-the-team.php">Meet the Team</a>
                </li>
                <li>
                  <a href="../about-us/mission-vision-values.php"
                    >Mission, Vision & Values</a
                  >
                </li>
                <li><a href="../contact-us.html">Contact Us</a></li>
              </ul>
            </div>
            <div class="column-25">
              <h5 class="text-left text-white">Health Professionals</h5>
              <ul>
                 <li><a href="../refer-a-patient.php">Refer a Patient</a></li>
                <li>
                  <a href="../request-appointment.php">Request Appointment</a>
                </li>
                <li><a href="#/">Career</a></li>
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
                  <a href="../patients-and-visitors/visitors.php">Visitors</a>
                </li>
                <li>
                  <a href="../patients-and-visitors/medical-records.php"
                    >Medical Records</a
                  >
                </li>
                <li>
                  <a href="../patients-and-visitors/accepted-insurance.php"
                    >Accepted Insurance</a
                  >
                </li>
                <li>
                  <a href="../patients-and-visitors/pay-your-bill.php"
                    >Pay Your Bill</a
                  >
                </li>
                <li>
                  <a
                    href="../patients-and-visitors/billing-and-financial-asistance.php"
                    >Billing and Financial Asistance</a
                  >
                </li>
              </ul>
            </div>
            <div class="column-25">
              <h5 class="text-left text-white">Resources</h5>
              <ul>
               <li><a href="../services.php">Services</a></li>
                <li>
                  <a href="../map-and-direction.php">Get Driving Direction</a>
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
              src="../img/logo/images2 copy(Dark).jpg"
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
            <img src="../img/logo/evenflo-logo-vector.png" alt="logo1" />
            <img src="../img/logo/A08022_LogoExabyteCMYK.png" alt="logo1" />
            <img
              src="../img/logo/StethoMe_logo-color-kolor-400x400.png"
              alt="logo1"
            />
            <img src="../img/logo/ipanema_sandals.png" alt="logo1" />
            <img
              src="../img/logo/123-1233488_dream-designs-graphics-dream-design-logo-hd-png.jpg"
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
            <li><a href="#/">Sitemap</a></li>
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
    <script src="../js/main.js"></script>
    <script src="../js/jquery-3.2.1.min.js" type="text/javascript"></script>
  </body>
</html>
