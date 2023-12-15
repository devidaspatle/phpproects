@extends('adminlte::page')



@section('title', 'Zero Diabtes')



@section('content_header') 

    <h1>   Add Photo Gallery</h1>

@stop

@section('content')



<div class="card uper">

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

      <form method="post" action="{{ route('photogallerys.store') }}" enctype="multipart/form-data">

       

        <div class="form-group">
          @csrf
          <label for="name">Album Gallery:</label>

          <select name="album_id" class="form-control">

             <option value="">Select Album Gallery</option>

           @foreach($albumgallerys as $albumgallery)

             <option value="{{$albumgallery->id}}">{{$albumgallery->title}}</option>

           @endforeach

          </select>

        </div>



        <div class="form-group">

         <label for="Title">Title :</label>

          <input type="text" class="form-control" name="title"/>

        </div>
        


        <div class="form-group">

           <label for="Images">Image:</label>

          <input type="file" name="file"/>

        </div>

       

          <button type="submit" class="btn btn-primary">Add</button>

      </form>

  </div>

</div>

</div>

@endsection