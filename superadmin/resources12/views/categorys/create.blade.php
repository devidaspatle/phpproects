@extends('adminlte::page')

@section('title', 'Civiflora')

@section('content_header') 
    <h1>    Add Category</h1>
@stop
@section('content')

<div class="card uper col-md-6" >
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
      <form method="post" action="{{ route('categorys.store') }}" enctype="multipart/form-data">
           <div class="form-group">
              @csrf
          <label for="name">Company Name:</label>
          <select name="type_menu" class="form-control">
             <option value="">Select Company</option>
            <option value="1">CIVI</option>
            <option value="2">FLORA</option>
          </select>
        </div>
        <div class="form-group">
          <label for="Category Name"> Category Name:</label>
        <input type="text" class="form-control" name="category"  />
        </div>
        <div class="form-group">
          <label for="Image">Image:</label>
           <input type="file" name="file" class="form-control-file">
        </div>
        
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection