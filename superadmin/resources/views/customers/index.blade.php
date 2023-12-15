
@extends('adminlte::page')

@section('title', 'Civiflora Customer page')

@section('content_header') 
    <h1>Manage Customer</h1>
    <div style="float: right;"><a href="{{ route('customers.create')}}" class="btn btn-primary">Add</a></div>
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
          <td><b>ID </b></td>
          <td><b>Project Name</b></td>
          <td><b>Name</b></td>
          <td><b>Mobile Number</b></td>
          <td><b>Email Id</b></td>
          <td><b>Address</b></td>
          <td><b>City</b></td>
          <td><b>Create Date</b></td>
          <td colspan="2"><b>Action</b></td>
        </tr>
    </thead>
    <tbody>
        @php
          $i = 1
        @endphp
        @foreach($customers as $customer)
        <tr>
            <td>{{$i++}}</td>
             <td><?php if($customer->type_menu==1){ echo "CIVI"; }?>
                <?php if($customer->type_menu==2){ echo "FLORA"; }?>
            </td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->mobile}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->address}}</td>
            <td>{{$customer->city}}</td>
            <td>{{$customer->created_at}} </td>
           
             <td><a href="{{ route('customers.edit', $customer->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('customers.destroy', $customer->id)}}" method="post">
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
