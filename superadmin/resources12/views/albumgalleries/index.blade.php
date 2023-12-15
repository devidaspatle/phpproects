@extends('adminlte::page')







@section('title', 'Album Gallery Page')







@section('content_header') 



    <h1>Manage Album Gallery</h1>



      <div style="float: right;"><a href="{{ route('albumgalleries.create')}}" class="btn btn-primary">Add</a></div>



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



          <td><b>Title</b></td>



          <td><b>Image</b></td>



          <td><b>Status</b></td>



          <td colspan="2"><b>Action</b></td>



        </tr>



    </thead>



    <tbody>



        @php



          $i = 1



        @endphp



        @foreach($albumgallerys as $albumgallery)



        <tr>



            <td>{{$i++}}</td>



            



             <td>{{$albumgallery->title}}</td>







            <td> <img src="../../albumgallerys/{{ $albumgallery->image }}" class="img-responsive" style="width: 50px; height: 40px;"></td>



            <td>



              <?php 



                $status = $albumgallery->is_active;



                if( $status==1)



                {



              ?>



            <a href="{{ route('albumgalleries.edit',$albumgallery->id, $albumgallery->is_active)}}" class="btn btn-green">Active</a>



            <?php } else { ?>



             <a href="{{ route('albumgalleries.edit',$albumgallery->id, $albumgallery->is_active)}}" class="btn btn-green">De-active</a>



             <?php } ?>  



            </td>



            <td><a href="{{ route('albumgalleries.edit',$albumgallery->id)}}" class="btn btn-primary">Edit</a></td>



            <td>



                <form action="{{ route('albumgalleries.destroy', $albumgallery->id)}}" method="post">



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



