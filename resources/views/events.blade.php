@extends('layouts.main')
@section('title', 'Events')
@section('content')
    @foreach($events as $event)
        <p>{{ $event  }}</p>
    @endforeach
@endsection
