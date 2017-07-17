@extends("layout/default");
@section("content");
<form class="form-horizontal" action={{"/createProduct/"}} method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="name" class=" text-muted col-sm-2 control-label">Name</label>
      <div class="col-sm-10">
        <input type="text" name="name" id="name" value="">
      </div>
  </div>
  <div class="form-group">
    <label for="quantity" class="text-muted col-sm-2 control-label">Quantity</label>
      <div class="col-sm-10">
        <input type="text" name="quantity" id="quantity" value="">
      </div>
  </div>
  <div class="form-group">
    <label for="price" class="text-muted col-sm-2 control-label">Price</label>
      <div class="col-sm-10">
        <input type="text" name="price" id="price" value="">
      </div>
  </div>
  <button class="btn btn-success col-sm-6" type="submit" name="button">Create</button>
</form>

@endsection;
