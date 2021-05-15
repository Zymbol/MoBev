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
	input[type="text"], input[type="number"], select, textarea {
		width: 100%;
	}
</style>

<h1>Product Admin Page</h1>

<table>
	<form method="get">
		<tr>
			<td><label for="id">Wines</label></td>
			<td><select name="id" onchange="this.form.submit();">
					<option value="0" 
					<?php 
					if ($id == 0) 
						print "selected";?>>Select a Wine</option>
					<?php foreach ($rows as $row): ?>
					<option value="<?= $row['WINE_ID']; ?>" <?php if ($id == $row['WINE_ID']) print "selected"; ?>><?= $row['BRAND']; ?></option>
					<?php endforeach; ?>
				</select></td>
		</tr>
	</form>
	<form method="post">
		<input type="hidden" name="id" value="<?= (isset($item) ? $item['id'] : ""); ?>">
		<tr>
			<td><label for="name">Name</label></td>
			<td><input type="text" name="name" value="<?= (isset($item) ? $item['name'] : ""); ?>"></td>
		</tr>
		<tr>
			<td><label for="price">Price</label></td>
			<td><input type="text" name="price" value="<?= (isset($item) ? $item['price'] : ""); ?>"></td>
		</tr>
		<tr>
			<td><label for="rating">Rating</label></td>
			<td><input type="number" name="rating" value="<?= (isset($item) ? $item['rating'] : ""); ?>" min="0" max="10"></td>
		</tr>
		<tr>
			<td><label for="stock">Stock</label></td>
			<td><select name="stock">
					<option>Select a Value</option>
					<option value="0" <?php if (isset($item) && $item['stock'] == 0) print "selected"; ?>>Out of Stock</option>
					<option value="1" <?php if (isset($item) && $item['stock'] == 1) print "selected"; ?>>In Stock</option>
				</select></td>
		</tr>
		<tr>
			<td><label for="description">Description</label></td>
			<td><textarea name="description"><?= (isset($item) ? $item['description'] : ""); ?></textarea></td>
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