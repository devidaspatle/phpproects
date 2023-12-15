@extends('adminlte::page')

@section('title', 'Civiflora')

@section('content_header') 
    <h1>  Add Store</h1>
@stop
@section('content')

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
      <form method="post" action="{{ route('stores.store') }}">
        <div class="form-group">
              @csrf
          <label for="name"> Location Name:</label>
        <input type="text" class="form-control" name="location_name"  />
        </div>
        <div class="form-group">
              @csrf
          <label for="name"> Name:</label>
        <input type="text" class="form-control" name="name"  />
        </div>

        <div class="form-group">
          <label for="price">Contact :</label>
          <input type="text" class="form-control" name="contact"/>
        </div>
        <div class="form-group">
          <label for="quantity">Email:</label>
          <input type="text" class="form-control" name="email" />
        </div>
         <div class="form-group">
          <label for="quantity">Address:</label>
          <textarea class="form-control" name="address"></textarea>
        </div>
        <div class="form-group">
          <label for="name"> Working Hour:</label>
          <textarea class="form-control" name="workinghour"></textarea>
        </div>
         <div class="form-group">
          <label for="price">Latitude:</label>
          <input type="text" class="form-control" name="latitude"/>
        </div>
         <div class="form-group">
          <label for="price">Longitude:</label>
          <input type="text" class="form-control" name="longitude"/>
        </div>
        <div class="form-group">
          <label for="price">Social Media:</label>&nbsp;&nbsp;
          <input type="checkbox" name="socialmedia1" value="1" /> Instagram &nbsp;
          <input type="checkbox" name="socialmedia2" value="2" /> Facebook &nbsp;
          <input type="checkbox" name="socialmedia3" value="3" /> Twitter
        </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection