
<div class="well">
       
<div class="row">
    <div class="col-md-3">
        <img class="img-rounded" alt="Nom de l'artiste" src=""
		width="150" height="175">
    </div>
    <div class="col-md-9">
		<h4>titre</h4><br>
		<a href="url" target="_blank">artiste</a><br> 
		genre <br> 
		album
		annee<br> 
	              <object type="application/x-shockwave-flash" 
			width="200" height="20" id="dewplayer" name="dewplayer">
			<param name="wmode" value="transparent" />
			rrrrrrrrr
			<param name="flashvars" value="mp3=" />
		</object>
		<div style="padding-top: 10px">
	        <a class="btn btn-primary" href="chanson" download="titre" ><span class="glyphicon glyphicon-cloud-download" ></span></a>

			<?php if(isset($_SESSION['isConnected']) && $_SESSION['isConnected'] ){?>

			<button class="btn btn-primary" data-toggle="collapse" data-target="#comment"><span class="glyphicon glyphicon-comment" ></span></button>
			<?php }?>
		</div>
		<?php // require_once 'vues/comments.html';?>
    </div>
</div>
</div>