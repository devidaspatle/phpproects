
@extends('adminlte::page')

@section('title', 'Civiflora')

@section('content_header') 
    <h1> Edit Customer</h1>
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
      <form method="post" action="{{ route('customers.update', $customer->id) }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
         <div class="col-md-2">
         <div class="form-group">
              {{csrf_field()}}
          <label for="name">Project Name:</label>
            <select name="project_id" class="form-control">
             <option value="">Select Project Name</option>
            <option value="1">CIVI</option>
            <option value="2">FLORA</option>
          </select>
        </div>
      </div>
        <div class="col-md-5">
        <div class="form-group">
          <label for="name">  Name:</label>
         <input type="text" class="form-control" name="name" value="{{ $customer->name }}"/>
        </div>
      </div>
       <div class="col-md-5">
        <div class="form-group">
          <label for="Mobile Number">Mobile Number:</label>
           <input type="text" class="form-control" name="mobile" value="{{ $customer->mobile }}" />
        </div>
      </div>
       <div class="col-md-6">
        <div class="form-group">
           <label for="Email Id">Email Id:</label>
          <input type="text" class="form-control" name="email" value="{{ $customer->email }}" />
        </div>
      </div>
       <div class="col-md-6">
        <div class="form-group">
           <label for="Address">Address:</label>
            <textarea class="description" name="address" class="form-control">{{ $customer->address }}</textarea>
        </div>
      </div>
      
       <div class="col-md-6">
        <div class="form-group">
           <label for="quantity">City:</label>
          <input type="text" class="form-control" name="city" value="{{ $customer->city }}" />
        </div>
      </div>
       <div class="col-md-6">
        <div class="form-group">
           <label for="state">State:</label>
          <input type="text" class="form-control" name="state" value="{{ $customer->state }}" />
        </div>
      </div>
       <div class="col-md-6">
         <div class="form-group">
          <label for="Pincode">Pincode:</label>
            <input type="text" class="form-control" name="pincode" value="{{ $customer->pincode }}" />
        </div>
      </div>
       <div class="col-md-6">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
     
      </form>
  </div>
</div>
</div>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
tinymce.init({
    selector:'textarea.description',
    height: 100
});
</script>
@endsection