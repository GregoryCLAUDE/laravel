@extends("layout/default");
@section("content");
<form class="form-horizontal" action={{"/createGroup/"}} method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="name" class=" text-muted col-sm-2 control-label">Name</label>
      <div class="col-sm-10">
        <input type="text" name="name" id="name">
      </div>
  </div>
  <button class="btn btn-success col-sm-6" type="submit" name="button">Create</button>
</form>
@endsection;
