@extends('adminlte::page')

@section('title', 'Zero Diabetic Diet Page')

@section('content_header') 
    <h1>Manage Diagnosis </h1>
      <div style="float: right;"><a href="{{ route('diagnosis.create')}}" class="btn btn-primary">Add</a></div>
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
         
          <td><b>Diagnosis Name</b></td>
        
          <td colspan="2"><b>Action</b></td>
        </tr>
    </thead>
    <tbody>
        @php
          $i = 1
        @endphp
        @foreach($diagnosis as $diagnosi)
        <tr>
            <td>{{$i++}}</td>
          
            <td>{{$diagnosi->diagnosis_name}}</td>
           
            <td><a href="{{ route('diagnosis.edit',$diagnosi->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('diagnosis.destroy', $diagnosi->id)}}" method="post">
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
