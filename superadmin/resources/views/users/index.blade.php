@extends('adminlte::page')@section('title', 'Zero diabetic diet User List page')@section('content_header')     <h1>Manage User List</h1>    <div style="float: right;"><a href="{{ route('users.create')}}" class="btn btn-primary">Register a new user</a></div>    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>@stop<div>  @if(session()->get('success'))    <div class="alert alert-success">      {{ session()->get('success') }}      </div><br />  @endif@section('content')  <table id="example1" class="table table-bordered table-striped">    <thead>        <tr>          <td><b>ID</b></td>          <td><b> Name</b></td>          <td><b>Email Id</b></td>          <td><b>Date</b></td>          <td colspan="2"><b>Action</b></td>        </tr>    </thead>    <tbody>        @foreach($users as $user)        <tr>            <td>{{$user->id}}</td>            <td>{{$user->name}}</td>            <td>{{$user->email}}</td>            <td>{{$user->created_at}}</td>            <td><a href="{{ route('users.edit', $user->id)}}" class="btn btn-primary">Edit</a></td>            <td>                <form action="{{ route('users.destroy', $user->id)}}" method="post">                  @csrf                  @method('DELETE')                  <button class="btn btn-danger" type="submit">Delete</button>                </form>            </td>        </tr>        @endforeach    </tbody>  </table></div>@endsection