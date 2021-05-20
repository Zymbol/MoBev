<?php
include "header.php";
include "nav.php";
$eUsernameErr = $password_error =  "";
$eUsername = $password = "";

require_once "connect.php";

session_start();

//var_dump($_SESSION);

function data_input($data) {
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    header("Location: home.php");
	
}

if (isset($_POST) && !empty($_POST)) {
    $valid = true;
    $eUsername = htmlspecialchars($_POST['eusername']);
    $password = htmlspecialchars($_POST['password']);

    

    if (empty($_POST["eusername"])) {
        $eUsername = "Username is required";
        $valid = false;
        $errors = true;
    } else {
        $eUsername = data_input($_POST["eusername"]);
    
    }

    // if (!preg_match("/^[a-zA-Z-' ]*$/", $eUsername)) {
    //     $eUsernameErr = "Please only use letters for your username";
    //     $valid = false;
    //     $errors = true;
    // }

    if (empty($_POST["password"])) {
        $password = "Please enter a password";
        $valid = false;
        $error = true;
    } else {
        $password = data_input($_POST["password"]);
    
    }

    if (!preg_match("/^[a-zA-Z-' ]*$/", $password)) {
        $password_error = "Please only use letters for your password";
        $valid = false;
        $error = true;
    }
    
    
    $stmt = $conn->prepare("SELECT * FROM EMPLOYEE WHERE E_USERNAME = ?");
    $stmt->bind_param("s", $eUsername);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
		$row = $result -> fetch_all(MYSQLI_ASSOC);
        $_SESSION['eusername']=$eUsername;
		// echo $password;
		// echo $row[0]['password'];
		// if (password_verify($password, $row[0]['password'])){
			$_SESSION['logged_in'] = true;
			header("Location: home.php");
			echo "Welcome";
		// }
    }
    $result->free();
    }
    
//var_dump($_SESSION);

?>
<?php if (!isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == false): ?>
    <nav>
    <h1>Login</h1>
</nav>
<form class="signup" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type="text" name="eusername" placeholder="Username" <?php if($errors == true){echo 'style="border:1px solid red; "'; }?>/>
    <span class="error"><?php echo $eUsernameErr;?></span>
    <br><br>
    <input type="password" name="password" placeholder="Password" <?php if($error == true){echo 'style="border:1px solid red; "'; }?>/>
    <span class="error"><?php echo $password_error;?></span>
    <br><br>
    <input class="button button1" type="submit" value="Login"/>
</form>
<?php else: ?>
<h1>You're already logged in</h1>
<?php endif; include "./footer.php"; ?>
</html>