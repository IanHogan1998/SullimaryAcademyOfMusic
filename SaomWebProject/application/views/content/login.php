
 <section class="section main-banner" id="top" data-section="section1">
      
<div class="container-fluid">
             
                <div class="row ">
                    <!-- column -->
                    <h2>Student Login</h2>
               <?php echo form_open('Login/index/');
      if($this->session->userdata('loggedIn')) {

          echo '<p><a href="' . site_url("SoamBase/Logout") . '">Logout</a></p>';
      }else{
        echo '<label>Email</label>
        <input type="text" name="emailAddress" placeholder="Email" size="10" class="input_field">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password" class="input_field">

<input type="submit" name="submit" value="Login" alt="Login" id="submit_btn" >
<p>   <a href="'.site_url("SaomBase/AddEntry").'">Register</a></p>
         <input type="submit" name="submit" value="Login" alt="Login" id="submit_btn" >
       ';

      }
      ?>
                </div>
              
            </div>
     
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

        /*$('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
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