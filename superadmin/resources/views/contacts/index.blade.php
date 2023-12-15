@extends('adminlte::page')

@section('title', 'Civiflora Contact page')

@section('content_header') 
    <h1>Manage Contact</h1>
    <div style="float: right;"><a href="{{ route('contacts.create')}}" class="btn btn-primary">Add</a></div>
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
          <td><b>Name</b></td>
          <td><b>Designation</b></td>
          <td><b>Loan Incharge</b></td>
          <td><b>Phone No.</b></td>
          <td colspan="2"><b>Action</b></td>
        </tr>
    </thead>
    <tbody>
        @php
          $i = 1
        @endphp
        @foreach($contacts as $contact)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$contact->name}}</td>
            <td>{{$contact->designation}}</td>
            <td>{{$contact->loan_incharge}}</td>
            <td>{{$contact->phoneno}}</td>
            <td><a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
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
