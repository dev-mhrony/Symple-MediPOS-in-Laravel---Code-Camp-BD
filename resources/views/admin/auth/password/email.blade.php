@extends('admin.layouts.plain')

@section('content')
{{--
    Author: MH RONY
    Author Name: MH RONY.
    GigHub Link: https://github.com/dev-mhrony
    Facebook Link:https://www.facebook.com/dev.mhrony
    Youtube Link: Code Camp BD
    for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
    Visit My Website : https://dev-mhrony.com
--}}
<h1>Forgot Password?</h1>
<p class="account-subtitle">Enter your email to get a password reset link</p>
<!-- Form -->
<form action="{{route('password.request')}}" method="post">
	@csrf
	<div class="form-group">
		<input class="form-control" name="email" type="text" placeholder="Email">
	</div>
	<div class="form-group mb-0">
		<button class="btn btn-primary btn-block" type="submit">Submit</button>
	</div>
</form>
<!-- /Form -->

<div class="text-center dont-have">Remember your password? <a href="{{route('login')}}">Login</a></div>
@endsection
{{--
    Author: MH RONY
    Author Name: MH RONY.
    GigHub Link: https://github.com/dev-mhrony
    Facebook Link:https://www.facebook.com/dev.mhrony
    Youtube Link: Code Camp BD
    for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
    Visit My Website : https://dev-mhrony.com
--}}
