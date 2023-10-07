@extends('admin.layouts.plain')

@section('content'){{--
    Author: MH RONY
    Author Name: MH RONY.
    GigHub Link: https://github.com/dev-mhrony
    Facebook Link:https://www.facebook.com/dev.mhrony
    Youtube Link: Code Camp BD
    for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
    Visit My Website : https://dev-mhrony.com
--}}
<h1>Pharmacy System</h1>
<p class="account-subtitle">Login Panel</p>
@if (session('login_error'))
<x-alerts.danger :error="session('login_error')" />
@endif
<!-- Form -->
<form action="{{route('login')}}" method="post">
	@csrf
	<div class="form-group">
		<input class="form-control" name="email" type="text" placeholder="Email">
	</div>
	<div class="form-group">
		<input class="form-control" name="password" type="password" placeholder="Password">
	</div>
	<div class="form-group">
		<button class="btn btn-success btn-block" type="submit">Login</button>
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
<!-- Visit codeastro.com for more projects -->

<div class="text-center forgotpass"><a href="{{route('password.request')}}">Forgot Password?</a></div>
<div class="text-center dont-have">Don’t have an account? <a href="{{route('register')}}">Register</a></div>
@endsection
