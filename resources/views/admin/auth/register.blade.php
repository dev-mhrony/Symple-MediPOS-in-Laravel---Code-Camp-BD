@extends('admin.layouts.plain')

@section('content')
<h1>Medi-POS - Code Camp BD </h1>
<p class="account-subtitle">Register as Sales Person</p>
<!-- Visit codeastro.com for more projects -->
{{--
    Author: MH RONY
    Author Name: MH RONY.
    GigHub Link: https://github.com/dev-mhrony
    Facebook Link:https://www.facebook.com/dev.mhrony
    Youtube Link: Code Camp BD
    for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
    Visit My Website : https://dev-mhrony.com
--}}
<!-- Form -->
<form action="{{route('register')}}" method="POST">
	@csrf
	<div class="form-group">
		<input class="form-control" name="name" type="text" value="{{old('name')}}" placeholder="Full Name">
	</div>
	<div class="form-group">
		<input class="form-control" name="email" type="text" value="{{old('email')}}" placeholder="Email">
	</div>
	<div class="form-group">
		<input class="form-control" name="password" type="password" placeholder="Password">
	</div>
	<div class="form-group">
		<input class="form-control" name="password_confirmation" type="password" placeholder="Confirm Password">
	</div>
	<div class="form-group mb-0">
		<button class="btn btn-danger btn-block" type="submit">Register (SalesPerson)</button>
	</div>
</form>
<!-- /Form -->
{{--
    Author: MH RONY
    Author Name: MH RONY.
    GigHub Link: https://github.com/dev-mhrony
    Facebook Link:https://www.facebook.com/dev.mhrony
    Youtube Link: Code Camp BD
    for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
    Visit My Website : https://dev-mhrony.com
--}}
<div class="text-center dont-have">Already have an account? <a href="{{route('login')}}">Login</a></div>
@endsection
