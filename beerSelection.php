<div class="container-md">
<?php 
error_reporting(E_ALL);
include "connect.php";
?>
<div data-aos="fade-up"
     data-aos-anchor-placement="top-bottom">
     <?php 
     include "nav3.php";?>
     </div>
<?php
include "header.php";?><main class="container" style="overflow-y: hidden;" >
<div class="container-md" style="text-align: center;">
    <hr data-aos="zoom-out-up" data-aos-duration="1500">
        <h3 data-aos="my-animation" data-aos-duration="2500">Beer & Hard Seltzers</h3>
    <hr data-aos="zoom-out-up" data-aos-duration="1500">
</div>
<!-- Item -->
<?php $result = $conn->query("SELECT * FROM BEER"); 
while ($row = $result->fetch_assoc()):?>
    <section class="card3" data-aos="zoom-out-up" data-aos-duration="1500" style="overflow-y: hidden;">
        <img src="<?= $row['IMAGE']?>" alt="">
        <div>
        <h3><?=$row['BRAND'] . " " . $row['LINE'] . "<br>" . $row['TYPE'] . "<br> (" . $row['SIZE'] . ")"?></h3>
        <p>
        <strike style="color:red">$<?=$row['OLD_PRICE']?></strike>  $<?=$row['PRICE']?><br>
            
        </p>
        <a href="<?= $row['LINK']?>" class="btn btn-primary">View Item</a>
    </div>
    </section>
<?php 
endwhile; $result->free();
?>

</main>
</div>
<?php include "./footer.php";?>