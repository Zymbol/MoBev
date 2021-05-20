<style>
	input[type="text"], input[type="number"], select{
		width: 100%;
		color: #CFD8DC;
	}
	textarea {
		width: 151%;
	}
	label, a {
		color: #CFD8DC;
	}
	td {
		padding-right: 3em;
	}
  button {
    margin-bottom: 3rem;
    background: #202020;
    color: #CFD8DC;
    font-family: 'Cinzel', serif;
    padding: 2rem;
    
  }
	
</style>
<body>
<div class="container-md">

<div class="container-md">
<?php 
session_start();
$username = $_SESSION["usernname"];
$eUsername = $_SESSION["eusername"];
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
    <a href="#wine"><button  style="text-align:center; margin-bottom:2rem; background: #202020;
    color: #CFD8DC; box-shadow: 0 0 .2rem #fff,
    0 0 .2rem #fff,
    0 0 1rem #d10303,
    0 0 0.8rem #d10303,
    0 0 2.8rem #d10303,
    inset 0 0 1.3rem #d10303;
    " class="btn " >WINE</button></a>
<a href="#spirit"><button  style="text-align:center; margin-bottom:2rem; background: #202020;
    color: #CFD8DC; box-shadow: 0 0 .2rem #fff,
    0 0 .2rem #fff,
    0 0 1rem #2aafc0,
    0 0 0.8rem #2aafc0,
    0 0 2.8rem #2aafc0,
    inset 0 0 1.3rem #2aafc0;" class="btn" >SPIRITS</button></a>
<a href="#beer"><button  style="text-align:center; margin-bottom:2rem; background: #202020;
    color: #CFD8DC; box-shadow: 0 0 .2rem #fff,
    0 0 .2rem #fff,
    0 0 1rem #090deb,
    0 0 0.8rem #090deb,
    0 0 2.8rem #090deb,
    inset 0 0 1.3rem #090deb; " class="btn ">BEER</button></a>
    <div class="container-lg">
                <?php 
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
	if(isset($_SESSION['username'])){
    echo '<h1>Welcome, ' . $_SESSION['username'] . '!</h1>';
  }
  else if(isset($_SESSION['eusername'])) {
    echo '<h1>Welcome, ' . $_SESSION['eusername'] . '!</h1>';
  }
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
     data-aos-anchor-placement="top-bottom" data-aos-duration="3000" style=" margin:auto;" id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel"
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
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php

// Establish connection
// include "connect.php";
// include "nav.php";
// include "header.php";

$rows = [];
$result = $conn->query("SELECT * FROM WINE");
if ($result) {
	$rows = $result->fetch_all(MYSQLI_ASSOC);
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
	// Fetch product
	$id = htmlspecialchars($_GET['id']);
	$result = $conn->query("SELECT * FROM WINE WHERE WINE_ID = ${id}");
	if ($result) {
		$item = $result->fetch_assoc();
	}
}

if (isset($_POST) && !empty($_POST)) {
	var_dump($_POST);
	// Process insert, update, and delete
}

?>


<div class="container-md">
<hr>
<h3 style="text-align: center;">Wines</h3>
<hr>

<div style="padding: 3rem;" id="wine" class="">
<table style="margin-top: 2rem; padding:2rem" class="card2 center-text" >
	<form method="get" >
		<div class="container-md">
		<tr style="margin-top: 2rem;">
			<td><label for="id">Wine</label></td>
			<td><select style="margin-top:2rem; color: #CFD8DC;" class="form-select form-select-lg mb-3 card2" name="id" onchange="this.form.submit();">
					<option value="0" 
					<?php 
					if ($id == 0) 
						print "selected";?>>Select a Wine</option>
					<?php foreach ($rows as $row): ?>
					<option value="<?= $row['WINE_ID']; ?>" <?php if ($id == $row['WINE_ID']) print "selected"; ?>><?= $row['BRAND']; ?></option>
					<?php endforeach; ?>
				</select></td>
		</tr>
		</div>
	</form>
	<form method="post">
		<input type="hidden" name="id" value="<?= (isset($item) ? $item['WINE_ID'] : ""); ?>">
		<tr>
			<td><label id="wineCenter" for="price">Price</label></td>
			<td><input style="margin-top:2rem; color: #CFD8DC;" class="form-select form-select-lg mb-3 card2" type="text" name="price" value="<?= (isset($item) ? "$". $item['PRICE'] : ""); ?>"></td>
		</tr>
		<tr>
			<td><label for="href">Link</label></td>
			<td><a style="margin-top:2rem; color: #CFD8DC;" class="form-select form-select-lg mb-3 card2" href="<?=(isset($item) ? $item['LINK'] : "")?>">Product Page</a></td>
			<!-- <td><input type="text" name="href" value="<?= (isset($item) ? $item['LINK'] : ""); ?>" min="0" max="10"></td> -->
		</tr>
		<tr>
			<td><label for="stock">Quantity</label></td>
			<td><select style="margin-top:2rem; color: #CFD8DC;" class="form-select form-select-lg mb-3 card2" name="stock">
					<option>Select a Value</option>
					<option value="0" <?php if (isset($item) && $item['STOCK'] == 0) print "selected"; ?>>Out of Stock</option>
					<option aria-valuemin="1" <?php if (isset($item) && $item['STOCK'] >= 1) print "selected"; ?>><?= $row['STOCK']?> in Stock</option>
				</select></td>
		</tr>
		<tr>
			<td><label for="description">Description</label></td>
			<td style="margin-left:3em"><textarea style="width: 151%; overflow:hidden; margin-top:2rem; margin-bottom:2rem; color: #CFD8DC;" class="form-control form-select form-select-lg mb-3 card2"
			rows="5" name="description"><?= (isset($item) ? $item['DESCRIPTION'] : ""); ?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<!-- DON'T LEAVE DEFAULT SUBMIT BUTTON -->
			<!-- Show "Insert" button for default view -->
			<!-- Show "Update" button if a product has been chosen -->
			<!-- Show "Delete" button if a product has been chosen -->
			<!--
			<td><input type="submit" name="action" value="Insert"></td>
			<td><input type="submit" name="action" value="Update"></td>
			<td><input type="submit" name="action" value="Delete"></td>
			-->
		</tr>
	</form>
</table>


	
</div> 

           
</section>
</main>
</span>
        <!-- <h1 style="text-align: center;">Welcome<br><br><br><br></h1> -->
        </div>        
    </body>
          </div>
          </div></div>


<!----------------- Spirit--------------------------------------------------------------- -->
<?php
$rows = [];
$result = $conn->query("SELECT * FROM SPIRIT");
if ($result) {
	$rows = $result->fetch_all(MYSQLI_ASSOC);
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
	// Fetch product
	$id = htmlspecialchars($_GET['id']);
	$result = $conn->query("SELECT * FROM SPIRIT WHERE SPIRIT_SKU = ${id}");
	if ($result) {
		$item = $result->fetch_assoc();
	}
}

if (isset($_POST) && !empty($_POST)) {
	var_dump($_POST);
	// Process insert, update, and delete
}

?>


<div class="container-md">
<hr>
<h3 style="text-align: center;">Spirits</h3>
<hr>

<div style="padding: 3rem;" id="spirit" class="">
<table style="margin-top: 2rem; padding:2rem" class="card center-text" >
	<form method="get" >
		<div class="container-md">
		<tr style="margin-top: 2rem;">
			<td><label for="id">Spirit</label></td>
			<td><select style="margin-top:2rem; color: #CFD8DC;" class="form-select form-select-lg mb-3 card" name="id" onchange="this.form.submit();">
					<option value="0" 
					<?php 
					if ($id == 0) 
						print "selected";?>>Select a Spirit</option>
					<?php foreach ($rows as $row): ?>
					<option value="<?= $row['SPIRIT_SKU']; ?>" <?php if ($id == $row['SPIRIT_SKU']) print "selected"; ?>><?= $row['BRAND']; ?></option>
					<?php endforeach; ?>
				</select></td>
		</tr>
		</div>
	</form>
	<form method="post">
		<input type="hidden" name="id" value="<?= (isset($item) ? $item['SPIRIT_SKU'] : ""); ?>">
		<tr>
			<td><label id="wineCenter" for="price">Price</label></td>
			<td><input style="margin-top:2rem; color: #CFD8DC;" class="form-select form-select-lg mb-3 card" type="text" name="price" value="<?= (isset($item) ? "$". $item['PRICE'] : ""); ?>"></td>
		</tr>
		<tr>
			<td><label for="href">Link</label></td>
			<td><a style="margin-top:2rem; color: #CFD8DC;" class="form-select form-select-lg mb-3 card" href="<?=(isset($item) ? $item['LINK'] : "")?>">Product Page</a></td>
			<!-- <td><input type="text" name="href" value="<?= (isset($item) ? $item['LINK'] : ""); ?>" min="0" max="10"></td> -->
		</tr>
		<tr>
			<td><label for="stock">Quantity</label></td>
			<td><select style="margin-top:2rem; color: #CFD8DC;" class="form-select form-select-lg mb-3 card" name="stock">
					<option>Select a Value</option>
					<option value="0" <?php if (isset($item) && $item['STOCK'] == 0) print "selected"; ?>>Out of Stock</option>
					<option aria-valuemin="1" <?php if (isset($item) && $item['STOCK'] >= 1) print "selected"; ?>><?= $row['STOCK']?> in Stock</option>
				</select></td>
		</tr>
		<tr>
			<td><label for="description">Description</label></td>
			<td style="margin-left:3em"><textarea style="width: 151%; overflow:hidden; margin-top:2rem; margin-bottom:2rem; color: #CFD8DC;" class="form-control form-select form-select-lg mb-3 card"
			rows="5" name="description"><?= (isset($item) ? $item['DESCRIPTION'] : ""); ?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<!-- DON'T LEAVE DEFAULT SUBMIT BUTTON -->
			<!-- Show "Insert" button for default view -->
			<!-- Show "Update" button if a product has been chosen -->
			<!-- Show "Delete" button if a product has been chosen -->
			<!--
			<td><input type="submit" name="action" value="Insert"></td>
			<td><input type="submit" name="action" value="Update"></td>
			<td><input type="submit" name="action" value="Delete"></td>
			-->
		</tr>
	</form>
</table>


	
</div> 

           
</section>
</main>
</span>
        <!-- <h1 style="text-align: center;">Welcome<br><br><br><br></h1> -->
        </div>        
    </body>
          </div>
          </div></div>
<!-- BEER Search----------------------------------------------------------------------- -->

<?php
$rows = [];
$result = $conn->query("SELECT * FROM BEER");
if ($result) {
	$rows = $result->fetch_all(MYSQLI_ASSOC);
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
	// Fetch product
	$id = htmlspecialchars($_GET['id']);
	$result = $conn->query("SELECT * FROM BEER WHERE BEER_SKU = ${id}");
	if ($result) {
		$item = $result->fetch_assoc();
	}
}

if (isset($_POST) && !empty($_POST)) {
	var_dump($_POST);
	// Process insert, update, and delete
}

?>


<div class="container-md">
<hr>
<h3 style="text-align: center;">BEER</h3>
<hr>

<div style="padding: 3rem;" class="">
<table style="margin-top: 2rem; padding:2rem" class="card3 center-text" >
	<form method="get" >
		<div class="container-md">
		<tr style="margin-top: 2rem;">
			<td  id="beer"><label for="id">BEER</label></td>
			<td><select style="margin-top:2rem; color: #CFD8DC;" class="form-select form-select-lg mb-3 card3" name="id" onchange="this.form.submit();">
					<option value="0" 
					<?php 
					if ($id == 0) 
						print "selected";?>>Select a MoBev</option>
					<?php foreach ($rows as $row): ?>
					<option value="<?= $row['BEER_SKU']; ?>" <?php if ($id == $row['BEER_SKU']) print "selected"; ?>><?= $row['BRAND']; ?></option>
					<?php endforeach; ?>
				</select></td>
		</tr>
		</div>
	</form>
	<form method="post">
		<input type="hidden" name="id" value="<?= (isset($item) ? $item['BEER_SKU'] : ""); ?>">
		<tr>
			<td><label for="price">Price</label></td>
			<td><input style="margin-top:2rem; color: #CFD8DC;" class="form-select form-select-lg mb-3 card3" type="text" name="price" value="<?= (isset($item) ? "$". $item['PRICE'] : ""); ?>"></td>
		</tr>
		<tr>
			<td><label for="href">Link</label></td>
			<td><a style="margin-top:2rem; color: #CFD8DC;" class="form-select form-select-lg mb-3 card3" href="<?=(isset($item) ? $item['LINK'] : "")?>">Product Page</a></td>
			<!-- <td><input type="text" name="href" value="<?= (isset($item) ? $item['LINK'] : ""); ?>" min="0" max="10"></td> -->
		</tr>
		<tr>
			<td><label for="stock">Quantity</label></td>
			<td><select style="margin-top:2rem; color: #CFD8DC;" class="form-select form-select-lg mb-3 card3" name="stock">
					<option>Select a Value</option>
					<option value="0" <?php if (isset($item) && $item['STOCK'] == 0) print "selected"; ?>>Out of Stock</option>
					<option aria-valuemin="1" <?php if (isset($item) && $item['STOCK'] >= 1) print "selected"; ?>><?= $row['STOCK']?> in Stock</option>
				</select></td>
		</tr>
		<tr >
			<td><label for="description">Description</label></td>
			<td style="margin-left:3em"><textarea style="width: 151%; overflow:hidden; margin-top:2rem; margin-bottom:2rem; color: #CFD8DC;" class="form-control form-select form-select-lg mb-3 card3"
			rows="5" name="description"><?= (isset($item) ? $item['DESCRIPTION'] : ""); ?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<!-- DON'T LEAVE DEFAULT SUBMIT BUTTON -->
			<!-- Show "Insert" button for default view -->
			<!-- Show "Update" button if a product has been chosen -->
			<!-- Show "Delete" button if a product has been chosen -->
			<!--
			<td><input type="submit" name="action" value="Insert"></td>
			<td><input type="submit" name="action" value="Update"></td>
			<td><input type="submit" name="action" value="Delete"></td>
			-->
		</tr>
	</form>
</table>


	
</div> 

           
</section>
</main>
</span>
        <!-- <h1 style="text-align: center;">Welcome<br><br><br><br></h1> -->
        </div>        
    </body>
          </div>
          </div></div>
          <footer>

 <?php include "./footer.php";?>
</footer>