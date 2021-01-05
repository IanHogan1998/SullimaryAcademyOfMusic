<body>

   

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      
<div class="container-fluid">
             
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Student Details</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">First Name</th>
                                            <th class="border-top-0">Last Name</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Year</th>
                                            <th class="border-top-0">Course</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="txt-oflo">1</td>
                                            <td class="txt-oflo">Joe</td>
                                            <td><span class="label label-success label-rounded">Bloggs</span> </td>
                                            <td class="txt-oflo">JoeBloggs@gmail.com</td>
                                            <td><span class="font-medium">4th</span></td>
                                            <td><span class="font-medium">Internet System Development</span></td>
                                            <td><a href="modifyStudent.html"><button class="font-medium">Modify</button></a></td>
                                               <td><a href="deleteStudent.html"><button class="font-medium">Delete</button></a></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">2</td>
                                            <td class="txt-oflo">Anne</td>
                                            <td><span class="label label-info label-rounded">Bell</span></td>
                                            <td class="txt-oflo">AnneBell@gmail.com</td>
                                            <td><span class="font-medium">3rd</span></td>
                                            <td><span class="font-medium">Software Development</span></td>
                                            <td><button class="font-medium">Modify</button></td>
                                            <td><a href="deleteStudent.html"><button class="font-medium">Delete</button></a></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">3</td>
                                            <td class="txt-oflo">Gary</td>
                                            <td><span class="label label-purple label-rounded">Boy</span></td>
                                            <td class="txt-oflo">GaryBoy@gmail.com</td>
                                            <td><span class="font-medium">4th</span></td>
                                            <td><span class="font-medium">Business</span></td>
                                            <td><button class="font-medium">Modify</button></td>
                                            <td><a href="deleteStudent.html"><button class="font-medium">Delete</button></a></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">4</td>
                                            <td class="txt-oflo">Mike</td>
                                            <td><span class="label label-success label-rounded">Strelka</span></td>
                                            <td class="txt-oflo">MikeStrelka@gmail.com</td>
                                            <td><span class="font-medium">1st</span></td>
                                            <td><span class="font-medium">Sports & Conditioning</span></td>
                                            <td><button class="font-medium">Modify</button></td>
                                            <td><a href="deleteStudent.html"><button class="font-medium">Delete</button></a></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">5</td>
                                            <td class="txt-oflo">Suzy</td>
                                            <td><span class="label label-success label-rounded">Ann</span></td>
                                            <td class="txt-oflo">SuzyAnn@gmail.com</td>
                                            <td><span class="font-medium">2nd</span></td>
                                            <td><span class="font-medium">Science</span></td>
                                            <td><button class="font-medium">Modify</button></td>
                                              <td><a href="deleteStudent.html"><button class="font-medium">Delete</button></a></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">6</td>
                                            <td class="txt-oflo">Elizabeth</td>
                                            <td><span class="label label-danger label-rounded">Gremlinson</span> </td>
                                            <td class="txt-oflo">ElizabethGremlinson@gmail.com</td>
                                            <td><span class="font-medium">4th</span></td>
                                            <td><span class="font-medium">Forensics</span></td>
                                            <td><button class="font-medium">Modify</button></td>
                                              <td><a href="deleteStudent.html"><button class="font-medium">Delete</button></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
                    <a href="<?php echo site_url('SaomBase/manageStudent');?>">
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