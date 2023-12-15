@extends('adminlte::page')

@section('title', 'Civiflora Frequently Asked Questions Page')

@section('content_header') 
    <h1>    Add Frequently Asked Questions</h1>
@stop
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
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
      <form method="post" action="{{ route('faqs.store') }}" enctype="multipart/form-data">
           <div class="form-group">
              @csrf
          <label for="name"> Name:</label>
        <input type="text" class="form-control" name="title"  />
        </div>
        <div class="form-group">
          <label for="quantity">Description:</label>
          <textarea class="description" name="description" class="form-control"></textarea>
        </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
tinymce.init({
    selector:'textarea.description',
    height: 300
});
</script>
@endsection