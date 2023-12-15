

@extends('adminlte::page')



@section('title', 'Zero Diabetic Diet Page')



@section('content_header') 

    <h1> Edit Patient</h1>

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

      <form method="post" action="{{ route('patients.update', $patient->id) }}" enctype="multipart/form-data">

        @method('PATCH')

        @csrf

         <div class="col-md-2">

         <div class="form-group">

              {{csrf_field()}}

          <label for="name">Centre Name:</label>

         
          <select name="centre_id" class="form-control">

             <option value="">Select Centre Name</option>

            <option value="1">Test</option>

            <option value="2">Test</option>

          </select>

        </div>

      </div>

       <div class="col-md-6">

        <div class="form-group">

          <label for="name"> Password:</label>

         <input type="password" class="form-control" name="password" value={{ $patient->password }} />

        </div>

    </div>
        <div class="col-md-6">

        <div class="form-group">

          <label for="name"> Patient Name:</label>

         <input type="text" class="form-control" name="patient_name" value={{ $patient->patient_name }} />

        </div>

    </div>
<div class="col-md-6">

        <div class="form-group">

          <label for="Surname">Surname:</label>

           <input type="text" class="form-control" name="surname" value={{ $patient->patient_name }}/>

        </div>

      </div>

<div class="col-md-6">

        <div class="form-group">

          <label for="Mobile Number">Marital Status:</label>

          <input type="radio" id="marital_status" name="marital_status" value="Single"> Single  &nbsp;&nbsp;<input type="radio" id="marital_status" name="marital_status" value="Married"> Married &nbsp;&nbsp;<input type="radio" id="marital_status" name="marital_status" value="Other"> 

        </div>

      </div>
       <div class="col-md-6">

        <div class="form-group">

          <label for="Gender">Gender:</label>

          <input type="radio"  name="gender" value="Male"> Male  &nbsp;&nbsp;<input type="radio" name="gender" value="Female"> Female

        </div>

      </div>
       <div class="col-md-6">

        <div class="form-group">

          <label for="Age">Age:</label>

           <input type="text" name="age" id="age"  value={{ $patient->patient_name }} maxlength="3" class="form-control" />

        </div>

      </div>
       <div class="col-md-6">

        <div class="form-group">

          <label for="Date of Birth">Date of Birth:</label>

          <input type="date" name="date_of_birth" id="date_of_birth"  maxlength="30"  class="form-control" value={{ $patient->patient_name }}>

        </div>

      </div>
        <div class="col-md-6">

        <div class="form-group">

          <label for="Email Id">Email Id:</label>

          <input type="text" class="form-control" name="email" value={{ $patient->patient_name }} />

        </div>

      </div>
    <div class="col-md-6">

        <div class="form-group">

          <label for="Mobile Number">Mobile Number:</label>

           <input type="text" class="form-control" name="mobile_number" value={{ $patient->patient_name }} />

        </div>

      </div>

      <div class="col-md-6">

        <div class="form-group">

          <label for="Country">Country:</label>

          <input type="text" class="form-control" name="email" value={{ $patient->patient_name }}/>

        </div>

      </div>
       <div class="col-md-6">

        <div class="form-group">

          <label for="Country">State:</label>

          <input type="text" class="form-control" name="email" value={{ $patient->patient_name }}/>

        </div>

      </div>
       <div class="col-md-6">

        <div class="form-group">

          <label for="Country">City/Town:</label>

          <input type="text" class="form-control" name="email" value={{ $patient->patient_name }}/>

        </div>

      </div>
        <div class="col-md-6">

        <div class="form-group">

          <label for="Country">District:</label>

          <input type="text" class="form-control" name="district" value={{ $patient->patient_name }} />

        </div>

      </div>
       <div class="col-md-6">

        <div class="form-group">

          <label for="Country">Pincode:</label>

          <input type="text" class="form-control" name="pincode" value={{ $patient->patient_name }}/>

        </div>

      </div>
      <div class="form-group col-md-12">

          <b>How did you come to know Appropriate Diet Therapy Centre </b>

        </div>
    
    <div class="col-md-6">

        <div class="form-group">

          <label for="Weight">Blood Group:</label>

          
        <select id="name="blood_group" id="blood_group""  class="form-control" required>
          <option value="">Select Blood Group</option>
          <option value="1">A+</option>
          <option value="2">O+</option>
          <option value="3">B+</option>
          <option value="4">AB+</option>
          <option value="5">A-</option>
          <option value="6">O-</option>
          <option value="7">B-</option>
          <option value="8">AB+</option>
      </select>
        </div>

      </div>

       <div class="col-md-6">

        <div class="form-group">

          <label for="Known Allergy If Any">Known Allergy If Any:</label>

          <input type="text" class="form-control" name="allergy" id="allergy" value={{ $patient->patient_name }} />

        </div>

      </div>
       <div class="col-md-4">

        <div class="form-group">

          <label for="Weight">Weight:</label>

          <input type="text" class="form-control" name="weight" value={{ $patient->patient_name }} />

        </div>

      </div>
       <div class="col-md-4">

        <div class="form-group">

          <label for="Height">Height:</label>

          <input type="text" class="form-control" name="height" value={{ $patient->patient_name }} />

        </div>

      </div>
       <div class="col-md-4">

        <div class="form-group">

          <label for="BMI">BMI:</label>

          <input type="text" class="form-control" name="bmi" value={{ $patient->patient_name }} />

        </div>

      </div>
       <div class="col-md-4">

        <div class="form-group">

          <label for="Blood Group">Registration Amount :</label>

          <input type="text" class="form-control" name="amount" id="amount" readonly="readonly" value="1000" />

        </div>

      </div>

       <div class="col-md-4">

        <div class="form-group">

          <label for="Consaltancy Charges">Consaltancy Charges:</label>

          <input type="text" class="form-control" name="consaltancy" id="consaltancy" value={{ $patient->patient_name }} />

        </div>

      </div>
       <div class="col-md-4">

        <div class="form-group">

          <label for="Mode of Payment">Mode of Payment:</label>
      <select id="name="mode_payment" id="mode_payment""  class="form-control" required>
          <option value="">Select Mode of Payment</option>
          <option value="1">Cash</option>
          <option value="2">Net Banking</option>
          <option value="3">Debit Card</option>
      </select>
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