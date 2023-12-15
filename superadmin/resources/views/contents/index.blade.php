@extends('adminlte::page')

@section('title', 'Civiflora Content Page')

@section('content_header') 
    <h1>Manage Content</h1>
      <div style="float: right;"><a href="{{ route('contents.create')}}" class="btn btn-primary">Add</a></div>
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
          <td><b>Title</b></td>
          <td><b>Description</b></td>
          <td colspan="2"><b>Action</b></td>
        </tr>
    </thead>
    <tbody>
        @php
          $i = 1
        @endphp
        @foreach($contents as $content)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$content->title}}</td>
            <td>{{$content->description}}</td>
            <td><a href="{{ route('contents.edit',$content->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('contents.destroy', $content->id)}}" method="post">
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
