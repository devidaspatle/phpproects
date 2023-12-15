

@extends('adminlte::page')



@section('title', 'Zero Diabetic Diet Page')


@section('content_header') 

    <h1> Edit Product</h1>

@stop

@section('content')



<div class="card uper">



    <div class="card uper col-md-12">

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

      <form method="post" action="{{ route('prescriptions.update', $prescription->id) }}" enctype="multipart/form-data">

        @method('PATCH')

        @csrf

         <div class="col-md-2">

         <div class="form-group">

              {{csrf_field()}}

           <label for="name">Company Name:</label>

          <select name="type_menu" class="form-control">

             <option value="">Select Company Name</option>

            <option value="1">CIVI</option>

            <option value="2">FLORA</option>

          </select>

        </div>

      </div>

        <div class="col-md-5">

        <div class="form-group">

          <label for="name">  Category Name:</label>

           <select name="categoryid" class="form-control">

           @foreach($categorys as $id=>$category)

             <option value="{{$category->id}}" {{ ( $product->categoryid == $id ) ? 'selected' : 'selected' }}>{{$category->category}}</option>

           @endforeach

          </select>

        </div>

      </div>

       <div class="col-md-5">

        <div class="form-group">

          <label for="price">Subategory Name:</label>

           <select name="subcategoryid" class="form-control">

           @foreach($subcategorys as $id=>$subcategory)

             <option value="{{$subcategory->id}}" {{ ( $product->subcategoryid == $id ) ? 'selected' : 'selected' }}>{{$subcategory->subcategory}}</option>

           @endforeach

          </select>

        </div>

      </div>

       <div class="col-md-12">

        <div class="form-group">

          <label for="quantity">Product Name:</label>

          <input type="text" class="form-control" name="product_name" value={{ $product->product_name }} />

        </div>

      </div>

       <div class="col-md-12">

         <div class="form-group">

          <label for="quantity">Description:</label>

           <textarea class="description" name="description" class="form-control">{{ $product->description }}</textarea>

        </div>

      </div>

       <div class="col-md-6">

        <div class="form-group">

           <label for="Images">Image:</label>

          <input type="file" name="file"/>

            <img src="../../product/{{ $product->image }}" class="img-responsive" style="width: 50px; height: 40px;">

        </div>

      </div>

       <div class="col-md-6">

        <div class="form-group">

          <button type="submit" class="btn btn-primary">Update</button>

        </div>

      </div>

      </form>

  </div>

</div>

</div>

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

<script>

tinymce.init({

    selector:'textarea.description',

    height: 100

});

</script>

@endsection