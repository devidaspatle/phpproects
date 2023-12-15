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
      <form method="post" action="{{ route('patientinvests.store') }}" enctype="multipart/form-data">
          
           

         <div class="form-group">

              {{csrf_field()}}

          <label for="name"> Centre Name:</label>

           <select name="centre_id" class="form-control">
             <option value="">Select Centre Name</option>
           @foreach($centres as $centre)
             <option value="{{$centre->id}}">{{$centre->centre_name}}</option>
           @endforeach
          </select>
        </div>
  
          <div class="form-group">
          <label for="name"> Patient Name:</label>

           <select name="patient_id" class="form-control">
             <option value="">Select Patient Name</option>
           @foreach($patients as $patient)
             <option value="{{$patient->id}}">{{$patient->patient_name}}</option>
           @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="Formulas Name"> Investigations Name:</label>
        <input type="text" class="form-control" name="investigations_name" id="investigations_name"  />
        </div>
        
         <div class="form-group">
          <label for="name"> Diagnosis:</label>

           <select name="diagnosis_id" class="form-control">
             <option value="">Select Diagnosis</option>
           @foreach($diagnosis as $diagnosi)
             <option value="{{$diagnosi->id}}">{{$diagnosi->diagnosis_name}}</option>
           @endforeach
          </select>
        </div>
        
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection