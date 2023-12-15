@extends('adminlte::page')

@section('title', 'Civiflora Frequently Asked Questions Page')

@section('content_header') 
    <h1>Manage Frequently Asked Questions</h1>
      <div style="float: right;"><a href="{{ route('faqs.create')}}" class="btn btn-primary">Add</a></div>
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
        @foreach($faqs as $faq)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$faq->title}}</td>
            <td style="text-align: justify;">{{$faq->description}}</td>
            <td><a href="{{route('faqs.edit',$faq->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('faqs.destroy', $faq->id)}}" method="post">
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
