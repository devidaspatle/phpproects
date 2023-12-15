@extends('adminlte::page')



@section('title', 'Zero diabetic diet  Page')



@section('content_header') 

    <h1>Manage Allopathic Medicince</h1>

      <div style="float: right;"><a href="{{ route('allopathics.create')}}" class="btn btn-primary">Add</a></div>

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

          <td><b>Brand Name</b></td>

          <td><b>Generic Name</b></td>

          <td><b>Doses</b></td>

          <td><b>Status</b></td>

          <td colspan="2"><b>Action</b></td>

        </tr>

    </thead>

    <tbody>

        @php

          $i = 1

        @endphp

        @foreach($allopathics as $allopathic)

        <tr>

            <td>{{$i++}}</td>
            <td>
                @php
                $centreid = $allopathic->centre_id;
                echo $centres = DB::table('centres')->where('id', $centreid)->value('centre_name');
               @endphp
            </td>
            <td>
                @php
                $patientid = $allopathic->patient_id;
                echo $patient_name = DB::table('patients')->where('patient_id', $patientid)->value('patient_name');
               @endphp
            </td>
            <td>{{$allopathic->brand_name}} </td>

            <td>{{$allopathic->generic_name}}</td>

            <td>{{$allopathic->doses}}</td>

            <td>

              <?php 

                $status = $allopathic->is_active;

                if( $status==1)

                {

              ?>

            <a href="{{ route('allopathics.edit',$allopathic->id, $allopathic->is_active)}}" class="btn btn-green">Active</a>

            <?php } else { ?>

             <a href="{{ route('allopathics.edit',$allopathic->id, $allopathic->is_active)}}" class="btn btn-green">De-active</a>

             <?php } ?>  

            </td>

            <td><a href="{{ route('allopathics.edit',$allopathic->id)}}" class="btn btn-primary">Edit</a></td>

            <td>

                <form action="{{ route('allopathics.destroy', $allopathic->id)}}" method="post">

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

