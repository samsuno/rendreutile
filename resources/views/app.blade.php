<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8">
            <script src="{{asset('./js/jquery.js')}} " type="text/javascript"></script>
            <script src="{{asset('./js/bootstrap.min.js')}}" type="text/javascript"></script>
            <!--<link rel="stylesheet" href="{{asset('./css/bootstrap.min.css')}}" type="text/css">-->
             <link rel="stylesheet" href="{{asset('./css/app.css')}}" type="text/css">
			 <link rel="stylesheet" href="./css/app.css" type="text/css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
            <title>Rendre utile</title>
    </head>
    <body>
        
        <!--include header bar-->
          @include('headerBar')  
        
        <!--container div-->
        <div class="container">
          <div class="row">
           <style>
			.menu
			{
				margin-top:20px;
			}
			</style>
		
                 @include("menu");
		

            <div class="col-xs-9">
                @include('flash::message')
                @yield('content')
            </div>
                </div>
        </div>

    </body>
	@include('footerBar')   
</html>