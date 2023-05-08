<!DOCTYPE html>
    <head> 
        <meta charset="UTF-8"> 
        <title>school</title> 
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'> 
        <!-- Bootstrap 3.3.7 --> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous"/> 
		
		<style>
		body {
		  background-color: #E4CDA7;
		}
		</style>
		
		
         
    </head> 
    <body> 
        <nav class="navbar navbar-default navbar-static-top"> 
            <ul class="nav navbar-nav"> 
                <li><a href="{{ route('teachers.index') }}">teacher list</a></li> 
                <li><a href="{{ route('students.index') }}">student list</a></li> 
				<li><a href="{{ route('class1s.index') }}">class1 list</a></li>
				<li><a href="{{ route('attendances.index') }}">attendance list</a></li>
				<li><a href="{{ route('studentratings.index') }}">student rating</a></li>
            </ul> 
			@include('layouts.navAuth')
        </nav> 
        <div id="page-content-wrapper"> 
            <div class="container-fluid"> 
                <div class="row"> 
                    <div class="col-lg-2"></div> 
                    <div class="col-lg-8"> 
						@yield('content')
					</div> 
                    <div class="col-lg-2"></div> 
                </div> 
            </div> 
         </div> 
    </body> 
</html>