       
        
      <div id="aboutCenter">
          <br>
          <br>
          <br>
         
        
     <h1>About Our School</h1>
      
        <pid="aboutwebsiteTitle">Sullimar Academy of Music (SAOM) is a centre of excellence that holds box office events, tests students and teaches students with a passion for music. 
            We first started as a small school with just few class rooms but as the school grew with more students and teachers entering into this Acadmemy out campus expanded and 
            now holds hundereds of students and staff. With this expanition of growth we decided to become avalible online which is what you see now. This website offers people to join this school and become a student by click of a button. The websiste offers many adavantages we never useally had like booking exams online, online timetables, accounts for student and teachers and Events to view and book</p>
        
       
            <h2 id="aboutwebsiteTitle">Our Location</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4069.8020082896373!2d-8.629777025689897!3d52.66144508712854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6cbfd5a6b65bbc0c!2sLucky%20Lane!5e0!3m2!1sen!2sie!4v1583759259316!5m2!1sen!2sie" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" id="map"></iframe>
            <marquee behavior="scroll" direction="left" scrollamount="12" onmouseover="this.setAttribute('scrollamount', 80, 0);" onmouseout="this.setAttribute('scrollamount', 12, 0);">New Events Every Week!</marquee>
</div>
    
<br>
        <br>
        
    <!-- Contact -->
    <section id="contact" class="tm-section-pad-top tm-parallax-2">
      <div class="container tm-container-contact">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-4 tm-section-title">Contact Us</h2>
                <div class="mb-5 tm-underline">
                  <div class="tm-underline-inner"></div>
                </div>
                <p class="mb-5">
                  Nullam tincidunt, lacus a suscipit luctus, elit turpis tincidunt dui,
                  non tempus sem turpis vitae lorem. Maecenas eget odio in sapien ultrices
                  viverra vitae vel leo. Curabitur at elit eu risus pharetra pellentesque
                  at at velit.
                </p>
            </div>
            
            <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item">
              <a href="tel:0100200340" class="tm-contact-item-link">
                  <i class="fas fa-3x fa-phone mr-4"></i>
                  <span class="mb-0">010-020-0340</span>
              </a>              
            </div>
            <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item">
              <a href="mailto:info@company.co" class="tm-contact-item-link">
                  <i class="fas fa-3x fa-envelope mr-4"></i>
                  <span class="mb-0">info@company.co</span>
              </a>              
            </div>
            <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item">
              <a href="https://www.google.com/maps" class="tm-contact-item-link">
                  <i class="fas fa-3x fa-map-marker-alt mr-4"></i>
                  <span class="mb-0">Location on Maps</span>
              </a>              
            </div>
            <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item">
              <form action="" method="get">
                <input name="email" type="email" placeholder="Subscribe your email" class="tm-input" required />
                <button type="submit" class="btn tm-btn-submit">Submit</button>
              </form>
            </div>
        </div>
      </div>
     
    </section>
    



    <script src="js/jquery-1.9.1.min.js"></script>     
    <script src="slick/slick.min.js"></script>
    <script src="magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>     
    <script src="js/bootstrap.min.js"></script> 
    <script>


      var background_image_parallax_2 = function($object, multiplier){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        $object.css({"background-attachment" : "fixed"});
        $(window).scroll(function(){
          var firstTop = $object.offset().top,
              pos = $(window).scrollTop(),
              yPos = Math.round((multiplier * (firstTop - pos)) - 186);              

          var bg_css = 'center ' + yPos + 'px';

          $object.css({"background-position" : bg_css });
        });
      };
      
  
        
        // Handle window resize
        window.addEventListener('resize', function(){
          background_image_parallax($(".tm-parallax"), 0.30, true);
        }, true);

        // Detect window scroll and update navbar
        $(window).scroll(function(e){          
          if($(document).scrollTop() > 120) {
            $('.tm-navbar').addClass("scroll");
          } else {
            $('.tm-navbar').removeClass("scroll");
          }
        });
        
        // Close mobile menu after click 
        $('#tmNav a').on('click', function(){
          $('.navbar-collapse').removeClass('show'); 
        })

                
        
        // Add smooth scrolling to all links
        // https://www.w3schools.com/howto/howto_css_smooth_scroll.asp
        $("a").on('click', function(event) {
          if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 400, function(){
              window.location.hash = hash;
            });
          } // End if
        });

        // Pop up
        $('.tm-gallery').magnificPopup({
          delegate: 'a',
          type: 'image',
          gallery: { enabled: true }
        });

     
          }
        ]
        });
      });
    </script>
  </body>
</html>
