@extends('adminlte::page')

@section('title', 'Zero Diabetic Diet Page')

@section('content_header') 


    <h1>Manage Testimonials</h1>


      <div style="float: right;"><a href="{{ route('testimonials.create')}}" class="btn btn-primary">Add</a></div>


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

          <td><b>Name</b></td>

          <td><b>Title</b></td>

          <td><b>Description</b></td>

          <td><b>Images</b></td>

          <td colspan="2"><b>Action</b></td>


        </tr>


    </thead>


    <tbody>


        @php


          $i = 1


        @endphp


        @foreach($testimonials as $testimonial)


        <tr>


            <td>{{$i++}}</td>

            <td>{{$testimonial->name}}</td>

            <td>{{$testimonial->title}}</td>


            <td style="text-align: justify;">{{$testimonial->description}}</td>

            <td style="text-align: justify;"> <?php  $images = $testimonial->image; ?>
                <img src="../../testimonials/{{  $images }}" class="img-responsive" style="width: 50px; height: 40px;"></td>

            <td><a href="{{route('testimonials.edit',$testimonial->id)}}" class="btn btn-primary">Edit</a></td>


            <td>


                <form action="{{ route('testimonials.destroy', $testimonial->id)}}" method="post">


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


