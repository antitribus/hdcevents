@extends('layouts.main')
@section('title', 'Product ' . $id)
@section('content')
    <h1>{{ $id  }}</h1>
    <h1>{{ $search  }}</h1>
@endsection
