
@extends('adminlte::page')

@section('title', 'Civiflora')

@section('content_header') 
    <h1> Edit Gold Rate</h1>
@stop
@section('content')

<div class="card uper col-md-5">
  <div class="card-header">
   
  </div>
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
      <form method="post" action="{{ route('goldrates.update', $goldrate->id) }}">
        @method('PATCH')
        @csrf
         <div class="form-group">
          <label for="Carat">Carat:</label>
          <input type="text" class="form-control" name="carat" value={{ $goldrate->carat }} />
        </div>
        <div class="form-group">
          <label for="Gold Rate"> Gold Rate:</label>
          <input type="text" class="form-control" name="gold_rate" value={{ $goldrate->gold_rate }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection