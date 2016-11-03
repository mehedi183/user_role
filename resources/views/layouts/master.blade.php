<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="{{URL::to('src/bootstrap/css/bootstrap.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/main.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>
    <body>
    	@include('includes.header')
    	<div class="container">
    		@yield('content')
    	</div>
        <!-- jQuery 
        -->
        

        
        
         <!-- Latest compiled and minified JavaScript -->
        <script src="{{URL::to('src/bootstrap/css/bootstrap.min.js')}}"></script>

        <script src="{{ URL::to('src/js/app.js') }}"></script>


    </body>
</html>
