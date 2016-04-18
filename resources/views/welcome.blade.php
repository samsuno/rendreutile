<!DOCTYPE html>
<html>
    <head>
        <title>Rendre Utile</title>
		  <script src="{{asset('./js/jquery.js')}} " type="text/javascript"></script>
           <script src="{{asset('./js/bootstrap.min.js')}}" type="text/javascript"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('cmap/style.css') }}" type="text/css" media="screen" />
        <script src="{{ URL::asset('cmap/france-map.js') }}"></script>
        <script src="{{ URL::asset('cmap/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ URL::asset('cmap/france-map.js') }}"></script>
		<link rel="stylesheet" href="./css/app.css" type="text/css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <style>
           .content
		   {
			   text-align:center;
		   }
		   #legende
		   {
			   
			   margin-left:25%;
		   }
        </style>
		 <!-- Bootsrap JS 3.3.4 -->
		
    </head>
    <body>
	<?php 
                 require_once app_path()."/includes/headerBar.blade.php";
		?>
  <div class="container">
	<div class="row">
	<style>
	.menu
	{
		margin-top:20px;
	}
	</style>
		<?php 
                 require_once app_path()."/includes/menu.blade.php";
		?>
		<div class="col-xs-8">
            <div class="content">
			
                <!--<div class="main">-->
                    <h2>Sélectionner une région</h2>

                    <div id="legende"></div><map  name="map"><div id="areas"></div>
                    </map><img id="canvasMap" id="image" src="{{ URL::asset('cmap/trans.gif') }}" usemap="#map"/>
                    <canvas id="canvas">Mettez à jour votre navigateur Internet !</canvas>

                    <!--</div>-->
            </div>
		</div>
	</div>
 </div>
    </body>
	<?php 
                 require_once app_path()."/includes/footerBar.blade.php";
		?>
</html>
