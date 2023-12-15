@extends('adminlte::page')

@section('title', 'Civiflora Gold Rate Page')

@section('content_header') 
    <h1>Manage Gold Rate</h1>
      <div style="float: right;"><a href="{{ route('goldrates.create')}}" class="btn btn-primary">Add</a></div>
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
           <td><b>Carat</b></td>
          <td><b>Gold Rate</b></td>
          <td colspan="2"><b>Action</b></td>
        </tr>
    </thead>
    <tbody>
       @php
          $i = 1
        @endphp
        @foreach($goldrates as $goldrate)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$goldrate->carat}}</td>
            <td>{{$goldrate->gold_rate}}</td>
          <td><a href="{{ route('goldrates.edit',$goldrate->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('goldrates.destroy', $goldrate->id)}}" method="post">
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
