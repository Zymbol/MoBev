<?php 
error_reporting(E_ALL);
include "connect.php";?>
<div data-aos="zoom-out-down"
     data-aos-anchor-placement="top-bottom">
<?php
include "nav.php";?>
</div>
<?php
include "header.php";?>
<div class="container-md" style="text-align: center;">
    <hr data-aos="zoom-out-up" data-aos-duration="1500">
        <h3 data-aos="fade-left">BEER & HARD SELTZER</h3>
    <hr data-aos="zoom-out-up" data-aos-duration="1500">
</div>

<!-- Main -->
<main class="container">

<!-- First Item -->
<?php $result = $conn->query("SELECT * FROM BEER WHERE BEER_SKU=1"); 
while ($row = $result->fetch_assoc()):?>
    <section class="card">
        <img src="<?= $row['IMAGE']?>" alt="">
        <div>
        <h3><?=$row['BRAND']?></h3>
    </div>
    </section>
<?php 
endwhile; $result->free();
?>
<!-- Second Item -->
<?php $result = $conn->query("SELECT * FROM BEER WHERE BEER_SKU=2"); 
while ($row = $result->fetch_assoc()):?>
    <section class="card">
        <img src="<?= $row['IMAGE']?>" alt="">
        <div>
        <h3><?=$row['BRAND'] . " " . $row['LINE'] . " ". $row['TYPE']?> </h3>
    </div>
    </section>
<?php 
endwhile; $result->free();
?>

<!-- Third Item -->
<?php $result = $conn->query("SELECT * FROM BEER WHERE BEER_SKU=3"); 
while ($row = $result->fetch_assoc()):?>
    <section class="card">
        <img src="<?= $row['IMAGE']?>" alt="">
        <div>
        <h3><?=$row['BRAND']?></h3>
    </div>
    </section>
<?php 
endwhile; $result->free();
?>

<!-- Fourth Item -->
<?php $result = $conn->query("SELECT * FROM BEER WHERE BEER_SKU=4"); 
while ($row = $result->fetch_assoc()):?>
    <section class="card">
        <img src="<?= $row['IMAGE']?>" alt="">
        <div>
        <h3><?=$row['BRAND']?></h3>
    </div>
    </section>
<?php 
endwhile; $result->free();
?>

<!-- Fifth Item -->
<?php $result = $conn->query("SELECT * FROM BEER WHERE BEER_SKU=5"); 
while ($row = $result->fetch_assoc()):?>
    <section class="card">
        <img src="<?= $row['IMAGE']?>" alt="">
        <div>
        <h3><?=$row['BRAND']?></h3>
    </div>
    </section>
<?php 
endwhile; $result->free();
?>

<!-- Sixth Item -->
<?php $result = $conn->query("SELECT * FROM BEER WHERE BEER_SKU=6"); 
while ($row = $result->fetch_assoc()):?>
    <section class="card">
        <img src="<?= $row['IMAGE']?>" alt="">
        <div>
        <h3><?=$row['BRAND']?></h3>
    </div>
    </section>
<?php 
endwhile; $result->free();
?>
</main>
<div style="bottom: 0; width:100%; position: fixed;" data-aos="zoom-out-up"
     data-aos-anchor-placement="top-bottom">
    <?php include "./footer.php";?>
    </div>
