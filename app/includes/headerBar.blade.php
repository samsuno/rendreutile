<?php 
use Illuminate\Support\Facades\Auth;
$var = url('auth/logout');
?>

<nav class="navbar navbar-default" role="navigation">
    <div class="container">
    <a class="navbar-brand" href="<?php echo url('/') ?>"><img src='http://rendreutile.fr/Rendre_Utile/logo.jpg' style='width:150px;margin-top:-10px;'/></a>
    <?php
    if(!Auth::user()){ //if user is not authenticated
    ?>
    <div class="navbar-right">
	
	<!-- Affichage mobile regroupé -->
	<div id="menuHamburger">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed"  data-toggle="collapse" data-target="#monMenuMobile">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				 				
				</div>

				<!-- Recueil les liens nav, les formulaires et d'autres contenus pour basculer -->
				<div class="collapse navbar-collapse dropdown" id="monMenuMobile">
				  <ul class="nav navbar-nav">
								<li role="presentation" class="active"><a href="#">Accueil</a></li>
                                <li role="presentation"><a href="{{URL::to('./articles')}}">Objets a récupérer</a></li>
                                <li role="presentation"><a href="{{URL::to('./articles/create')}}">Faire un don</a></li>
                                <li role="presentation"><a href="{{URL::to('./commentcamarche')}}">Comment ça marche</a></li>
                                <li role="presentation"><a href="{{URL::to('./about')}}">Nous contacter</a></li>
				
					
					</ul>			
				</div><!-- /.navbar-collapse -->
		</div>
	<div style="text-align:center">
	<div class="btn-group">
        <a href="<?php echo url('auth/login') ?>"><button class="btn btn-success navbar-btn " ><strong>Connexion</strong></button></a>
		<a href="<?php echo url('auth/register') ?>"><button class ="btn btn-primary navbar-btn"   ><strong> Créer un compte</strong></button></a>
	</div>	
	  <form class="navbar-form" role="search">
			<div class="input-group add-on">
			  <input type="text" class="form-control" placeholder="Rechercher sur le site" name="srch-term" id="srch-term">
			  <div class="input-group-btn">
				<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
			  </div>
			</div>
	</form>
	  
	  </div>
   </div>

    <?php
    }
    else{ //if user is authenticated
        echo '<a href="'.url('auth/logout').'"><button class="btn btn-danger navbar-btn navbar-right">Déconnexion</button></a>';
    }
    ?>
		
			
			
				<!-- jQuery (nécessaires pour les plugins JavaScript de bootstrap) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
			<!-- Inclure tous les plugins compilés (ci-dessous), ou inclure des fichiers individuels si besoin -->
			 <!-- Bootsrap JS 3.3.4 -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
			
    </div>
</nav>

