@extends('app')

@section('title')
Index
@stop

@section('content')
<h1>Attendees</h1>
@if (count($attendees))
<ul>
	@foreach ($attendees as $attendee)
		<attendee>
			<h2><a href="{{action('AttendeesController@show', [$attendee->id])}}">{{$attendee->first_name}} {{$attendee->last_name}}</a><h2>
			<ul>
				<li>{{$attendee->first_name}}</li>
				<li>{{$attendee->last_name}}</li>
				<li>{{$attendee->email}}</li>
				<li>{{$attendee->address}}</li>
				<li>{{$attendee->city}}</li>
				<li>{{$attendee->country}}</li>
				<li>{{$attendee->phone_number}}</li>
			</ul>
		</attendee>
	@endforeach
</ul>
@else
<p>no attendees</p>
@endif

@stop