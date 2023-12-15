

@extends('adminlte::page')



@section('title', 'Zero Diabetic Diet Page')



@section('content_header') 

    <h1>Manage Product</h1>

    <div style="float: right;"><a href="{{ route('prescriptions.create')}}" class="btn btn-primary">Add</a></div>

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

          <td><b>Patient id</b></td>

          <td><b>Break Fast</b></td>

          <td><b>Lunch</b></td>

          <td><b>Dinner</b></td>

          <td><b> Instruction</b></td>

          <td><b> No of B</b></td>

  		 <td><b> Price</b></td>

          <td><b> Supplements </b></td>

          <td colspan="2"><b>Action</b></td>

        </tr>

    </thead>

    <tbody>

        @php

          $i = 1

        @endphp

        @foreach($prescriptions as $prescription)

        <tr>

            <td>{{$i++}}</td>

            <td>{{$prescription->patient_id}}</td>

            <td>{{$prescription->breakfast}}</td>

            <td>{{$prescription->lunch}}</td>

            <td>{{$prescription->dinner}}</td>

            <td>{{$prescription->instruction}}</td>

             <td>{{$prescription->noofb}}</td>
           
			<td>{{$prescription->price}}</td>

             <td>{{$prescription->supplements_id}}</td>
           
             <td><a href="{{ route('prescriptions.edit', $prescription->id)}}" class="btn btn-primary">Edit</a></td>

            <td>

                <form action="{{ route('prescriptions.destroy', $prescription->id)}}" method="post">

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

