<div class="form-group">
  {!!Form::label('Nombre:')!!}
  {!!Form::text('name', null,['class'=>'form-control','placeholder'=>'ingresa el nombre del usuario'])!!}
 </div>
<div class="form-group">
  {!!Form::label('Correo:')!!}
  {!!Form::text('email', null,['class'=>'form-control','placeholder'=>'ingresa el nombre del usuario'])!!}
 </div>
<div class="form-group">
  {!!Form::label('Password')!!}
  {!!Form::password('Password',['class'=>'form-control','placeholder'=>'ingresa el nombre del usuario'])!!}
 </div>
