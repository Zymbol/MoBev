<div class="container-md">
<form method="POST">
<?php 
error_reporting(E_ALL);
include "connect.php";
include "nav.php";
include "header.php";?>

<div data-aos-anchor-placement="top-bottom" class="container-md" style="text-align: center;">
     <hr data-aos="my-animation" 
     data-aos-duration="2500">
     <h3 data-aos="flip-up" 
     data-aos-duration="2500">Bookers Limited Edition<br>Rye Whiskey</h3><hr data-aos="my-animation2" 
     data-aos-duration="2500"></div>
<?php $result = $conn->query("SELECT * FROM SPIRIT WHERE SPIRIT_SKU=3"); ?>
<form method="POST">
<?php while ($row = $result->fetch_assoc()): ?>    
    <div class="container card" style="margin:auto">
        <img style="margin: auto; width:auto" class="thumbnail" src=<?= $row['IMAGE'] ?>>
        <div class="card-body">
        <p class="card-text">
                <strike style="color:red">$<?=$row['OLD_PRICE']?></strike> $<?=number_format($row['PRICE'], 2) ?><br>
                <b>Proof: </b> <?=$row['PROOF'] ?></p><hr>
                <p>               
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
    
    </form>
</div>
<?php endwhile;
    $result->free();
    include "./footer.php";?>