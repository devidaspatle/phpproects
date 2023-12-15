@extends('adminlte::page')



@section('title', 'Zero Diabetes')



@section('content_header') 

    <h1>Company Profile Details</h1>

@stop

@section('content')



<div class="card uper col-md-8">



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

       <form class="form-horizontal" method="POST" action="{{ route('settings') }}">

        <div class="form-group">

              @csrf

          <label for="Company Name"> Company Name:</label>

        <input type="text" class="form-control" name="name"  />

        </div>



        <div class="form-group">

         <label for="Designation">Logo :</label>

          <input type="file" name="file"/>

        </div>

        <div class="form-group">

           <label for="Loan Incharge">Keywords:</label>

           <textarea rows="3"  name="keywords" class="form-control"></textarea>

        </div>

         <div class="form-group">

          <label for="Phone No">Content:</label>

         <textarea rows="5"  class="form-control"></textarea>

        </div>

        

          <button type="submit" class="btn btn-primary">Submit</button>

      </form>

  </div>

</div>

@endsection

