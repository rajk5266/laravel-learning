@extends('common/page-layout')

@section('title', 'List Page')

@section('content')
<h1>Welcome to the List Page!</h1>

@php
// Your PHP code here
$variable = 'This is a PHP variable showing that this sentence is echoed by variable';
echo $variable;
@endphp

<div>
    @if(Session::get('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Adress</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <th scope="row">{{$item -> id}}</th>
                <td>{{$item -> name}}</td>
                <td>{{$item -> phone}}</td>
                <td>{{$item -> email}}</td>
                <td>{{$item -> address}}</td>
                <td>
                    <a href="delete/{{$item -> id}}"><i class="fa fa-trash"></i></a>
                    <a href="edit/{{$item -> id}}"><i class="fa fa-pencil-square-o"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>



</div>
@endsection