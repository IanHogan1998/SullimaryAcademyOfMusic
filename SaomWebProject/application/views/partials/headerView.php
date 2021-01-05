<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   <?php echo link_tag("https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900");?> 
    
    <title>Sullimar Academy of Music</title>
    
     <?php echo link_tag("assets/css/bootstrap.min.css");?>
     <?php echo link_tag("assets/vendor/bootstrap/css/bootstrap.min.css");?>

     <?php echo link_tag("assets/css/fontawesome.css");?>
     <?php echo link_tag("assets/css/SOAM.css");?>
     <?php echo link_tag("assets/css/owl.css");?>
     <?php echo link_tag("assets/css/lightbox.css");?> 
     <?php echo link_tag("assets/css/style.css");?>
  
 

  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
     <a href="<?php echo site_url('SaomBase/index');?>"><em>SA</em>OM</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
       <li><a href="<?php echo site_url('SaomBase/index');?>">Home</a></li>
        <li><a href="<?php echo site_url('SaomBase/aboutUs');?>">About Us</a></li> 
        <li><a href="<?php echo site_url('SaomBase/viewEvent');?>">Events</a></li>
        <li><a href="<?php echo site_url('SaomBase/AddEntry');?>">Sign up</a></li>
       
        <!-- <li><a href="#section5">Video</a></li> -->
        <li><a href="contact">Contact</a></li>
        <li class="has-submenu"><a href="<?php echo site_url('Login/index');?>">Login Student</a>
        <li class="has-submenu"><a href="<?php echo site_url('Login/index2');?>">Login Staff</a>
          <ul class="sub-menu">
          <li><a href="<?php echo site_url('SaomBase/dashborad');?>">Dashborad</a></li>
            <li><a href="#">Book Orders</a></li>
        <li><a href="<?php echo site_url('SaomBase/Logout'); ?>">Logout</a></li>
            
          </ul>
      
            

            
          </ul>
        </li>
      </ul>
    </nav>
  </header>
