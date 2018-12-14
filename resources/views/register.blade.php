@extends('layout')
@section('title', 'register')

@section('content')
<body id="signUp">
	<form id="form-register">
		<div class="form-group col ">
			<h2 id="signup-title">Sign Up</h2>
			<input class="register-input form-control" required type="text" name="firstName" size="20" placeholder="First name">
			<input class="register-input form-control" required type="text" name="lastName" size="20" placeholder="last name">
			<input class="register-input form-control" required type="email" name="email"   placeholder="Email" size="47">
			<input class="register-input form-control" required type="text" name="phoneNumber" size="20" placeholder="Phone number (optional)">
			<fieldset class="form-group">
				<div class="row">
					<legend class="col-form-label col-sm-2 pt-0">Gender</legend>
					<div class="col-sm-10">
						<div class="form-check">
							<input class="register-input"  type="radio" name="gender" value="Male" id="gridRadios1">
							Male
						</label>
					</div>
					<div class="form-check">
						<input class="register-input"  type="radio" name="gender" value="Female" id="gridRadios2">
						Female
					</label>
				</div>
				<div class="form-check">
					<input class="register-input"  type="radio" name="gender" value="Other" id="gridRadios3">
					Other
				</label>
			</div>
		</div>
	</div>
</fieldset>
<div class="form-group">
	<label for="exampleFormControlSelect1">Birthday</label>
	<select class="form-control" id="exampleFormControlSelect1">
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
	</select>
	<select class="form-control">
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
	</select>
	<select class="form-control">
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
		<option>1996</option>
		<option>1995</option>
	</select>
</div>
<div class="form-group">
	<input class="register-input form-control" required id="password" type="password" name="password" size="48" pattern="\w{6,}\d+" placeholder="Password">
	<input class="register-input form-control" required id="confirmPassword" type="password" name="confirmpassword" size="48" placeholder="Confirm password">

	<input id="signup-submit" type="submit" name="submit-form">

</div>
</div>
</form>
@endsection
