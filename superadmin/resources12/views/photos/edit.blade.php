

@extends('adminlte::page')



@section('title', 'Photo Gallery Page')



@section('content_header') 

    <h1> Edit Photo Gallery</h1>

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

      <form method="post" action="{{ route('photos.update', $photo->id) }}" enctype="multipart/form-data">

        @method('PATCH')

     
        <div class="form-group">
       @csrf
          <label for="name">Album Name:</label>

           <select name="album_id" class="form-control">

           @foreach($albumgallerys as $albumgallery)

             <option value="{{$albumgallery->id}}">{{$albumgallery->title}}</option>

           @endforeach

          </select>

        </div>

        <div class="form-group">
         
          <label for="name"> Title:</label>

          <input type="text" class="form-control" name="title" value={{ $photo->title }} />

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