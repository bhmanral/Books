<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

	<link rel="stylesheet"  href="style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="E:\WEB\css\bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Beginner&family=Mukta:wght@400&display=swap" rel="stylesheet">


	<title>Login Form</title>
</head>
<body>
	 <!-- HEADER SECTION -->
	<div class="header">
        <div class="logo">STAR-BOOKS</div>
        <div class="menu">
            <ul>
                <li class="nav-item ">
                    <a class="nav-link" href="localhost\STAR-BOOKS\index.php"><b><i class="fa-solid fa-house"></i>HOME</b></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="C:\xampp\htdocs\STAR-BOOKS\category.php"><b><i class="bi bi-grid-fill"></i>Category</b></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="C:\xampp\htdocs\STAR-BOOKS\about.php"><b><i class="bi bi-file-person-fill"></i>About Us</b></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="C:\xampp\htdocs\STAR-BOOKS\user_login\index.php"><b><i class="bi bi-box-arrow-in-right"></i>Log In</b></a>
                </li>
            </ul>
        </div>
    </div>


	<div class="formm">
        <div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	    </div>
    </div>


	<!-- Footer section -->
	 <div class="footer">
        <div class="footer1">
            <h3>STAR-BOOKS</h3>
            <p>Designed and built with all the love 
                by team <b>STAR-BOOKS</b> with 
                the help of contributers </p>
        </div>
        <div class="footer2">
            <h3>LOCATION</h3>
            <h5>Mayfair Avenue, Dehradun</h5>
        </div>
        <div class="footer3">
            <h3>AROUND THE WEB</h3>
            <div class="socials">
                <a href="https://www.instagram.com/_bhawna.manral_/"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/manralbhawna/"><i class="bi bi-linkedin"></i></a>
            </div>
            <p></p>
        </div>
    </div> 
</body>
</html>