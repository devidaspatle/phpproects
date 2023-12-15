
@extends('adminlte::page')

@section('title', 'Civiflora')

@section('content_header') 
    <h1> Edit Subcategory</h1>
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
      <form method="post" action="{{ route('subcategorys.update', $subcategorys->id) }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
         <div class="form-group">
          <label for="name">Company Name:</label>
          <select name="type_menu" class="form-control">
             <option value="">Select Company Name</option>
            <option value="1">CIVI</option>
            <option value="2">FLORA</option>
          </select>
        </div>
        <div class="form-group">
          <label for="name">Category:</label>
           <select name="categoryid" class="form-control">
           @foreach($categorys as $category)
             <option value="{{$category->id}}">{{$category->category}}</option>
           @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="Subcategory">Subcategory :</label>
  <input type="text" class="form-control" name="subcategory" value={{ $subcategorys->subcategory }} />
        </div>
        <div class="form-group">
          <label for="Images">Image:</label>
          <input type="file" name="file" value={{ $subcategorys->image }} />
          <img src="../../subcategory/{{ $subcategorys->image }}" class="img-responsive" style="width: 50px; height: 40px;">
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
</div>
@endsection