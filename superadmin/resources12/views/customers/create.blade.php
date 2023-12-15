@extends('adminlte::page')

@section('title', 'Civiflora')

@section('content_header') 
    <h1>  Add Customer</h1>
@stop
@section('content')
<div class="card uper">
    <div class="card uper col-md-12">
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
      <form method="post" action="{{ route('customers.store') }}"  accept-charset="utf-8" enctype="multipart/form-data">
        <div class="col-md-6">
         <div class="form-group">
              {{csrf_field()}}
          <label for="name"> Project Name:</label>
          <select name="project_id" class="form-control">
             <option value="">Select Project Name</option>
            <option value="1">CIVI</option>
            <option value="2">FLORA</option>
          </select>
        </div>
      </div>
        <div class="col-md-6">
        <div class="form-group">
          <label for="name">  Name:</label>
         <input type="text" class="form-control" name="name" />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
          <label for="Mobile Number">Mobile Number:</label>
           <input type="text" class="form-control" name="mobile" />
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="Email Id">Email Id:</label>
          <input type="text" class="form-control" name="email" />
        </div>
      </div>
       <div class="col-md-6">
        <div class="form-group">
          <label for="Address">Address:</label>
          <textarea class="description" name="address" class="form-control"></textarea>
        </div>
      </div>
       <div class="col-md-6">
        <div class="form-group">
          <label for="City">City:</label>
          <input type="text" class="form-control" name="city" />
        </div>
      </div>
       <div class="col-md-6">
        <div class="form-group">
          <label for="State">State:</label>
          <input type="text" class="form-control" name="state" />
        </div>
      </div>
       <div class="col-md-6">
        <div class="form-group">
          <label for="Pincode">Pincode:</label>
          <input type="text" class="form-control" name="pincode" />
        </div>
      </div>
    
      <div class="col-md-6">
       
         <div class="col-md-6">
          <button type="submit" class="btn btn-primary">Add</button>
         </div>
        </div>
       
          
      </form>
  </div>
</div>
</div>

<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>

@endsection