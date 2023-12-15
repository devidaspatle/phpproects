@extends('adminlte::page')



@section('title', 'Photo Gallery page')



@section('content_header') 

    <h1>Manage Photo Gallery</h1>

    <div style="float: right;"><a href="{{ route('photogallerys.create')}}" class="btn btn-primary">Add</a></div>

@stop



<div>

  @if(session()->get('success'))

    <div class="alert alert-success">

      {{ session()->get('success') }}  

    </div><br />

  @endif

@section('content')

  <table id="example1" class="table table-bordered table-striped">

    <thead>

        <tr>

          <td><b>Sr. No.</b></td>

          <td><b>Album Name</b></td>

          <td><b>Title</b></td>

          <td><b>Image</b></td>

          <td colspan="2"><b>Action</b></td>

        </tr>

    </thead>

    <tbody>

        @php

          $i = 1

        @endphp

        @foreach($photogallerys as $photogallery)

        <tr>

            <td>{{$i++}}</td>

            <td>

              <?php 

                $albumid = $photogallery->album_id;

                echo $albumgallerys = DB::table('albumgalleries')->where('id', $albumid)->value('title');

              ?>   

            </td>

            <td>{{$photogallery->title}}</td>

            <td> <img src="photogallerys/{{ $photogallery->image }}" class="img-responsive" style="width: 50px; height: 40px;"></td>

            <td><a href="{{ route('photogallerys.edit',$photogallery->id)}}" class="btn btn-primary">Edit</a></td>

            <td>

                <form action="{{ route('photogallerys.destroy',$photogallery->id)}}" method="post">

                  @csrf

                  @method('DELETE')

                  <button class="btn btn-danger" type="submit">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </tbody>

  </table>

</div>

@endsection

