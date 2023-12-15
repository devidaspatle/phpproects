@extends('adminlte::page')



@section('title', 'Zero Diabetic Diet Page')



@section('content_header') 

    <h1>  Add Prescriptions</h1>

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

      <form method="post" action="{{ route('prescriptions.store') }}"  accept-charset="utf-8" enctype="multipart/form-data">

        <div class="col-md-6">

         <div class="form-group">

              {{csrf_field()}}

          <label for="name"> Break Fast:</label>

       <input type="text" class="form-control" name="breakfast" />

        </div>

      </div>

        <div class="col-md-6">

        <div class="form-group">

          <label for="name"> Lunch:</label>

          <input type="text" class="form-control" name="lunch" />

        </div>

    </div>

    <div class="col-md-6">

        <div class="form-group">

          <label for="price">Dinner:</label>

           <input type="text" class="form-control" name="dinner" />

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

          <input type="text" class="form-control" name="product_name" />

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