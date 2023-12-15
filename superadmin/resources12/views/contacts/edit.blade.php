
@extends('adminlte::page')

@section('title', 'Civiflora')

@section('content_header') 
    <h1> Edit Contact</h1>
@stop
@section('content')

<div class="card uper">
  <div class="card-header">
   
  </div>
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
      <form method="post" action="{{ route('contacts.update', $contact->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name"> Name:</label>
          <input type="text" class="form-control" name="name" value={{ $contact->name }} />
        </div>
        <div class="form-group">
          <label for="Designation">Designation :</label>
      <input type="text" class="form-control" name="designation" value={{ $contact->designation }} />
        </div>
        <div class="form-group">
          <label for="Loan Incharge">Loan Incharge:</label>
          <input type="text" class="form-control" name="loan_incharge" value={{ $contact->loan_incharge }} />
        </div>
         <div class="form-group">
          <label for="Phone No">Phone No:</label>
           <input type="text" class="form-control" name="phoneno" value={{ $contact->phoneno }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection