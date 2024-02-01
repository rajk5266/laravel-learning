@extends('common/page-layout')

@section('title', 'Add Page')

@section('content')
<div class="container">
    <h1>Add New Restaurant</h1>

    <form method="post" action="add">
        @csrf

        <!-- @csrf will provide token -->
        <div class="form-group">
            <label >Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label >Email</label>
            <input type="text" name="email" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label >Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="Enter Phone">
        </div>
      
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection