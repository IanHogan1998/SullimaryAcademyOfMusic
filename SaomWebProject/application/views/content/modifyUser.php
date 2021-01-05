<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Sullimar Academy of Music</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/dashboardStyle.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>SA</em>OM</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Home</a></li>
        <li><a href="#section2">About Us</a></li>          
        <li><a href="#section4">Courses</a></li>
        <!-- <li><a href="#section5">Video</a></li> -->
        <li><a href="#section6">Contact</a></li>
        <li class="has-submenu"><a href="#">Login</a>
          <ul class="sub-menu">
            <li><a href="dashboard.html">Dashboard</a></li>
            <li><a href="#">Book Orders</a></li>
            <li><a href="#">Logout</a></li>
            
          </ul>
        </li>
      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      
<div class="container-fluid">
             
             

                <div class="container">
                  <form action="#" class="mod_form">
                    <h3>Users Information</h3>
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" value="Joe">

                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" value="Bloggs">

                    <label for="lname">Email</label>
                    <input type="text" id="lname" name="department" value="JoeBloggs@gmail.com">

                    <label for="lname">Occupation</label>
                    <input type="text" id="lname" name="department" value="Teacher">

                    <label for="subject">Date Hired</label>
                    <input type="text" id="lname" name="dateHired" value="April 18, 2017" readonly>

                    <input type="submit" value="Submit" class="formButton">
                    
                </form>
                <a href="manageUsers.html"><button class="formButton">Back</button></a>
</div>   
              
            </div>
      <nav class="main-menu">
            <ul>
                <li>
                    <a href="dashboard.html">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Dashboard
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="manageStaff.html">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Manage Staff
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="manageStudent.html">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Manage Student
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="manageUsers.html">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Manage Users
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="manageCourse.html">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                            Manage Course
                        </span>
                    </a>
                </li>
                <li>
                    <a href="manageStore.html">
                        <i class="fa fa-font fa-2x"></i>
                        <span class="nav-text">
                          Manage Store
                        </span>
                    </a>
                </li>
                <li>
                   <a href="manageEvents.html">
                       <i class="fa fa-table fa-2x"></i>
                        <span class="nav-text">
                            Manage Events
                        </span>
                    </a>
                </li>
                <li>
                   <a href="manageTimetables.html">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <span class="nav-text">
                            Manage Timetables
                        </span>
                    </a>
                </li>
                <li>
                    <a href="salesReportGenerate.html">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Generate Sales Report
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="#">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
  </section>
  
  

  <footer>
    
          <p><i class="fa fa-copyright"></i> Sullimar Academy of Music 
          
           | <a href="">SAOM</a></p>
     
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

     /*   $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });*/

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</html>