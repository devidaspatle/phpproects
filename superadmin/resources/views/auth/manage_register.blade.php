@extends('adminlte::page')

@section('title', 'Civiflora User List page')

@section('content_header') 
    <h1>Manage User List</h1>
    <div style="float: right;"><a href="{{ route('register')}}" class="btn btn-primary">Register a new user</a></div>
@stop
<div>
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
@section('content')
  <table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
          <td><b>ID</b></td>
          <td><b> Name</b></td>
          <td><b>Email Id</b></td>
          <td><b>Date</b></td>
          <td colspan="2"><b>Action</b></td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->date}}</td>
            <td><a href="{{ route('users.edit', $user->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('users.destroy', $user->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
