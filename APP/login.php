

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>eStore</title>
	<link rel="stylesheet" type="text/css" href="project.css">

<style type="text/css">

#form{

	background-color: rgba(0, 0, 0, 0.5);

	height:200px;
	width: 30%;  

	display: block;
	margin: 0 auto; 

	padding-left: 0;
	margin-top: 100px;
}

input{

	width: 80%;
	display: block; 
 	margin: 0 auto;height: 25px; 
 	border-radius: 4px;

}

</style>

</head>

<body style="background-image:url(bglog.jpg); background-repeat:none; background-size:cover;">

<header style="position: absolute;">

<nav>
<span class="navBar">
<span id="title">estore</span>
<a href="project.html" >Home</a>
<a href="#">About Us</a>
<a href="#">Contact</a>
<a href="#">Locations</a>
<span id="rightNav">
<a href="login.php">| &#10154;Login</a>
<a href="register.php" style="padding-left: 14px;">&#10010;Sign Up</a></span>
<span id="time"></span>
</span>
</nav>
</header>

<div class="container">
<span id="open">&#9776;  Menu</span>
<div class="sideMenu" id="sideMenu">
	<a href="cart.php">My Cart</a>
	<hr>
	<br>
	<a href="login.php">| &#10154;Login</a>
	<a href="#">Modify Acount</a>
	<a href="#">Order History</a>
	<a href="#">Change Password</a>
	<hr>
	<br>
	<a href="#">Track Order</a>
	<a href="#">On Sale Items</a></div>
</div>


<form id="form" method="post">
<br>
	<p><input " placeholder=" Email" type="email" name="email"></p>
	<p><input " placeholder=" Password" type="password" name="password"></p>
	<input style="width: 25%; height: 25px;" type="submit" name="login" value="login">
</form>

<footer>&copy; 2030 estore &nbsp; Design by Kresten Ordekian.</footer>

<script type="text/javascript" src="project.js"></script>

</body>
</html>