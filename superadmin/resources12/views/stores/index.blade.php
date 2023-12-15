@extends('adminlte::page')

@section('title', 'Civiflora store page')

@section('content_header') 
    <h1>Manage Store</h1>
    <div style="float: right;"><a href="{{ route('stores.create')}}" class="btn btn-primary">Add</a></div>
@stop
<div>
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
@section('content')
<script>
    export default {
        mounted() {
            console.log('Component mounted.');
        },
        created(){
            this.loadData();
        },
        data() {  
            return {
                continents: [],
            }
       },
       methods: {
            loadData: function() {
                axios.get('http://localhost:8000/api/stores')
                  .then(function (response) {
                    // handle success
                    console.log(response.data);
                    this.continents = response.data;
                  })
                  .catch(function (error) {
                    // handle error
                    console.log(error);
                  })
                  .then(function () {
                    // always executed
                  });
            },       
        },  
    }
</script>
  <table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
          <td><b>Sr. No.</b></td>
          <td><b>Location Name</b></td>
          <td><b>Name</b></td>
          <td><b>Contact</b></td>
          <td><b>Email</b></td>
          <td><b>Address</b></td>
          <td><b>Working Hour</b></td>
           <td><b>Social Media</b></td>
          <td colspan="2"><b>Action</b></td>
        </tr>
    </thead>
    <tbody>
        @php
          $i = 1
        @endphp
        @foreach($stores as $store)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$store->location_name}}</td>
            <td>{{$store->name}}</td>
            <td>{{$store->contact}}</td>
            <td>{{$store->email}}</td>
            <td>{{$store->address}}</td>
            <td>{{$store->workinghour}}</td>
            <td>
              @if($store->socialmedia1 == 1) Instagram @endif
              @if($store->socialmedia2 == 2) Facebook @endif  
              @if($store->socialmedia3 == 3) Twitter @endif       
            </td>
            <td><a href="{{ route('stores.edit',$store->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('stores.destroy', $store->id)}}" method="post">
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

{{ $stores->links() }}

@endsection
