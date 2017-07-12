@extends("layout/default");
@section("content");
<form class="form-horizontal" action={{"/createCustomer/"}} method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="first_name" class=" text-muted col-sm-2 control-label">First name</label>
      <div class="col-sm-10">
        <input type="text" name="first_name" id="first_name" value="CISSE">
      </div>
  </div>
  <div class="form-group">
    <label for="last_name" class="text-muted col-sm-2 control-label">Last name</label>
      <div class="col-sm-10">
        <input type="text" name="last_name" id="last_name" value="morel">
      </div>
  </div>
  <div class="form-group">
    <label for="last_name" class="text-muted col-sm-2 control-label">Email</label>
      <div class="col-sm-10">
        <input type="text" name="email" id="email" value="">
      </div>
  </div>
  <button class="btn btn-success col-sm-6" type="submit" name="button">Create</button>
</form>

@endsection;
