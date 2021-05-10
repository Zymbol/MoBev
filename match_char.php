<form method="POST">
<div class="container-md">
<?php 
error_reporting(E_ALL);
include "connect.php";
include "nav.php";
include "header.php";?>
<div class="container-md" style="display: inline-block;">
<div class="container-md" style="text-align: center;"><hr><h3>Matchbook Reserve Chardonnay</h3><hr></div>
<?php $result = $conn->query("SELECT * FROM WINE WHERE WINE_ID=4"); ?>
<form method="POST">
<?php while ($row = $result->fetch_assoc()): ?>    
    <div class="container text-center" style="margin:auto">
        <img style="margin: auto; width:auto" class="thumbnail" src=<?= $row['IMAGE'] ?>>
        <div class="card-body">
            <!-- <h3 class="card-title text-center"><?=$row['BRAND']. " ". $row['LINE'] . " " . $row['TYPE']?></h3> -->
            <p class="card-text text-center">
                <strike style="color:red">$25.99</strike> $<?=number_format($row['PRICE'], 2) ?><br>
                <b>Vintage</b> <?=$row['VINTAGE'] ?><br>
                <b>Alcohol Content:</b> <?=number_format($row['ALC_CONTENT'], 2) ?>%<br><br>
                </b> <?= $row['DESCRIPTION']?><br>                
            </p>
            <div class="text-center">
                <a href="#!" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>         
    </div>
        <!-- </div> -->
    </div>
    </form>
<?php endwhile;
    $result->free();?>