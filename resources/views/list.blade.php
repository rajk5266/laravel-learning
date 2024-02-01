@extends('common/page-layout')

@section('title', 'List Page')

@section('content')
    <h1>Welcome to the List Page!</h1>
    <!-- <p>This is the content specific to the List page.</p> -->
    @include('resto-list')
@endsection
