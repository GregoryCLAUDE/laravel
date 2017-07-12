@extends("layout/default")
@section("content")
<div id="page-wrapper">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">
                  customers detail
              </h1>
          </div>
          <div class="col-lg-s12">
            @foreach ($customer as $detail )
            <form action={{"/updateCustomer/".$detail->id}}  method="post">
              {{ csrf_field() }}
              <div class="col-lg-s6">
                <div class="input-group">
                  <label for="first_name">first name</label>
                  <input class="form-control" type="text" id="first_name" name="first_name" value="{{$detail->first_name}}">
                </div>
              </div>
              <div class="col-lg-s6">
                <div class="input-group">
                  <label for="last_name">last name</label>
                  <input class="form-control" type="text" id="last_name" name="last_name" value="{{$detail->last_name}}">
                </div>
              </div>
              <div class="col-lg-s6">
                <div class="input-group">
                  <label for="email">email</label>
                  <input class="form-control" type="text" id="email" name="email" value="{{$detail->email}}">
                </div>
              </div>
            <button class="btn btn-success" type="submit" name="button">modify</button>
            <a href={{"/deleteCustomer/".$detail->id}} class="btn btn-danger" type="button" name="button"/>delete<a/>
          </form>
          @endforeach
        </div>
      </div>
    </div>
</div>
@endsection
