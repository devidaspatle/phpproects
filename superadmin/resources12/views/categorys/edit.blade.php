
@extends('adminlte::page')

@section('title', 'Civiflora Category Page')

@section('content_header') 
    <h1> Edit Category</h1>
@stop
@section('content')

<div class="card uper">
  <div class="card-header">
   
  </div>
  <div class="card uper col-md-6">
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
      <form method="post" action="{{ route('categorys.update', $category->id) }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
          <div class="form-group">
              @csrf
          <label for="name">Company Name:</label>
          <select name="type_menu" class="form-control">
             <option value="">Select Company</option>
            <option value="1" {{ ( $category->type_menu == 1 ) ? 'selected' : 'selected' }}>CIVI</option>
            <option value="2" {{ ( $category->type_menu == 2 ) ? 'selected' : 'selected' }}>FLORA</option>
          </select>
        </div>
        <div class="form-group">
          <label for="name"> Category Name:</label>
          <input type="text" class="form-control" name="category" value={{ $category->category }} />
        </div>
        
        <div class="form-group">
          <label for="Image">Image:</label>
           <input type="file" name="file" class="form-control-file">
        </div>
      
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
</div>
@endsection