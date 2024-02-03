@extends('common/page-layout')

@section('title', 'Edit Page')

@section('content')
<div class="container">
    <h1>Edit New Restaurant</h1>

    <form method="post" action="/edit">
        @csrf

        <!-- @csrf will provide token -->
        <div class="form-group">

        <input type="hidden" name="id"  value="{{$data->id}}">
            <label >Name</label>
            <input type="text" name="name" class="form-control" value="{{$data->name}}" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label >Email</label>
            <input type="text" name="email" class="form-control" value="{{$data->email}}" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label >Phone</label>
            <input type="text" name="phone" class="form-control" value="{{$data->phone}}" placeholder="Enter Phone">
        </div>
        <div class="form-group">
            <label >Adress</label>
            <input type="text" name="address" class="form-control" value="{{$data->address}}" placeholder="Enter Address">
        </div>
      
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection