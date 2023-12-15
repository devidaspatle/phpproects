
@extends('adminlte::page')

@section('title', 'Civiflora Frequently Asked Questions Page')

@section('content_header') 
    <h1> Edit Frequently Asked Questions</h1>
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
      <form method="post" action="{{ route('faqs.update', $faqs->id) }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name"> Name:</label>
          <input type="text" class="form-control" name="title" value={{ $faqs->title }} >
        </div>
        
        <div class="form-group">
          <label for="Email">Description:</label>
          <textarea class="description" name="description" class="form-control">{{$faqs->description}}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
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