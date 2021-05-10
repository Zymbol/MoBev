<?php 
include "./nav.php";
include "./header.php";
include "./connect.php";
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

<?php $result = $conn->query("SELECT * FROM Warehouse"); ?>

<div class="container mt-3" style="text-align: center;">
  <h2 style="text-align:center;">About Us</h2><hr>
  <h4>MoBev! offers a spirited variety of <i>Mo</i> libations for Less! </h4>  
        <br><p>CEO and founder Zak Scholefield started this fake company from the ground up. He is a
        visionary who takes a good time seriously. You may be asking yourself, "Wait, isn't
        there already a Bev<i>Mo!</i>?" And Zak's response is, "I'm going to need you to get all-the-way off
        my back about this." 
        <br>
        </p><br>
  </div>
  <!-- <hr><p>We have three warehouses absolutely packed full of everything you could possibly need to in Bakersfield to ensure fast delivery directly to your home.</p> -->
  <!-- <img style="width:40vh" src="./images/warehouse.jpg"><br>
  <?php while ($row = $result->fetch_assoc()):?>
    <?= $row['W_Address'] ?><br>
    <img class="thumbnail" src="<?= $row['W_Image'] ?>"><br>
    <?php endwhile;?> -->
</div>


