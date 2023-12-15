@extends('adminlte::page')

@section('title', 'Zero Diabetic Diet Page')

@section('content_header') 
    <h1>Manage Formula </h1>
      <div style="float: right;"><a href="{{ route('formulas.create')}}" class="btn btn-primary">Add</a></div>
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
          <td><b>Formulas Name</b></td>
          <td><b>Formulas Rate</b></td>
          <td><b>Status</b></td>
          <td colspan="2"><b>Action</b></td>
        </tr>
    </thead>
    <tbody>
        @php
          $i = 1
        @endphp
        @foreach($formulas as $formula)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$formula->formulas_name}} </td>
            <td>{{$formula->formulas_rate}}</td>
            <td>
              <?php 
                $status = $formula->is_active;
                if( $status==1)
                {
              ?>
            <a href="{{ route('formulas.edit',$formula->id, $formula->is_active)}}" class="btn btn-green">Active</a>
            <?php } else { ?>
             <a href="{{ route('formulas.edit',$formula->id, $formula->is_active)}}" class="btn btn-green">De-active</a>
             <?php } ?>  
            </td>
            <td><a href="{{ route('formulas.edit',$formula->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('formulas.destroy', $formula->id)}}" method="post">
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
