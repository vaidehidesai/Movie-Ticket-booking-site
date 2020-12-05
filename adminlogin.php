<?php

error_reporting(0);

session_start();

$mysqli = mysqli_connect("localhost","root","","movie_ticket");

$error = "";


if(isset($_POST['submit'])){

$result = mysqli_query($mysqli,"SELECT * FROM users WHERE name='" . $_POST["User_name"] . "' and password = '". $_POST["Password"]."'");

$row=mysqli_fetch_array($result);
if(is_array($row)) {
	$_SESSION["id"] = $row['id'];
	header("location:index1.html");
	} else {
	$error = "Invalid Username or Password!";
	}

}

if(!empty($_POST["logout"])) {
	$_SESSION["id"] = "";
	session_destroy();
}

?>
<html>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Movie Counter</title>
	<meta name="description" content="Blueprint: A basic template for a page stack navigation effect" />
	<meta name="keywords" content="blueprint, template, html, css, page stack, 3d, perspective, navigation, menu" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="salon.jpg">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" type="text/css" href="css/input_text.css" />
	<link rel="stylesheet" type="text/css" href="css/button.css" />
	<script src="js/modernizr-custom.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>

<body style="background-image:url('images/banner.jpeg'); background-repeat: no-repeat; height:100%; background-size: cover">
<?php if(empty($_SESSION["id"])) { ?>
<div align="center" id="aa" style="margin-top:200px">
<div id="main" align="center">
<form method="post" >
	<table >
		<h1 style="color:black"> LOGIN </h1>
		<!-- <tr>
			<td align="center" colspan="2"> <span style="color:red;"> <?php/* echo*/ $error;?> </span> </td> 
		</tr> -->

		<tr><td>
			<div class="col-3 input-effect">
        	<input class="effect-17" type="text" name="User_name">
            <label>User Name</label>
            <span class="focus-border"></span>
        	</div></td>
        </tr>

		<tr><td>
			<div class="col-3 input-effect">
        	<input class="effect-17" type="password" name="Password">
            <label>Password</label>
            <span class="focus-border"></span>
        </div></td>
		</tr>

		<tr></tr>

		<tr>
			<td colspan="2" align="center">
						<div class="upload-btn-wrapper">
							<button class="btn" type="submit" name="submit">Sign In</button>
						</div>
				</td> 
			<!-- <td colspan="2" align="center"> <color="white"> 
				<div class="button4">
					<input style="color:black;" type="submit" name="submit" value="SIGN IN" id="button">
				</div>
			</td> -->
		</tr>
	</table>
</form>
</div>
</div>
<?php 
} else { 
$result = mysqlI_query($mysqli,"SELECT * FROM admin WHERE id='" . $_SESSION["id"] . "'");
$row  = mysqli_fetch_array($result);
?>




<?php } ?>

</body>
</html>