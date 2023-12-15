@extends('adminlte::page')

@section('title', 'Civiflora Categorys Page')

@section('content_header') 
    <h1>Manage Category</h1>
      <div style="float: right;"><a href="{{ route('categorys.create')}}" class="btn btn-primary">Add</a></div>
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
          <td><b>Company Name</b></td>
          <td><b>Category</b></td>
          <td><b>Image</b></td>
          <td><b>Status</b></td>
          <td colspan="2"><b>Action</b></td>
        </tr>
    </thead>
    <tbody>
        @php
          $i = 1
        @endphp
        @foreach($categorys as $category)
        <tr>
            <td>{{$i++}}</td>
            <td><?php if($category->type_menu==1){ echo "CIVI"; }?>
                <?php if($category->type_menu==2){ echo "FLORA"; }?>
            </td>
             <td>{{$category->category}}</td>

            <td> <img src="category/{{ $category->image }}" class="img-responsive" style="width: 50px; height: 40px;"></td>
            <td>
              <?php 
                $status = $category->status;
                if( $status==1)
                {
              ?>
            <a href="{{ route('categorys.edit',$category->id, $category->status)}}" class="btn btn-green">Active</a>
            <?php } else { ?>
             <a href="{{ route('categorys.edit',$category->id, $category->status)}}" class="btn btn-green">De-active</a>
             <?php } ?>  
            </td>
            <td><a href="{{ route('categorys.edit',$category->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('categorys.destroy', $category->id)}}" method="post">
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
