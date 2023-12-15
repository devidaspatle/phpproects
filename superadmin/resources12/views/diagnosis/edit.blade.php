
@extends('adminlte::page')

@section('title', 'Zero Diabetic Diet Page')

@section('content_header') 
    <h1> Edit Diagnosis</h1>
@stop
@section('content')

<div class="card uper">
  <div class="card-header">
   
  </div>
  <div class="card uper col-md-6">
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
      <form method="post" action="{{ route('diagnosis.update', $diagnosis->id) }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
         
        <div class="form-group">

          <label for="name">  Diagnosis Name:</label>
          <input type="text" class="form-control" name="diagnosis_name" value={{ $diagnosis->diagnosis_name }} />
        </div>
     
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
</div>
@endsection