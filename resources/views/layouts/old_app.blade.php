<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name','atgProject')}}</title>
 <!--<link rel="stylesheet" href="https://bootstrapformhelpers.com/assets/css/bootstrap-formhelpers.min.css">
  <link rel="stylesheet" href="https://bootstrapformhelpers.com/assets/js/bootstrap.min.js">
   <link rel="stylesheet" href="https://bootstrapformhelpers.com/assets/js/bootstrap-formhelpers.min.js">
   <link rel="stylesheet" href="https://bootstrapformhelpers.com/assets/css/bootstrap.min.css">-->
   
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen">
	
	<!-- Bootstrap Form Helpers -->
<link href="{{asset('external/dist/css/bootstrap-formhelpers.min.css')}}" rel="stylesheet" media="screen">




    </head>
    <body>
	
        @include('inc.navbar')
        <div class="container-fluid">
        @include('inc.messages')
        @yield('content')
        </div>
		
			<!-- jQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<!-- Bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<!-- Bootstrap Form Helpers -->
	<script src="{{asset('external/dist/js/bootstrap-formhelpers.min.js')}}"></script>
	<script src="{{asset('external/js/bootstrap-formhelpers-countries.js')}}"></script>
	<script src="{{asset('external/js/bootstrap-formhelpers-states.js')}}"></script>
	<script src="{{asset('external/js/bootstrap-formhelpers-languages.js')}}"></script>
	<script>
	function getVal() {
		// This will get the value of #timepicker
		alert($("#timepicker").val())
	}
	</script>
    </body>
</html>
