<form class="form-horizontal" role="form" action="./" method="post" enctype="multipart/form-data">
<div id="addSong" class="modal fade">
    <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title"> Ajout d'une chanson </h4>
                 </div>
             <div class="modal-body">
                
                  <div class="form-group">
                 	<label for="chanson" class="col-sm-2 control-label">Fichier mp3</label>
                 	<div class="col-sm-9">
                 		<input type="file" id="chanson" name="chanson" accept="audio/*">
                 	</div>
                 </div>
                 <div class="form-group">
                 	<label for="titre" class="col-sm-2 control-label">Titre</label>
                 	<div class="col-sm-9">
                 		<input type="text" class="form-control" id="titre" name="titre" placeholder="titre">
                 	</div>
                 </div>
                  <div class="form-group">
                 	<label for="artiste" class="col-sm-2 control-label">Artiste</label>
                 	<div class="col-sm-9">
                 		<input type="text" class="form-control" id="artiste" name="artiste" placeholder="Artiste">
                 	</div>
                 </div>
                  <div class="form-group">
                 	<label for="genre" class="col-sm-2 control-label">Genre</label>
                 	<div class="col-sm-9">
                 		<input type="text" class="form-control" id="genre" name="genre" placeholder="Genre">
                 	</div>
                 </div>
                  <div class="form-group">
                 	<label for="annee" class="col-sm-2 control-label">Année</label>
                 	<div class="col-sm-9">
                 		<input type="text" class="form-control" id="annee" name="annee" placeholder="aaaa">
                 	</div>
                 </div>
                  <div class="form-group">
                 	<label for="album" class="col-sm-2 control-label">Album</label>
                 	<div class="col-sm-9">
                 		<input type="text" class="form-control" id="album" name="album" placeholder="Album">
                 	</div>
                 </div>
                  <div class="form-group">
                 	<label for="url" class="col-sm-2 control-label">Url</label>
                 	<div class="col-sm-9">
                 		<input type="text" class="form-control" id="url" name="url" placeholder="Lien wiki de l'artiste">
                 	</div>
                 </div>
                  <div class="form-group">
                 	<label for="image" class="col-sm-2 control-label">Image de l'artiste</label>
                 	<div class="col-sm-9">
                 		<input type="file" id="img" name="image" accept="image/*">
                 	</div>
                 </div>
                 
                 
         <!--          
          Fichier mp3 <input type="file" name="chanson" accept="audio/*"> <br>
		<input type="text" name="titre" placeholder="Titre"><br> 
		<input type="text" name="artiste" placeholder="Artiste"><br> 
		<input type="text" name="genre" placeholder="Genre"><br> 
		<input type="text" name="annee" placeholder="Année">
		<br> 
		<input type="text" name="album" placeholder="Album"><br>
		<input type="text" name="url" placeholder="Lien wiki de l'artiste"><br>
		 
		Image de l'album ou de l'artiste <input type="file" name="image" accept="image/*"/><br>
            -->     
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                 <button type="submit" class="btn btn-success" name="action" value="addSong" >Ajouter</button>
             </div>
         </div>
    </div>
</div>
	
			
</form>