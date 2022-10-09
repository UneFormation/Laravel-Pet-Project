@extends('admin.base')

@section('content')
    <dl>
        <dt>ID</dt><dd>{{$survey->id}}</dd>
        <dt>Date</dt><dd>{{$survey->date}}</dd>
        <dt>IP</dt><dd>{{$survey->ip}}</dd>
        <dt>Firstname</dt><dd>{{$survey->firstname}}</dd>
        <dt>Lastname</dt><dd>{{$survey->lastname}}</dd>
        <dt>Email</dt><dd>{{$survey->email}}</dd>
        <dt>Location</dt><dd>{{$survey->location}}</dd>
        <dt>Country</dt><dd>{{$survey->country}}</dd>
        <dt>Comment</dt><dd>{{$survey->comment}}</dd>
        <dt>Rate</dt><dd>{{$survey->rate}}</dd>
    </dl>
@endsection
