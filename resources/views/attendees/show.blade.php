@extends('app')

@section('title')
{{$attendee->first_name}}
@stop

@section('content')
<h1>{{$attendee->first_name}}</h1>
<ul>
	<li>{{$attendee->first_name}}</li>
				<li>{{$attendee->last_name}}</li>
				<li>{{$attendee->email}}</li>
				<li>{{$attendee->address}}</li>
				<li>{{$attendee->city}}</li>
				<li>{{$attendee->country}}</li>
				<li>{{$attendee->phone_number}}</li>
</ul>
@stop