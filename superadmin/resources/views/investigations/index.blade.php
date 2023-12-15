@extends('adminlte::page')

@section('title', 'Zero Diabetic Diet Page')

@section('content_header') 
    <h1>Manage Investigation </h1>
      <div style="float: right;"><a href="{{ route('investigations.create')}}" class="btn btn-primary">Add</a></div>
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
          <td><b>Investigations Name</b></td>
          <td><b>Unit</b></td>
          <td><b>Status</b></td>
          <td colspan="2"><b>Action</b></td>
        </tr>
    </thead>
    <tbody>
        @php
          $i = 1
        @endphp
        @foreach($investigations as $investigation)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$investigation->investigations_name}} </td>
            <td>{{$investigation->investigations_unit}}
            </td>
            <td>
              <?php 
                $status = $investigation->is_active;
                if( $status==1)
                {
              ?>
            <a href="{{ route('investigations.edit',$investigation->id, $investigation->is_active)}}" class="btn btn-green">Active</a>
            <?php } else { ?>
             <a href="{{ route('investigations.edit',$investigation->id, $investigation->is_active)}}" class="btn btn-green">De-active</a>
             <?php } ?>  
            </td>
            <td><a href="{{ route('investigations.edit',$investigation->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('investigations.destroy', $investigation->id)}}" method="post">
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
