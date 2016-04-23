@extends('app')

@section('content')

<form class="form-horizontal" method="POST" action="login">
    {!! csrf_field() !!}
    
    <div class="panel panel-default">
        
        <div class="panel-heading">
            <h1 >Connexion</h1>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-9" >
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}"  placeholder="Email ou Pseudo">
                </div>
                
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Mot de passe</label>
                <div class="col-sm-9">
                     <input  class="form-control" type="password" name="password" id="password" placeholder="Mot de passe">
                </div>
               
            </div>
        </div>
        <div class="panel-footer">
		
		<div class="row">
		  <div class="col-xs-2">
			
		  </div>
		  <div class="col-xs-3">
			<input type="checkbox" name="remember"> Se souvenir de moi
		  </div>
		  <div class="col-xs-4">
			<button type="submit" class="btn btn-primary">Se connecter</button>
		  </div>
		</div>
            
       
       
    </div>
   
</form>
<!--show errors if any to user-->
@include('errors.list')

@stop
