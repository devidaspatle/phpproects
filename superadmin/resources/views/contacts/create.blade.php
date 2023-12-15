@extends('adminlte::page')

@section('title', 'Civiflora')

@section('content_header') 
    <h1>   Add Contacts</h1>
@stop
@section('content')

<div class="card uper">

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
      <form method="post" action="{{ route('contacts.store') }}">
        <div class="form-group">
              @csrf
          <label for="name"> Name:</label>
        <input type="text" class="form-control" name="name"  />
        </div>

        <div class="form-group">
         <label for="Designation">Designation :</label>
          <input type="text" class="form-control" name="designation"/>
        </div>
        <div class="form-group">
           <label for="Loan Incharge">Loan Incharge:</label>
          <input type="text" class="form-control" name="loan_incharge"/>
        </div>
         <div class="form-group">
          <label for="Phone No">Phone No:</label>
           <input type="text" class="form-control" name="phoneno"/>
        </div>
        
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection