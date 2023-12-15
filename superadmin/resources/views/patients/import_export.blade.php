<?php

   $servername = "localhost";

  $username = "root";

  $password = "";

  $dbname = "asthvinayak_shopping";



  // Create connection

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection

  if (!$conn) {

      die("Connection failed: " . mysqli_connect_error());

  }

 ?>

@extends('adminlte::page')



@section('title', 'Zero Diabetic Diet Page')



@section('content_header') 

    <h1>Manage Patient</h1>

    <div style="float: right;"><a href="{{ route('products.create')}}" class="btn btn-primary">Add</a></div>

@stop

<div>

  @if(session()->get('success'))

    <div class="alert alert-success">

      {{ session()->get('success') }}  

    </div><br />

  @endif

@section('content')

 

<div class="container">

<div class="panel panel-primary">

 <div class="panel-heading">Laravel 5.6 - import export data into excel and csv using maatwebsite </div>

  <div class="panel-body"> 

  <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-12">

        <a href="{{ route('export.file',['type'=>'xls']) }}">Download Excel xls</a> |

        <a href="{{ route('export.file',['type'=>'xlsx']) }}">Download Excel xlsx</a> |

        <a href="{{ route('export.file',['type'=>'csv']) }}">Download CSV</a>

      </div>

   </div>     

       {!! Form::open(array('route' => 'import.file','method'=>'POST','files'=>'true')) !!}

        <div class="row">

           <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    {!! Form::label('sample_file','Select File to Import:',['class'=>'col-md-3']) !!}

                    <div class="col-md-9">

                    {!! Form::file('sample_file', array('class' => 'form-control')) !!}

                    {!! $errors->first('sample_file', '<p class="alert alert-danger">:message</p>') !!}

                    </div>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            {!! Form::submit('Upload',['class'=>'btn btn-primary']) !!}

            </div>

        </div>

       {!! Form::close() !!}

 </div>

</div>

</div>



</div>

@endsection

