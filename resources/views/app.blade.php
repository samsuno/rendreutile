<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8">
            <script src="{{asset('./js/jquery.js')}} " type="text/javascript"></script>
            <script src="{{asset('./js/bootstrap.min.js')}}" type="text/javascript"></script>
            <!--<link rel="stylesheet" href="{{asset('./css/bootstrap.min.css')}}" type="text/css">-->
             <link rel="stylesheet" href="{{asset('./css/app.css')}}" type="text/css">
            <title>Rendre utile</title>
    </head>
    <body>
        
        <!--include header bar-->
        <?php  require_once app_path()."/includes/headerBar.blade.php";  ?>
        
        <!--container div-->
        <div class="container">
          <div class="row">
                    <div class="col-md-3"> 
                        <div class="panel panel-default">
                            <div class="panel-heading">Menu</div>
                            <div class="panel-body">
                               <ul class="nav nav-pills nav-stacked">
                                <!--<li role="presentation" class="active"><a href="#">Accueil</a></li>-->
                                <li role="presentation"><a href="{{URL::to('./articles')}}">Objets a récupérer</a></li>
                                <li role="presentation"><a href="{{URL::to('./articles/create')}}">Faire un don</a></li>
                                <li role="presentation"><a href="{{URL::to('./commentcamarche')}}">Comment ca marche</a></li>
                                <li role="presentation"><a href="{{URL::to('./about')}}">Nous contacter</a></li>
                            </ul>
                            </div>
                        </div>
<!--                        <div class="panel panel-primary">
                                <div class="panel-heading">Navigation</div> 
                            <ul class="nav nav-pills nav-stacked">
                                <li role="presentation" class="active"><a href="#">Accueil</a></li>
                                <li role="presentation"><a href="{{URL::to('./articles')}}">Objets a récupérer</a></li>
                                <li role="presentation"><a href="{{URL::to('./articles/create')}}">Faire un don</a></li>
                                <li role="presentation"><a href="{{URL::to('./commentcamarche')}}">Comment ca marche</a></li>
                                <li role="presentation"><a href="{{URL::to('./about')}}">Nous contacter</a></li>
                            </ul>
                        </div>-->
                        </div>
            
                    
                    <div class="col-md-8 col-md-offset-1">
                        @yield('content')
                    </div>
                </div>
        </div>

    </body>
</html>