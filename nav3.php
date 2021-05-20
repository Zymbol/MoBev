<?php session_start();
$username = $_SESSION['username'];
?>
<nav style="margin-top: 2rem; text-align: center; color: rgb(255,255,255);" class="neon3 neonText3 navbar navbar-expand-lg navbar-dark bg-dark">
    <a  href="./home.php"><img class="logo"src="./images/logo.png"></a>   
<button class=" neon3 navbar-toggler" type="button" data-toggle="collapse" 
    data-target="#main_nav" aria-controls="#main_nav" aria-expanded="false" 
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="main_nav">   
    <ul style="text-align:center;" class="navbar-nav mx-auto">
        <li class="nav-item active"><a href="./wineSelection.php">Our Wine Selection</a></li>        
        <!-- <li class="nav-item"><a href="./wineList.php">Wines</a></li> -->
        <li class="nav-item"><a href="./spiritSelection.php">Our Spirits</a></li>
        <li class="nav-item"><a href="./beerSelection.php">Our Beer & Hard Seltzers</a></li>
        <li class="nav-item"><a href="about.php">About</a></li>
        <?php 
            if (isset($username)) {
            echo "<li class='nav-item'><a href='./logout.php'>Logout</a></li>";
            echo "<li class='nav-item'><a href='./customerHome.php'>Hello, $username!</a></li>";
            

            }
            else {
                echo "<li class='nav-item'><a href='./login.php'>Login</a></li>";
                echo "<li class='nav-item'><a href='./signup.php'>Sign Up</a></li>";
                echo "<li class='nav-item'><a href='employeeLogin.php'>Employee Portal</a></li> ";
            }
            ?>
    </ul>  
</nav>