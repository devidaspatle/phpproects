@extends('adminlte::page')

@section('title', 'Civiflora')

@section('content_header') 
    <h1>  Add Product</h1>
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
      <form method="post" action="{{ route('products.store') }}"  accept-charset="utf-8" enctype="multipart/form-data">
        <div class="col-md-6">
         <div class="form-group">
              {{csrf_field()}}
          <label for="name"> Company Name:</label>
         <select name="type_menu" class="form-control">
             <option value="">Select Company Name</option>
            <option value="1">CIVI</option>
            <option value="2">FLORA</option>
          </select>
        </div>
      </div>
        <div class="col-md-6">
        <div class="form-group">
          <label for="name"> Category Name:</label>
         <select name="categoryid" class="form-control">
            <option value="">Select Category</option>
           @foreach($categorys as $category)
             <option value="{{$category->id}}">{{$category->category}}</option>
           @endforeach
          </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
          <label for="price">Subcategory Name:</label>
          <select name="subcategoryid" class="form-control">
              <option value="">Select Subcategory</option>
           @foreach($subcategorys as $subcategory)
             <option value="{{$subcategory->id}}">{{$subcategory->subcategory}}</option>
           @endforeach
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="quantity">Product Name:</label>
          <input type="text" class="form-control" name="product_name" />
        </div>
      </div>
      <div class="col-md-12">
         <div class="form-group">
          <label for="quantity">Description:</label>
          <textarea class="form-control" name="description" rows="7"></textarea>
        </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
           <label for="Images">Image:</label>
           <input type='file' id="image" name="image[]" accept=".png, .jpg, .jpeg" multiple="multiple" />
       </div>
         <div class="col-md-6">
          <button type="submit" class="btn btn-primary">Add</button>
         </div>
        </div>
       
          
      </form>
  </div>
</div>
</div>

<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>

@endsection