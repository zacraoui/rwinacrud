

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
          <td>title</td>
          
        </tr>
    </thead>
    <tbody>
        @foreach($formationtype as $formationtype)
        <tr>
            <td>{{$formationtype->id}}</td>
            <td>{{$formationtype->title}}</td>
            
            <td class="text-center">
                <a href="{{ route('formationtype.edit', $formationtype->id)}}" class="btn btn-success btn-sm">Edit</a>
                <form action="{{ route('formationtype.destroy', $formationtype->id)}}" method="post" style="display: inline-block">
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