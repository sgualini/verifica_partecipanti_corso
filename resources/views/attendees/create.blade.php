@extends('app')

@section('title')
Edit Attendee
@stop

@section('content')
<h1>Edit attendee</h1>
<hr />
{!! Form::model($attendee = new \App\Attendee, array('action' => 'AttendeesController@index')) !!}
	@include('attendees.form', ['submitButtonText' => 'Save', 'create' => true])
{!! Form::close() !!}

@include('errors.list')

@stop