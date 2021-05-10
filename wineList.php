<div class="container-md">
<?php 
error_reporting(E_ALL);
include "connect.php";
include "nav.php";
include "header.php";?>
<div class="container-md" style="display: inline-block;">
<div class="container-md" style="text-align: center;"><hr><h3>WINE LIST</h3><hr></div>
<?php
// SQL query
$result = $conn->query("SELECT * FROM WINE"); 
$i = 0;
// Establish the output variable
$dyn_table = '<table border="1" cellpadding="25">';
while ($row = $result->fetch_assoc()):{ 
    
    $img = $row["IMAGE"];
    $brand = $row["BRAND"];
    $line = $row['LINE'];
    $type = $row['TYPE'];
    $price = number_format($row['PRICE'], 2);
    $vintage = $row['VINTAGE'];
    $alc = number_format($row['ALC_CONTENT'], 2);
    $description = $row['DESCRIPTION'];

    
    if ($i % 2 == 0) { // if $i is divisible by our target number (in this case "3")
        $dyn_table .= '<tr><td>
        <div class="container" style="padding: 2em">
        <div class="card-group"><img style="thumbnail" src='. $img . '><br>' . 
        '<h3>' . $brand . ' ' . $line . ' ' . $type . '</h3><br>'.
        '<p class="card-text">' . 
        '$'. $price . '<br>' . 
        'Vintage ' . $vintage . '<br>' .
        'Alcohol Content ' . $alc . '<br><br>' .
        $description . '</p>' .
        '<a href="#!" class="btn btn-primary">Add to Cart</a>' .
        '</div></div></td>';
    } else {
        $dyn_table .= '<td>
        <div class="container" style="padding: 2em">
        <div class="card-group"><img style="thumbnail" src='. $img . '><br>' . 
        '<h3>' . $brand . ' ' . $line . ' ' . $type . '</h3><br>'.
        '<p class="card-text">' . 
        '$'. $price . '<br>' . 
        'Vintage ' . $vintage . '<br>' .
        'Alcohol Content ' . $alc . '<br><br>' .
        $description . '</p>' .
        '<a href="#!" class="btn btn-primary">Add to Cart</a>' .
        '</div></div></td>';
    }
    $i++;
}
endwhile;
$dyn_table .= '</tr></table>';
echo $dyn_table; ?>