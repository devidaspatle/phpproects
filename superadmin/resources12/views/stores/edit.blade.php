
@extends('adminlte::page')

@section('title', 'Civiflora')

@section('content_header') 
    <h1> Edit Store</h1>
@stop
@section('content')

<div class="card uper">
  <div class="card-header">
   
  </div>
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
      <form method="post" action="{{ route('stores.update', $store->id) }}">
        @method('PATCH')
        @csrf
         <div class="form-group">
          <label for="name"> Location Name:</label>
        <input type="text" class="form-control" name="location_name" value={{ $store->location_name }}  />
        </div>

        <div class="form-group">
          <label for="name"> Name:</label>
          <input type="text" class="form-control" name="name" value={{ $store->name }} />
        </div>
        <div class="form-group">
          <label for="price">Contact :</label>
          <input type="text" class="form-control" name="contact" value={{ $store->contact }} />
        </div>
        <div class="form-group">
          <label for="quantity">Email:</label>
          <input type="text" class="form-control" name="email" value={{ $store->email }} />
        </div>
         <div class="form-group">
          <label for="quantity">Address:</label>
          <textarea class="form-control" name="address">{{ $store->address }}</textarea>
        </div>
        <div class="form-group">
          <label for="name"> Working Hour:</label>
          <textarea class="form-control" name="workinghour">{{ $store->workinghour }}</textarea>
        </div>
         <div class="form-group">
          <label for="price">Latitude:</label>
          <input type="text" class="form-control" name="latitude" value={{ $store->latitude }} />
        </div>
         <div class="form-group">
          <label for="price">Longitude:</label>
          <input type="text" class="form-control" name="longitude" value={{ $store->longitude }} />
        </div>
        <div class="form-group">
          <label for="price">Social Media:</label>&nbsp;&nbsp;
          @if($store->type == 1)         
           <input type="checkbox" name="socialmedia1" value="1" checked="checked" />         
          @else
         <input type="checkbox" name="socialmedia1" value="1" />      
          @endif
          Instagram &nbsp;
            @if($store->type == 2)         
           <input type="checkbox" name="socialmedia2" value="2" checked="checked" />         
          @else
         <input type="checkbox" name="socialmedia2" value="2" />      
          @endif
          Facebook &nbsp;
           @if($store->type == 3)         
           <input type="checkbox" name="socialmedia3" value="3" checked="checked" />         
          @else
         <input type="checkbox" name="socialmedia3" value="3" />      
          @endif

          Twitter
        </div>
       
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection