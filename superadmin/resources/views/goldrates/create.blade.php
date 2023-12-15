@extends('adminlte::page')

@section('title', 'Civiflora')

@section('content_header') 
    <h1>    Add Gold Rate</h1>
@stop
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper col-md-5">
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('goldrates.store') }}">
        <div class="form-group">
          <label for="quantity">Carat:</label>
          <input type="text" class="form-control" name="carat" />
        </div>
        <div class="form-group">
              @csrf
         <label for="name"> Gold Rate:</label>
         <input type="text" class="form-control" name="gold_rate"  />
        </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection