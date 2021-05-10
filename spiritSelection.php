<div class="container-md">
<?php 
error_reporting(E_ALL);
include "connect.php";
include "nav.php";
include "header.php";?>
<div class="container-md" style="display: inline-block;">
<div class="container-md" style="text-align: center;"><hr><h3>SPIRITS</h3><hr></div>
<?php $result = $conn->query("SELECT * FROM SPIRIT WHERE SPIRIT_SKU=1"); ?>
<form class="container text-center" method="POST">
<?php while ($row = $result->fetch_assoc()): ?>          
    <div class="carousel-inner py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img style="thumbnail" src=<?= $row['IMAGE'] ?>>
                            <div class="card-body">
                            <h3 class="card-title text-center"><?=$row['BRAND']. " ". $row['LINE'] . " " . $row['TYPE']?></h3>
                            <p class="card-text text-center">
                                <strike style="color:red">$31.99</strike> $<?=number_format($row['PRICE'], 2) ?><br>
                                <!-- <b>Proof:</b> <?=$row['PROOF']?>%<br><br> -->
                                <!-- </b> <?= $row['DESCRIPTION']?><br> -->
                                
                            </p><div class="text-center">
                                <a href="./jameson.php" class="btn btn-primary">View Item</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
<?php endwhile; $result->free();?>
<?php $result = $conn->query("SELECT * FROM SPIRIT WHERE SPIRIT_SKU=2"); ?>
<form class="container text-center" method="POST">
<?php while ($row = $result->fetch_assoc()): ?>          
    <div class="carousel-inner py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img style="thumbnail" src=<?= $row['IMAGE'] ?>>
                            <div class="card-body">
                            <h3 class="card-title text-center"><?=$row['BRAND']. " ". $row['LINE'] . " " . $row['TYPE']?></h3>
                            <p class="card-text text-center">
                                <strike style="color:red">$70.99</strike> $<?=number_format($row['PRICE'], 2) ?><br>
                                <!-- <b>Proof:</b> <?=$row['PROOF']?>%<br><br> -->
                                <!-- </b> <?= $row['DESCRIPTION']?><br> -->
                                
                            </p><div class="text-center">
                                <a href="./patron.php" class="btn btn-primary">View Item</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
<?php endwhile; $result->free();?>
<?php $result = $conn->query("SELECT * FROM SPIRIT WHERE SPIRIT_SKU=3"); ?>
<form class="container text-center" method="POST">
<?php while ($row = $result->fetch_assoc()): ?>          
    <div class="carousel-inner py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img style="thumbnail" src=<?= $row['IMAGE'] ?>>
                            <div class="card-body">
                            <h3 class="card-title text-center"><?=$row['BRAND']. " ". $row['LINE'] . " " . $row['TYPE']?></h3>
                            <p class="card-text text-center">
                                <strike style="color:red">$400.00</strike> $<?=number_format($row['PRICE'], 2) ?><br>
                                <!-- <b>Proof:</b> <?=$row['PROOF']?>%<br><br> -->
                                <!-- </b> <?= $row['DESCRIPTION']?><br> -->
                                
                            </p><div class="text-center">
                                <a href="./bookers.php" class="btn btn-primary">View Item</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
<?php endwhile; $result->free();?>
<?php $result = $conn->query("SELECT * FROM SPIRIT WHERE SPIRIT_SKU=4"); ?>
<form class="container text-center" method="POST">
<?php while ($row = $result->fetch_assoc()): ?>          
    <div class="carousel-inner py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img style="thumbnail" src=<?= $row['IMAGE'] ?>>
                            <div class="card-body">
                            <h3 class="card-title text-center"><?=$row['BRAND']. " ". $row['LINE'] . " " . $row['TYPE']?></h3>
                            <p class="card-text text-center">
                                <strike style="color:red">$38.40</strike> $<?=number_format($row['PRICE'], 2) ?><br>
                                <!-- <b>Proof:</b> <?=$row['PROOF']?>%<br><br> -->
                                <!-- </b> <?= $row['DESCRIPTION']?><br> -->
                                
                            </p><div class="text-center">
                                <a href="./fireball.php" class="btn btn-primary">View Item</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
<?php endwhile; $result->free();?>
<?php $result = $conn->query("SELECT * FROM SPIRIT WHERE SPIRIT_SKU=5"); ?>
<form class="container text-center" method="POST">
<?php while ($row = $result->fetch_assoc()): ?>          
    <div class="carousel-inner py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img style="thumbnail" src=<?= $row['IMAGE'] ?>>
                            <div class="card-body">
                            <h3 class="card-title text-center"><?=$row['BRAND']. " ". $row['LINE'] . " " . $row['TYPE']?></h3>
                            <p class="card-text text-center">
                                <strike style="color:red">$100.00</strike> $<?=number_format($row['PRICE'], 2) ?><br>
                                <!-- <b>Proof:</b> <?=$row['PROOF']?>%<br><br> -->
                                <!-- </b> <?= $row['DESCRIPTION']?><br> -->
                                
                            </p><div class="text-center">
                                <a href="./rammstein.php" class="btn btn-primary">View Item</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
<?php endwhile; $result->free();?>
<?php $result = $conn->query("SELECT * FROM SPIRIT WHERE SPIRIT_SKU=6"); ?>
<form class="container text-center" method="POST">
<?php while ($row = $result->fetch_assoc()): ?>          
    <div class="carousel-inner py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img style="thumbnail" src=<?= $row['IMAGE'] ?>>
                            <div class="card-body">
                            <h3 class="card-title text-center"><?=$row['BRAND']. " ". $row['LINE'] . " " . $row['TYPE']?></h3>
                            <p class="card-text text-center">
                                <strike style="color:red">$25.00</strike> $<?=number_format($row['PRICE'], 2) ?><br>
                                <!-- <b>Proof:</b> <?=$row['PROOF']?>%<br><br> -->
                                <!-- </b> <?= $row['DESCRIPTION']?><br> -->
                                
                            </p><div class="text-center">
                                <a href="./kraken.php" class="btn btn-primary">View Item</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
<?php endwhile; $result->free();?>
	<hr>
        </form>
</div>

    <?php include './footer.php';
    ?>