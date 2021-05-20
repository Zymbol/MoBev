<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php

// Establish connection
include "connect.php";
include "nav.php";
include "header.php";

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
	
</style>
<div class="container-md">
<hr>
<h3 style="text-align: center;">Product Admin Page</h3>
<hr>

<table style="margin-top: 2rem; padding:2rem" class="card center-text" >
	<form method="get" >
		<div class="container-md">
		<tr style="margin-top: 2rem;">
			<td><label for="id">Wine</label></td>
			<td><select style="margin-top:2rem; color: #CFD8DC;" class="form-select form-select-lg mb-3 card" name="id" onchange="this.form.submit();">
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
			<td><label for="price">Price</label></td>
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

<footer>
	<?php include "./footer.php";?>
</footer>
</div>
