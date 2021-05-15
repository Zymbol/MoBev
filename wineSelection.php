<div class="container-md">
<?php 
error_reporting(E_ALL);
include "connect.php";
?>
<div data-aos="fade-up"
     data-aos-anchor-placement="top-bottom"><?php include "nav.php";?></div>
<?php
include "header.php";?>
<div class="container-md" style="display: inline-block;">
<div class="container-md" style="text-align: center;"><hr><h3 data-aos="fade-down">WINE LIST</h3><hr></div>
<?php $result = $conn->query("SELECT * FROM WINE WHERE WINE_ID=1"); ?>
<form class="container text-center" method="POST">
<?php while ($row = $result->fetch_assoc()): ?>          
    <div class="carousel-inner py-4" data-aos="zoom-out-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img style="thumbnail" src=<?= $row['IMAGE'] ?>>
                            <div class="card-body">
                            <h3 class="card-title text-center"><?=$row['BRAND']. " ". $row['LINE'] . " " . $row['TYPE']?></h3>
                            <p class="card-text text-center">
                                <strike style="color:red">$29.99</strike> $<?=number_format($row['PRICE'], 2) ?><br>
                                <b>Vintage</b> <?=$row['VINTAGE'] ?><br>
                                <!-- <b>Alcohol Content:</b> <?=number_format($row['ALC_CONTENT'], 2) ?>%<br><br> -->
                                <!-- </b> <?= $row['DESCRIPTION']?><br> -->
                                
                            </p><div class="text-center">
                                <a href="./double_barrel.php" class="btn btn-primary">View Item</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
<?php endwhile; $result->free();?>
<?php $result = $conn->query("SELECT * FROM WINE WHERE WINE_ID=2"); ?>
<?php while ($row = $result->fetch_assoc()): ?>          
    <div class="carousel-inner py-4" data-aos="zoom-out-down">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img style="thumbnail" src=<?= $row['IMAGE'] ?>>
                            <div class="card-body">
                            <h3 class="card-title text-center"><?=$row['BRAND']. " ". $row['LINE'] . " " . $row['TYPE']?></h3>
                            <p class="card-text text-center">
                                <strike style="color:red">$25.99</strike> $<?=number_format($row['PRICE'], 2) ?><br>
                                <b>Vintage</b> <?=$row['VINTAGE'] ?><br>
                                <!-- <b>Alcohol Content:</b> <?=number_format($row['ALC_CONTENT'], 2) ?>%<br><br> -->
                                <!-- </b> <?= $row['DESCRIPTION']?><br> -->
                                
                            </p><div class="text-center">
                                <a href="./jam_jar.php" class="btn btn-primary">View Item</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
<?php endwhile; $result->free();?>
    <?php $result = $conn->query("SELECT * FROM WINE WHERE WINE_ID=3"); ?>
<?php while ($row = $result->fetch_assoc()): ?>          
    <div class="carousel-inner py-4" data-aos="zoom-out-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img style="thumbnail" src=<?= $row['IMAGE'] ?>>
                            <div class="card-body">
                            <h3 class="card-title text-center"><?=$row['BRAND']. " ". $row['LINE'] . " " . $row['TYPE']?></h3>
                            <p class="card-text text-center">
                            <strike style="color:red">$31.99</strike> $<?=number_format($row['PRICE'], 2) ?><br>
                                <b>Vintage</b> <?=$row['VINTAGE'] ?><br>
                                <!-- <b>Alcohol Content:</b> <?=number_format($row['ALC_CONTENT'], 2) ?>%<br><br> -->
                                <!-- </b> <?= $row['DESCRIPTION']?><br> -->
                                
                            </p><div class="text-center">
                                <a href="./zyn_zin.php" class="btn btn-primary">View Item</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
<?php endwhile;
    $result->free();?>
    <?php $result = $conn->query("SELECT * FROM WINE WHERE WINE_ID=4"); ?>
<?php while ($row = $result->fetch_assoc()): ?>          
    <div class="carousel-inner py-4" data-aos="zoom-out-down">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img style="thumbnail" src=<?= $row['IMAGE'] ?>>
                            <div class="card-body">
                            <h3 class="card-title text-center"><?=$row['BRAND']. " ". $row['LINE'] . " " . $row['TYPE']?></h3>
                            <p class="card-text text-center">
                                <strike style="color:red">$25.99</strike> $<?=number_format($row['PRICE'], 2) ?><br>
                                <b>Vintage</b> <?=$row['VINTAGE'] ?><br>
                                <!-- <b>Alcohol Content:</b> <?=number_format($row['ALC_CONTENT'], 2) ?>%<br><br> -->
                                <!-- </b> <?= $row['DESCRIPTION']?><br> -->
                                
                            </p><div class="text-center">
                                <a href="./match_char.php" class="btn btn-primary">View Item</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
<?php endwhile;
    $result->free();?>
    <?php $result = $conn->query("SELECT * FROM WINE WHERE WINE_ID=5"); ?>
<?php while ($row = $result->fetch_assoc()): ?>          
    <div class="carousel-inner py-4" data-aos="zoom-out-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img style="thumbnail" src=<?= $row['IMAGE'] ?>>
                            <div class="card-body">
                            <h3 class="card-title text-center"><?=$row['BRAND']. " ". $row['LINE'] . " " . $row['TYPE']?></h3>
                            <p class="card-text text-center">
                                <strike style="color:red">$31.99</strike> $<?=number_format($row['PRICE'], 2) ?><br>
                                <b>Vintage</b> <?=$row['VINTAGE'] ?><br>
                                <!-- <b>Alcohol Content:</b> <?=number_format($row['ALC_CONTENT'], 2) ?>%<br><br> -->
                                <!-- </b> <?= $row['DESCRIPTION']?><br> -->
                                
                            </p><div class="text-center">
                                <a href="./gruet.php" class="btn btn-primary">View Item</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
<?php endwhile;
    $result->free();?>
    <?php $result = $conn->query("SELECT * FROM WINE WHERE WINE_ID=6"); ?>
<?php while ($row = $result->fetch_assoc()): ?>          
    <div class="carousel-inner py-4" data-aos="zoom-out-down">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img style="thumbnail" src=<?= $row['IMAGE'] ?>>
                            <div class="card-body">
                            <h3 class="card-title text-center"><?=$row['BRAND']. " ". $row['LINE'] . " " . $row['TYPE']?></h3>
                            <p class="card-text text-center">
                                <strike style="color:red">$25.99</strike> $<?=number_format($row['PRICE'], 2) ?><br>
                                <b>Vintage</b> <?=$row['VINTAGE'] ?><br>
                                <!-- <b>Alcohol Content:</b> <?=number_format($row['ALC_CONTENT'], 2) ?>%<br><br> -->
                                <!-- </b> <?= $row['DESCRIPTION']?><br> -->
                                
                            </p><div class="text-center">
                                <a href="./fog_blanc.php" class="btn btn-primary">View Item</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
<?php endwhile;
    $result->free();?>
	<hr>
        </form>
</div>

    <?php include './footer.php';
    ?>