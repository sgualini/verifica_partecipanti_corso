<div class="form-group">
	{!! Form::label('first_name', 'First Name') !!}
	{!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('last_name', 'Last Name') !!}
	{!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('phone_number', 'Phone Number') !!}
	{!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('email', 'Email') !!}
	@if ($create)
	{!! Form::email('email', null, ['class' => 'form-control']) !!}
	@else
	{!! Form::email('email', null, ['class' => 'form-control', 'readonly' => true]) !!}
	@endif
</div>
<div class="form-group">
	{!! Form::label('address', 'Address') !!}
	{!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('city', 'City') !!}
	{!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('country', 'Country') !!}
	{!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>