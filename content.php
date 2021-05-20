<body>
<div class="container-md">
<?php 
session_start();
$username = $_SESSION["name"];
error_reporting(E_ALL);
include "connect.php";?>
<div data-aos="zoom-out-down"
     data-aos-anchor-placement="top-bottom">

</div>
<?php
include "header.php";?>

<div class="container-md" style="text-align: center;">
<hr data-aos="zoom-out-up" data-aos-duration="1500">
    <h3 data-aos="fade-down-right">
        
    <div class="container-lg">
                <?php 
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
	echo '<h1>Welcome, ' . $_SESSION['username'] . '!</h1>';

}
else {
	echo '<h1>Welcome, Guest!</h1>';
}?>
        
    
</div></h3>
<hr data-aos="zoom-out-up" data-aos-duration="1500">
</div>

<!-- Main -->
<span>
<main style="margin: auto;" class="main-header" style="overflow-y: hidden;" >

<!-- Item -->
<section class="" data-aos="fade-up-right" data-aos-duration="1500" style="overflow-y: hidden;">
    
    <div data-aos="fade-up"
     data-aos-anchor-placement="top-bottom" data-aos-duration="3000" style="float: left;width:50%; margin:auto;" id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel"
  data-interval="9000">
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img class="d-block w-100 thumbnail" src="./images/banner.jpg" alt="spirits">
    </div>
    <div style="float: left; width: 100%" class="carousel-item">
      <img class="d-block w-100 thumbnail" src="./images/banner2.jpg" alt="refrigerator">
    </div>
    <div style="float: left; width: 100%" class="carousel-item">
      <img class="d-block w-100 thumbnail" src="./images/banner3.jpg" alt="friends laughing">
    </div>
    <!-- <div style="float: left; width: 100%" class="carousel-item">
      <img class="d-block w-100 thumbnail" src="./images/banner4.jpg" alt="whiskey on the rocks">
    </div> -->
</div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere doloribus at officiis commodi iusto alias rem soluta, saepe nobis placeat, repudiandae, veritatis mollitia non inventore voluptatum beatae omnis praesentium. Repellat. </p>    
           
</section>
</main>
</span>
        <!-- <h1 style="text-align: center;">Welcome<br><br><br><br></h1> -->
        </div>        
    </body>
    <?php include "./footer.php" ?>