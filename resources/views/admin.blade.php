@extends('layouts.master')

@section('content')
	@include('includes.messages')
	<section class="row new-post">
		<div class="col-md-6 col-md-offset-3">
			<header><h3>This is page For Admin....</h3></header>
			
		</div>
	</section>
	<section class="row posts">
		<div class="col-md-12">
			<div class="col-md-3">Name</div>
			<div class="col-md-3">Email</div>
			<div class="col-md-3">Role</div>
			<div class="col-md-3">Assign Role</div>
			<hr /><br />

			@foreach($users as $user)
				<div class="col-md-3">{{$user->name}}</div>
				<div class="col-md-3">{{$user->email}}</div>
				<div class="col-md-3"></div>
				<div class="col-md-3"><button class="btn">Assign Role</button></div><br />
			@endforeach					
		</div>
	</section>
	
	
	
@endsection