<div class="container-md">
<?php 
error_reporting(E_ALL);
include "connect.php";
include "nav2.php";
include "header.php";?>
<div >
<div class="container-md" style="text-align: center;"><hr data-aos="my-animation2" 
     data-aos-duration="2500"  ><h3 data-aos="flip-up" 
     data-aos-duration="2500">Zynthesis Old Vine Zinfandel</h3>
     <hr data-aos="my-animation"data-aos-duration="2500"></div>
<?php $result = $conn->query("SELECT * FROM WINE WHERE WINE_ID=4"); ?>
<form method="POST">
<?php while ($row = $result->fetch_assoc()): ?>    
    <div class="container card2" style="margin:auto">
        <img style="margin: auto; width:auto" class="thumbnail" src=<?= $row['IMAGE'] ?>>
        <div class="card-body">
            <p class="card-text" >
            <strike style="color:red">$24.99</strike> $<?=number_format($row['PRICE'], 2) ?><br>
                <b>Vintage</b> <?=$row['VINTAGE'] ?><br>
                <b>Alcohol Content:</b> <?=number_format($row['ALC_CONTENT'], 2) ?>%</b></p><hr> 
                 <p><?= $row['DESCRIPTION']?><br> </p>
                          
            
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