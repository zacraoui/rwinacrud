<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Laravel 8 CRUD Operations Example</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container">
         @yield('content')
      </div>

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>
   </body>
</html>
@extends('layout')

@section('content')

<div class="card mt-5">
  <div class="card-header">
    Create User
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
      <form method="post" action="{{ route('employees.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" name="phone"/>
          </div>
          <button type="submit" class="btn btn-block btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection
@extends('layout')

@section('content')

<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td># ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Phone</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($employee as $employee)
        <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->name}}</td>
            <td>{{$employee->email}}</td>
            <td>{{$employee->phone}}</td>
            <td class="text-center">
                <a href="{{ route('employees.edit', $employee->id)}}" class="btn btn-success btn-sm">Edit</a>
                <form action="{{ route('employees.destroy', $employee->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
@extends('layout')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Update
    </div>

    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{ route('employees.update', $employee->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $employee->name }}" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $employee->email }}" />
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" class="form-control" name="phone" value="{{ $employee->phone }}" />
            </div>

            <button type="submit" class="btn btn-block btn-danger">Update</button>
        </form>
    </div>
</div>
@endsection