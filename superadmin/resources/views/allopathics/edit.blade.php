

@extends('adminlte::page')



@section('title', 'Zero diabetic diet  Page')



@section('content_header') 

    <h1> Edit Allopathic</h1>

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

      <form method="post" action="{{ route('allopathics.update', $allopathic->id) }}" enctype="multipart/form-data">

        @method('PATCH')

    <div class="form-group">
         @csrf
          <label for="Centre name"> Centre Name:</label>

          <select name="centre_id" class="form-control">
             <option value="">Select Centre Name</option>
           @foreach($centres as $centre)
             <option value="{{$centre->id}}">{{$centre->centre_name}}</option>
           @endforeach
          </select>


        </div>

        <div class="form-group">

          <label for="Patient Name">Patient Name:</label>

           <select name="patient_id" class="form-control">
             <option value="">Select Patient Name</option>
           @foreach($patients as $patient)
             <option value="{{$patient->id}}">{{$patient->patient_name}}</option>
           @endforeach
          </select>

        </div>

        <div class="form-group">
        
          <label for="name"> Brand Name:</label>

          <input type="text" class="form-control" name="brand_name" value="{{ $allopathic->brand_name }}" />

        </div>

        <div class="form-group">

          <label for="Generic Name">Generic Name:</label>

           <input type="text" class="form-control" name="generic_name"  value="{{ $allopathic->generic_name }}" />

        </div>

        
      <div class="form-group">

          <label for="Doses">Doses:</label>

           <input type="text" class="form-control" name="doses"  value="{{ $allopathic->doses }}" />

        </div>

        <button type="submit" class="btn btn-primary">Update</button>

      </form>

  </div>

</div>

</div>

@endsection