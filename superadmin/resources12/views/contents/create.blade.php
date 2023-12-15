@extends('adminlte::page')

@section('title', 'Civiflora')

@section('content_header') 
    <h1>    Add Newsletter</h1>
@stop
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('webcontents.store') }}">
           <div class="form-group">
              @csrf
          <label for="name"> Name:</label>
        <input type="text" class="form-control" name="name"  />
        </div>
        <div class="form-group">
          <label for="quantity">Email:</label>
          <input type="text" class="form-control" name="email" />
        </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection