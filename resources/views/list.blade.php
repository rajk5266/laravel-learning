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
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th scope="row">{{$item -> id}}</th>
      <td>{{$item -> name}}</td>
      <td>{{$item -> phone}}</td>
      <td>{{$item -> email}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
     
       
       
    </div>
@endsection
