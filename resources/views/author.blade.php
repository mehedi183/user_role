@extends('layouts.master')

@section('content')
	@include('includes.messages')
	<section class="row new-post">
		<div class="col-md-6 col-md-offset-3">
			<header><h3>This is page For Author....</h3></header>
			
		</div>
	</section>
	<section class="row posts">
		<div class="col-md-6 col-md-offset-3">
			<header><h3>What an Author say...</h3></header>
			<div>
				<a href="{{route('new')}}">Write Article</a>
			</div>		
		</div>
	</section>
	
	
	
@endsection