@extends('adminlte::page')

@section('title', 'Zero Diabetic Diet')

@section('content_header') 
    <h1>    Add Diagnosis</h1>
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
      <form method="post" action="{{ route('diagnosis.store') }}" enctype="multipart/form-data">
          
              @csrf
         
        <div class="form-group">
          <label for="Diagnosis Name"> Diagnosis Name:</label>
        <input type="text" class="form-control" name="diagnosis_name" id="diagnosis_name"  />
        </div>
      
        
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection