<?php 
error_reporting(E_ALL);
include "connect.php";?>
<div data-aos="zoom-out-down"
     data-aos-anchor-placement="top-bottom">
<?php
include "nav.php";?>
</div>
<?php
include "header.php";
$result = $conn->query("SELECT * FROM SPIRIT WHERE SPIRIT_SKU=1"); 
while ($row = $result->fetch_assoc()):


?>
<div class="container-md" style="text-align: center;"><hr data-aos="zoom-out-up" data-aos-duration="1500"><h3 data-aos="fade-left">BEER</h3><hr data-aos="zoom-out-up" data-aos-duration="1500"></div>
<main class="container">
    <section class="card">
        <div>
        <h3><?=$row['BRAND']?></h3>
        </div>
    </section>
</main>
<?php 
endwhile; $result->free();
?>
<div style="bottom: 0; width:100%; position: fixed;" data-aos="zoom-out-up"
     data-aos-anchor-placement="top-bottom">
    <?php include "./footer.php";?>
    </div>
