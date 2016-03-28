
<!--Temporary-->
<!--{!! Form::hidden('user_id', 1) !!}-->
<div class="form-group">

 {!! Form::label('nom_article', 'Nom:') !!}
{!! Form::text('nom_article', null, ['class'=>'form-control']) !!}

</div>

<div class="form-group">

 {!! Form::label('etat_article', 'Etat:') !!}
{!! Form::text('etat_article', null, ['class'=>'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::label('type_article', 'Type:') !!}
    {!! Form::text('type_article', null, ['class'=>'form-control']) !!}


</div>
 <div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}

</div>

