@extends('layouts/layout')
@section('title', 'register')

@section('content')
<body id="signUp">
	<form id="form-register" method="POST" action="/register">
		{{ csrf_field() }}
		<div class="form-group col ">
			<h2 id="signup-title">Sign Up</h2>
			<input class="register-input form-control" required type="text" name="firstName" size="20" placeholder="First name">
			<input class="register-input form-control" type="text" name="lastName" size="20" placeholder="last name">
			<input class="register-input form-control" type="email" name="email"   placeholder="Email" size="47">
			<input class="register-input form-control" type="text" name="phoneNumber" size="20" placeholder="Phone number (optional)">
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
	<label for="exampleFormControlSelect1" name="birthday">Birthday</label>
	<select class="form-control" name="m">
		<option value="1">Jan</option>
		<option value="2">Feb</option>
		<option value="3">Mar</option>
		<option value="4">Apr</option>
		<option value="5">May</option>
		<option value="6">Jun</option>
		<option value="7">Jul</option>
		<option value="8">Aug</option>
		<option value="9">Sep</option>
		<option value="10">Oct</option>
		<option value="11">Nov</option>
		<option value="12">Dec</option>
	</select>
	<select name="d" class="form-control">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
	</select>
	<select name="y" class="form-control">
		<option value="2017">2017</option>
		<option value="2016">2016</option>
		<option value="2015">2015</option>
		<option value="2014">2014</option>
		<option value="2013">2013</option>
		<option value="2012">2012</option>
		<option value="2011">2011</option>
		<option value="2010">2010</option>
		<option value="2009">2009</option>
		<option value="2008">2008</option>
		<option value="2007">2007</option>
		<option value="2006">2006</option>
		<option value="2005" selected="1">2005</option>
		<option value="2004">2004</option>
		<option value="2003">2003</option>
		<option value="2002">2002</option>
		<option value="2001">2001</option>
		<option value="2000">2000</option>
		<option value="1999">1999</option>
		<option value="1998">1998</option>
		<option value="1997">1997</option>
		<option value="1996">1996</option>
		<option value="1995">1995</option>
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
