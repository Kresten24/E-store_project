@extends('layouts/layout')
@section('content')
<body id="signUp">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col">
        <div class="card" id="form-register">
          <div class="card-header">{{ __('Register') }}</div>
          <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
              @csrf
              <div class="form-group row">
                <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
                <div class="col-md-6">
                  <input id="firstName" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>
                  @if ($errors->has('firstName'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('firstName') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="form-group row">
                <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
                <div class="col-md-6">
                  <input id="lastName" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}" required autofocus>
                  @if ($errors->has('lastName'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('lastName') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                <div class="col-md-6">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                  @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="form-group row">
                <label for="phoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number (optional)') }}</label>
                <div class="col-md-6">
                  <input id="phoneNumber" type="number" class="form-control{{ $errors->has('phoneNumber') ? ' is-invalid' : '' }}" name="phoneNumber" value="{{ old('phoneNumber') }}">
                  @if ($errors->has('phoneNumber'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('phoneNumber') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="form-group row">
                <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                <div class="col-sm">
                  <input type="radio"  name="gender" value="male">
                  Male
                  <input type="radio"  name="gender" value="female">
                  Female
                  <input type="radio" name="gender" value="other">
                  Other
                  <!-- @if ($errors->has('gender'))
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('gender') }}</strong>
                </span>
                @endif -->
              </div>
            </div>

            <div class="form-group row">
            <label for="birthday" name="birthday" class="col-md-4 col-form-label text-md-right">{{ __('Birthday') }}</label>
            <div class="col-sm">
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
        </div>
        <div class="col-sm">
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
    </div>
    <div class="col-sm">
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
</div>
<div class="form-group row">
  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
  <div class="col-md-6">
    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    @if ($errors->has('password'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('password') }}</strong>
    </span>
    @endif
  </div>
</div>
<div class="form-group row">
  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
  <div class="col-md-6">
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
  </div>
</div>
<div class="form-group row mb-0">
  <div class="col-md-6 offset-md-4">
    <button type="submit" class="btn btn-primary">
      {{ __('Register') }}
    </button>
  </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
@endsection
