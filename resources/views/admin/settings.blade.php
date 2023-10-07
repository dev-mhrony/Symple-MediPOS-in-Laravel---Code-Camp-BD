@extends('admin.layouts.app')
@php
    $title ='settings';
@endphp

@push('page-header')
<div class="col-sm-12">
	<h3 class="page-title">General Settings</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="javascript:(0)">Settings</a></li>
		<li class="breadcrumb-item active">General Settings</li>
	</ul>
</div>
{{--
    Author: MH RONY
    Author Name: MH RONY.
    GigHub Link: https://github.com/dev-mhrony
    Facebook Link:https://www.facebook.com/dev.mhrony
    Youtube Link: Code Camp BD
    for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
    Visit My Website : https://dev-mhrony.com
--}}
@endpush

@section('content')

<div class="row">
	<div class="col-12">
		@include('app_settings::_settings')
	</div>
</div>
@endsection

