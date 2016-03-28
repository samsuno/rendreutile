@extends('app')

@section('content')

<form class="form-horizontal" method="POST" action="register">
    {!! csrf_field() !!}

     <div  id="creerCompte"> 
        <div class="panel panel-default">
           
                 <div class="panel-heading">
                     <h1 > Créer un compte </h1>
                 </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="nom_utilisateur" class="col-sm-2 control-label">Nom</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nom_utilisateur" name="nom_utilisateur" value="{{ old('nom_utilisateur') }}" placeholder="Nom" >
                        </div>
                     </div>
                    <div class="form-group">
                        <label for="prenom_utilisateur" class="col-sm-2 control-label">Prénom</label>
                        <div class="col-sm-9">
                                <input type="text" class="form-control" id="prenom" name="prenom_utilisateur" value="{{ old('prenom_utilisateur') }}" placeholder="prenom" >
                        </div>
                    </div>
                     <div class="form-group">
                       <label for="pseudo" class="col-sm-2 control-label">Pseudo</label>
                       <div class="col-sm-9">
                               <input type="text" class="form-control" id="pseudo"  value="{{ old('pseudo') }}"  name="pseudo" placeholder="Pseudo">
                       </div>
                    </div>

                    <div class="form-group">
                        <label for="sex" class="col-sm-2 control-label"> Sexe</label>
                        <div class="col-sm-9">
                            <div class="radio">
                                <label>
                                  <input type="radio" name="sexe"  value="homme" checked>
                                  Homme
                                </label>
                             </div>
                            <div class="radio">
                              <label>
                                <input type="radio" name="sexe"  value="femme">
                                Femme
                              </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                       <label for="city" class="col-sm-2 control-label">Ville</label>
                       <div class="col-sm-9">
                               <input type="text" class="form-control" id="city" name="city"  placeholder="ville">
                       </div>
                    </div>
                   
                    <div class="form-group">
                       <label for="password" class="col-sm-2 control-label">Password</label>
                       <div class="col-sm-9">
                               <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
                       </div>
                    </div>
                    <div class="form-group">
                      <label for="password_confirmation" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-9">
                          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmation Mot de passe">
                      </div>
                    </div>
                    <div class="form-group">
                       <label for="email" class="col-sm-2 control-label">Email</label>
                       <div class="col-sm-9">
                           <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                       </div>
                    </div>
                    <div class="form-group">
                      <label for="photo" class="col-sm-2 control-label">Photo utilisateur</label>
                      <div class="col-sm-9">
                           <input type="file" id="user_picture" name="user_picture" accept="image/*">
                      </div>
                   </div>
                </div>
                <div class="panel-footer">
                    <!--<button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>-->  
                    <button type="submit" class="btn btn-success">Ajouter</button>
                </div>
        
        </div>
    </div>
</form>

@stop