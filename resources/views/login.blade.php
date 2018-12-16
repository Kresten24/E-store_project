@extends('layout')
@section('title', 'login')
@section('content')
<body id="login">
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<form id="form-login">
			<div class="form-group">
				<input type="email" class="form-control" name="email" placeholder="Enter email">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
			<button type="submit" class="btn btn-primary login">Submit</button>
		</form>
		</div>
	</div>
</div>
</body>
@endsection
