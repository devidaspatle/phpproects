

@extends('adminlte::page')



@section('title', 'Zero Diabetic Diet Page')



@section('content_header') 

    <h1>Manage Patient</h1>

    <div style="float: right;"><a href="{{ route('patients.create')}}" class="btn btn-primary">Add</a></div>

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

          <td><b>ID </b></td>

          <td><b>Centre Name</b></td>

          <td><b>Name</b></td>

          <td><b>Mobile Number</b></td>

          <td><b>Consaltancy</b></td>

          <td><b>City</b></td>

          <td><b>Create Date</b></td>

          <td colspan="2"><b>Action</b></td>

        </tr>

    </thead>

    <tbody>

        @php

          $i = 1

        @endphp

        @foreach($patients as $patient)

        <tr>

            <td>{{$i++}}</td>

             <td>  <?php 
                $centreid = $patient->centre_id;
                echo $centres = DB::table('centres')->where('id', $centreid)->value('centre_name');
              ?>   </td>

            <td>{{$patient->patient_name}}</td>

            <td>{{$patient->mobile_number}}</td>

            <td>{{$patient->Consaltancy}}</td>

            <td>{{$patient->city}}</td>

            <td>{{$patient->created_at}} </td>

           

             <td><a href="{{ route('patients.edit', $patient->id)}}" class="btn btn-primary">Edit</a></td>

            <td>

                <form action="{{ route('patients.destroy', $patient->id)}}" method="post">

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

