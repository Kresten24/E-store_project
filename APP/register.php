<?php include 'Header.php'; ?>
<link rel="stylesheet" type="text/css" href="Assets/CSS/register.css">
<body id="signUp">
	<div class="content">
		<form id="form-register" action="register.php" method="post">
			<h2>Sign Up</h2>
			<input class="register-input" required type="text" name="firstName" size="20" placeholder="First name">&nbsp;
			<input class="register-input" required type="text" name="lastName" size="20" placeholder="last name"><br><br>
			<input class="register-input" required type="email" name="email"   placeholder="Email" size="47"><br><br>
			<input class="register-input" required type="text" name="phoneNumber" size="20" placeholder="Phone number">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input class="register-input" required class="radio" type="radio" name="gender" value="Male">Male &nbsp;&nbsp; <input class="radio" type="radio" name="gender" value="Female">Female <br><br>
			<div id="bd">Birthday:</div>
			<select>
				<option>Jan</option>
				<option>Feb</option>
				<option>Mar</option>
				<option>Apr</option>
				<option>May</option>
				<option>Jun</option>
				<option>Jul</option>
				<option>Aug</option>
				<option>Sep</option>
				<option>Oct</option>
				<option>Nov</option>
				<option>Dec</option>
			</select>&nbsp;
			<select>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
				<option>13</option>
				<option>14</option>
				<option>15</option>
				<option>16</option>
				<option>17</option>
				<option>18</option>
				<option>19</option>
				<option>20</option>
				<option>21</option>
				<option>22</option>
				<option>23</option>
				<option>24</option>
				<option>25</option>
				<option>26</option>
				<option>27</option>
				<option>28</option>
				<option>29</option>
				<option>30</option>
				<option>31</option>
			</select>&nbsp;
			<select>
				<option>2017</option>
				<option>2016</option>
				<option>2015</option>
				<option>2014</option>
				<option>2013</option>
				<option>2012</option>
				<option>2011</option>
				<option>2010</option>
				<option>2009</option>
				<option>2008</option>
				<option>2007</option>
				<option>2006</option>
				<option selected="1">2005</option>
				<option>2004</option>
				<option>2003</option>
				<option>2002</option>
				<option>2001</option>
				<option>2000</option>
				<option>1999</option>
				<option>1998</option>
				<option>1997</option>
				<option>1996</option><option></option>
				<option>1995</option>
			</select><br><br>
			<input class="register-input" required id="password" type="password" name="password" size="48" pattern="\w{6,}\d+" placeholder="Password"><br><br>
			<input class="register-input" required id="confirmPassword" type="password" name="cpassword" size="48" placeholder="Confirm password"><br><br>
			<div style="padding-bottom: 25px;"><input style="display: block; margin-left: 30%;" id="sub" type="submit" name="submitrform" onclick="check();" value="Sign up" onclick="return validateRegistration(); "></div>
		</form>
	</div>
	<?php include 'Footer.php'; ?>
