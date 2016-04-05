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
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                </div>
                
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-9">
                     <input  class="form-control" type="password" name="password" id="password">
                </div>
               
            </div>
        </div>
        <div class="panel-footer">
            <div>
                <input type="checkbox" name="remember"> Remember Me
            </div>

            <div>
                <button type="submit">Login</button>
            </div>
        </div>
            
       
       
    </div>
   
</form>
<!--show errors if any to user-->
@include('errors.list')

@stop
