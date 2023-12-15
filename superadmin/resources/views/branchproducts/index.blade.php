
@extends('adminlte::page')

@section('title', 'Civiflora Product Store')

@section('content_header') 
    <h1>Manage Product</h1>
    <div style="float: right;"><a href="{{ route('products.create')}}" class="btn btn-primary">Add</a></div>
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
          <td><b>Company Name</b></td>
          <td><b>Category Name</b></td>
          <td><b>Subcategory Name</b></td>
          <td><b>Product Name</b></td>
          <td><b>Description</b></td>
          <td><b> Image</b></td>
          <td colspan="2"><b>Action</b></td>
        </tr>
    </thead>
    <tbody>
        @php
          $i = 1
        @endphp
        @foreach($products as $product)
        <tr>
            <td>{{$i++}}</td>
             <td><?php if($product->type_menu==1){ echo "CIVI"; }?>
                <?php if($product->type_menu==2){ echo "FLORA"; }?>
            </td>
            <td> <?php 
                $categoryid = $product->categoryid;
                echo $categories = DB::table('categories')->where('id', $categoryid)->value('category');
                ?>
             </td>
            <td>
              <?php 
                $subcategoryid = $product->subcategoryid;
                echo $subcategory = DB::table('subcategories')->where('id', $subcategoryid)->value('subcategory');
                ?>
              </td>
            <td>{{$product->product_name}}</td>
            <td>{{$product->description}}</td>
               <td>
          <?php
                $images = $product->image;
               
                $productImages = json_decode($images);

          ?>
                <img src="product/{{ $productImages[0] }}" class="img-responsive" style="width: 50px; height: 40px;"></td>
           
             <td><a href="{{ route('products.edit', $product->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('products.destroy', $product->id)}}" method="post">
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
