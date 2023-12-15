
@extends('adminlte::page')

@section('title', 'Civiflora')

@section('content_header') 
    <h1> Edit Newsletter</h1>
@stop
@section('content')

<div class="card uper">
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
      <form method="post" action="{{ route('newsletters.update', $newsletter->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name"> Name:</label>
          <input type="text" class="form-control" name="name" value={{ $newsletter->name }} />
        </div>
        
        <div class="form-group">
          <label for="Email">Email:</label>
          <input type="text" class="form-control" name="email" value={{ $newsletter->email }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection