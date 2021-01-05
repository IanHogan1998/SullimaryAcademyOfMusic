<?php
$base_url = base_url();
$img_url = base_url() . "assets/images/";
$css_url = base_url() . "assets/css/";
$script_url = base_url() . "assets/js/";
?>

<?php include ('partials/headerView2.php');?>

<?php echo $content;?>

<?php include ('partials/footerView.php');?>