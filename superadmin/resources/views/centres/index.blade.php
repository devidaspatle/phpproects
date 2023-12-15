@extends('adminlte::page')



@section('title', 'Zero diabetic diet  Page')



@section('content_header') 

    <h1>Manage Centres</h1>

      <div style="float: right;"><a href="{{ route('centres.create')}}" class="btn btn-primary">Add</a></div>

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

          <td><b>Centre Name</b></td>

          <td><b>Mobile Number</b></td>

          <td><b>City</b></td>

          <td><b>Address</b></td>

          <td><b>Username</b></td>

          <td><b>Status</b></td>

          <td colspan="2"><b>Action</b></td>

        </tr>

    </thead>

    <tbody>

        @php

          $i = 1

        @endphp

        @foreach($centres as $centre)

        <tr>

            <td>{{$i++}}</td>

            <td>{{$centre->centre_name}} </td>

            <td>{{$centre->mobile_number}}</td>

            <td>{{$centre->city}}</td>

            <td>{{$centre->address}}</td>

            <td>{{$centre->username}}</td>

            <td>

              <?php 

                $status = $centre->is_active;

                if( $status==1)

                {

              ?>

            <a href="{{ route('centres.edit',$centre->id, $centre->is_active)}}" class="btn btn-green">Active</a>

            <?php } else { ?>

             <a href="{{ route('centres.edit',$centre->id, $centre->is_active)}}" class="btn btn-green">De-active</a>

             <?php } ?>  

            </td>

            <td><a href="{{ route('centres.edit',$centre->id)}}" class="btn btn-primary">Edit</a></td>

            <td>

                <form action="{{ route('centres.destroy', $centre->id)}}" method="post">

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

