@extends('adminlte::page')

@section('title', 'Zero Diabetic Diet Page')

@section('content_header') 
    <h1>Manage Patient Investigation </h1>
     
@stop
<div>
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
@section('content')
  <table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
          <td><b>Sr. No.</b></td>
           <td><b> Centre Name</b></td>
           <td><b>Patient Name</b></td>
           <td><b> Investigations Name</b></td>
           <td><b>Investigations Value</b></td>
           <td><b>Diagnosis</b></td>
           <td><b>Status</b></td>
           <td colspan="2"><b>Action</b></td>
        </tr>
    </thead>
    <tbody>
        @php
          $i = 1
        @endphp
        @foreach($patientinvests as $patientinvest)
        <tr>
            <td>{{$i++}}</td>
            <td>
                @php
                $centreid = $patientinvest->user_id;
                echo $centres = DB::table('centres')->where('id', $centreid)->value('centre_name');
               @endphp
            </td>
            <td>
                @php
                $patientid = $patientinvest->patient_id;
                echo $patient_name = DB::table('patients')->where('patient_id', $patientid)->value('patient_name');
               @endphp
            </td>
            <td>
                @php
                $diabetes_id = $patientinvest->diabetes_id;
                echo $investigations_name = DB::table('investigations')->where('id',$diabetes_id)->value('investigations_name');
               @endphp
            </td>
            <td>{{$patientinvest->diabetes_value}}</td>
             <td>
                @php
                $diagnosisid = DB::table('investigations')->where('id',$diabetes_id)->value('diagnosis_id');
                echo $diagnosis_name = DB::table('diagnosis')->where('id', $diagnosisid)->value('diagnosis_name');
               @endphp
             </td>
            <td>
              <?php 
                $status = $patientinvest->status ;
                if( $status==1)
                {
              ?>
            <a href="{{ route('patientinvests.edit',$patientinvest->id, $patientinvest->status )}}" class="btn btn-green">Active</a>
            <?php } else { ?>
             <a href="{{ route('patientinvests.edit',$patientinvest->id, $patientinvest->status)}}" class="btn btn-green">De-active</a>
             <?php } ?>  
            </td>
           
            <td>
                <form action="{{ route('patientinvests.destroy', $patientinvest->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
