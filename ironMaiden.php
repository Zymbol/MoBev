<form method="POST">
<div data-aos="zoom-out-right"
     data-aos-anchor-placement="top-bottom" class="container-md">
<?php 
error_reporting(E_ALL);
include "connect.php";
include "nav.php";
include "header.php";?>
<div class="container-md" style="display: inline-block;">
<div class="container-md" style="text-align: center;"><hr><h3>IRON MAIDEN TROOPER</h3><hr></div>
<?php $result = $conn->query("SELECT * FROM BEER WHERE BEER_SKU=2"); ?>
<form method="POST">
<?php while ($row = $result->fetch_assoc()): ?>    
    <div class="container text-center" style="margin:auto">
        <img style="margin: auto; width:auto" class="thumbnail" src=<?= $row['IMAGE'] ?>>
        <div class="card-body">
            <p class="card-text text-center">
                <strike style="color:red">$<?=$row['OLD_PRICE']?></strike> $<?=number_format($row['PRICE'], 2) ?><br>
                <b>ABV: </b> <?=$row['ABV'] ?>%<br>
                <?= $row['SIZE']?><br>                
                </b> <?= $row['DESCRIPTION']?><br>                
            </p>
            <div class="text-center">
                <p>
                    <?= $row['STOCK']?> In Stock <br>
                </p>
                <a href="#!" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>         
    </div>
        <!-- </div> -->
    </div>
    </form>
<?php endwhile;
    $result->free();
    include "./footer.php";?>