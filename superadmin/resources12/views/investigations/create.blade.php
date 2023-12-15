@extends('adminlte::page')

@section('title', 'Zero Diabetic Diet')

@section('content_header') 
    <h1>    Add Investigations</h1>
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
      <form method="post" action="{{ route('investigations.store') }}" enctype="multipart/form-data">
          
        <div class="form-group">
           {{csrf_field()}}

          <label for="Formulas Name"> Investigations Name:</label>
        <input type="text" class="form-control" name="investigations_name" id="investigations_name"  />
        </div>
        
        
          <div class="form-group">
          <label for="Diagnosis">Unit:</label>
        <input type="text" class="form-control" name="investigations_unit" value={{ $investigation->investigations_unit }} />
        </div>
       
        
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection