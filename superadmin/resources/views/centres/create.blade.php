@extends('adminlte::page')



@section('title', 'Zero diabetic diet  Page')



@section('content_header') 

    <h1>    Add Centre</h1>

@stop

@section('content')



<div class="card uper col-md-12" >

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

      <form method="post" action="{{ route('centres.store') }}" enctype="multipart/form-data">

         
      <div class="col-md-4">
        <div class="form-group">
          @csrf
          <label for="Brand Name"> Centre Name:</label>

        <input type="text" class="form-control" name="centre_name"  />

        </div>
       </div>
        <div class="col-md-4">
        <div class="form-group">

          <label for="Generic Name">Office Time:</label>

           <input type="text" class="form-control" name="office_time"  />

        </div>
      </div>
        <div class="col-md-4">
        <div class="form-group">

          <label for="Generic Name">Office Opne:</label>

           <input type="text" class="form-control" name="office_open"  />

        </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">

          <label for="Visit Days">Visit Days:</label>

           <input type="text" class="form-control" name="visit_days"  />

        </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">

          <label for="Contact Person">Contact Person:</label>

           <input type="text" class="form-control" name="contact_person"  />

        </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">

          <label for="Mobile Number">Mobile Number:</label>

           <input type="text" class="form-control" name="mobile_number"  />

        </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">

          <label for="City">City:</label>

           <input type="text" class="form-control" name="city"  />

        </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">

          <label for="Generic Name">State:</label>

           <input type="text" class="form-control" name="state"  />

        </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">

          <label for="pincode">Pincode:</label>

           <input type="text" class="form-control" name="pincode"  />

        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">

          <label for="address">Address:</label>

          <textarea name="address" id="address" class="form-control"></textarea>

        </div>
      </div>
       <div class="col-md-6">
        <div class="form-group">

          <label for="address">Username:</label>

           <input type="text" class="form-control" name="username"  />

        </div>
      </div>
       <div class="col-md-6">
        <div class="form-group">

          <label for="Password">Password:</label>

           <input type="password" class="form-control" name="password"  />

        </div>
      </div>
         <div class="col-md-12">
          <button type="submit" class="btn btn-primary">Add</button>
</div>
      </form>

  </div>

</div>

@endsection