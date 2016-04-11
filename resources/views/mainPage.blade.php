<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
                <script src="./js/jquery.js" type="text/javascript"></script>
                <script src="./js/bootstrap.min.js" type="text/javascript"></script>
              <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">
                 <link rel="stylesheet" href="./css/app.css" type="text/css">
		<title>Rendre utile</title>
	</head>
	<body>
		<?php 
                        require_once app_path()."/includes/headerBar.blade.php";
		?>
            <div class="container">
                <div class="row">
                    <div class="col-md-3"> 
                        <div class="panel panel-primary">
                            <!--    <div class="panel-heading">Navigation</div> -->
                            <ul class="nav nav-pills nav-stacked">
                                <li role="presentation" class="active"><a href="#">Accueil</a></li>
                                <li role="presentation"><a href="#">Objets a récupérer</a></li>
                                <li role="presentation"><a href="#">Faire un don</a></li>
                                <li role="presentation"><a href="#">Comment ça marche</a></li>
                                <li role="presentation"><a href="./about">Nous contacter</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-8 col-md-offset-1">
                       
                    </div>
                </div>
            </div>
            
	</body>
	<?php 
                 require_once app_path()."/includes/footerBar.blade.php";
		?>
</html>