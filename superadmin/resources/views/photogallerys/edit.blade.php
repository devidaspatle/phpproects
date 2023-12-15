

@extends('adminlte::page')



@section('title', 'Photo Gallery')



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

      <form method="post" action="{{ route('photogallerys.update', $photogallerys->id) }}" enctype="multipart/form-data">

        @method('PATCH')

        @csrf

        <div class="form-group">

          <label for="name">Album Name:</label>

           <select name="album_id" class="form-control">

           @foreach($albumgallerys as $albumgallery)

             <option value="{{$albumgallery->id}}">{{$albumgallery->title}}</option>

           @endforeach

          </select>

        </div>

        <div class="form-group">

          <label for="Title">Title :</label>

          <input type="text" class="form-control" name="title" value={{$photogallerys->title}} />

        </div>

       <div class="form-group">

         <label for="Title">Description :</label>
         <textarea  class="form-control" name="description">{{$photogallerys->description}}</textarea>
        </div>

        <div class="form-group">

          <label for="Images">Image:</label>

          <input type="file" name="file" value={{ $photogallerys->image }} />

          <img src="../photogallerys/{{ $photogallerys->image }}" class="img-responsive" style="width: 50px; height: 40px;">

        </div>

        

        <button type="submit" class="btn btn-primary">Update</button>

      </form>

  </div>

</div>

</div>

@endsection