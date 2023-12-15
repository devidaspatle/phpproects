@extends('adminlte::page')



@section('title', 'Album Gallery Page')



@section('content_header') 

    <h1>    Add Album Gallery</h1>

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

      <form method="post" action="{{ route('albumgalleries.store') }}" enctype="multipart/form-data">


        <div class="form-group">
          @csrf
          <label for="Title">Title:</label>

        <input type="text" class="form-control" name="title"  />

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