@extends("layout/default");
@section("content");
<div id="page-wrapper">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">
                  group detail
              </h1>
          </div>
          <div class="col-lg-s12">
            @foreach ($group as $detail )
            <form action={{"/updategroup/".$detail->id}}  method="post">
              {{ csrf_field() }}
              <div class="col-lg-s6">
                <div class="input-group">
                  <label for="">name</label>
                  <input class="form-control" type="text" id="name" name="name" value="{{$detail->name}}">
                </div>
              </div>
            <button class="btn btn-warning" type="submit" name="button">update</button>
            <a href={{"/deleteGroup/".$detail->id}} class="btn btn-danger" type="button" name="button"/>delete<a/>
          </form>
          @endforeach
        </div>
      </div>
    </div>
</div>
@endsection;
