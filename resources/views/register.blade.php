@extends('common/page-layout')

@section('title', 'Home Page')

@section('content')
    <h1>Welcome to Resto!</h1>

    <h1>Make yourself register</h1>

    <form method="post" action="register">
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
            <label >Email</label>
            <input type="text" name="phone" class="form-control" placeholder="Enter phone">
        </div>
        <div class="form-group">
            <label >Phone</label>
            <input type="password" name="password" class="form-control" placeholder="Enter new Paasword">
        </div>

      
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
