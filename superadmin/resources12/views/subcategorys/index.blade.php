@extends('adminlte::page')

@section('title', 'Civiflora Subcategory page')

@section('content_header') 
    <h1>Manage Subcategory</h1>
    <div style="float: right;"><a href="{{ route('subcategorys.create')}}" class="btn btn-primary">Add</a></div>
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
          <td><b>Category Name</b></td>
          <td><b>Subcategory Name</b></td>
          <td><b>Image</b></td>
          <td colspan="2"><b>Action</b></td>
        </tr>
    </thead>
    <tbody>
        @php
          $i = 1
        @endphp
        @foreach($subcategories as $subcategory)
        <tr>
            <td>{{$i++}}</td>
              <td><?php if($subcategory->type_menu==1){ echo "CIVI"; }?>
                <?php if($subcategory->type_menu==2){ echo "FLORA"; }?>
            </td>
            <td>
              <?php 
                $categoryid = $subcategory->categoryid;
                echo $categories = DB::table('categories')->where('id', $categoryid)->value('category');
              ?>   
            </td>
            <td>{{$subcategory->subcategory}}</td>
            <td> <img src="subcategory/{{ $subcategory->image }}" class="img-responsive" style="width: 50px; height: 40px;"></td>
            <td><a href="{{ route('subcategorys.edit',$subcategory->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('subcategorys.destroy',$subcategory->id)}}" method="post">
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
