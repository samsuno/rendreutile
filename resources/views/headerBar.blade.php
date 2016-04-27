<?php 
use Illuminate\Support\Facades\Auth;
$var = url('auth/logout');
?>

<nav class="navbar navbar-default" role="navigation">
    <div class="container">
    <a class="navbar-brand" href="<?php echo url('/') ?>"><img src='http://rendreutile.fr/Rendre_Utile/logo.jpg' style='width:150px;margin-top:-10px;'/></a>
    
	 <div class="navbar-right">
	
	<div style="text-align:center">
	
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
	
	<!--les boutons réseaux sociaux -->
	<div class="btn-group">
	<!--Facebook-->
	 <a class="btn btn-social-icon btn-facebook"> <span class="fa fa-facebook fa-2x"></span>	</a>
	 <a class="btn btn-social-icon btn-twitter">  <span class="fa fa-twitter fa-2x"></span></a>
	 <a class="btn btn-social-icon btn-linkedin">  <span class="fa fa-linkedin fa-2x"></span></a>
	 <a class="btn btn-social-icon btn-google-plus">  <span class="fa fa-google-plus fa-2x"></span></a>
	</div> <br/> 
		
	
	
   
	
	<div class="btn-group">
	<?php
    if(!Auth::user()){ //if user is not authenticated
    ?>
		
        <a href="<?php echo url('auth/login') ?>"><button class="btn btn-success navbar-btn " ><strong>Connexion</strong></button></a>
		<a href="<?php echo url('auth/register') ?>"><button class ="btn btn-primary navbar-btn"   ><strong> Créer un compte</strong></button></a>
	</div>	
	 <?php
    }
    else{ //if user is authenticated
     
	 echo '<div class="btn-group"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"   aria-expanded="false">'.Auth::user()->email.'<span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>';
							
		?>
				<ul class="dropdown-menu">
                                <li><a href="#">Mon compte</a></li>
                                <li><a href="#">Mes dons</a></li>
                                <li><a href="#">Mes demandes en cours </a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href=" <?php echo url('auth/logout') ?>"> Me déconnecter</a></li>
                            </ul>
							</div>
	<?php
   }
    ?>
	
	
	  
	  
	  </div>
	  
	  <form class="navbar-form" role="search">
			<div class="input-group add-on">
			 <script>
		  (function() {
			var cx = '015372410067233616151:zet-feily-c';
			var gcse = document.createElement('script');
			gcse.type = 'text/javascript';
			gcse.async = true;
			gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(gcse, s);
		  })();
		</script>
			  <input type="text" class="form-control" placeholder="Rechercher sur le site" name="q" id="srch-term"><!--srch-term-->
			  <div class="input-group-btn">
			<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
				
			  </div>
			  
			<gcse:searchresults-only></gcse:search>

			</div>
	</form>
   </div>

   

    </div>
</nav>

