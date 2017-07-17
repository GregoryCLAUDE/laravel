@extends ("layout/default");
@section("content");
<div id="page-wrapper">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">
                  product detail
              </h1>
          </div>
          <div class="col-lg-s12">
            @foreach ($product as $detail )
            <form action={{"/updateProduct/".$detail->id}}  method="post">
              {{ csrf_field() }}
              <div class="col-lg-s6">
                <div class="input-group">
                  <label for="name">name</label>
                  <input class="form-control" type="text" id="name" name="name" value="{{$detail->name}}">
                </div>
              </div>
              <div class="col-lg-s6">
                <div class="input-group">
                  <label for="quantity">quantity</label>
                  <input class="form-control" type="text" id="quantity" name="quantity" value="{{$detail->quantity}}">
                </div>
              </div>
              <div class="col-lg-s6">
                <div class="input-group">
                  <label for="price">price</label>
                  <input class="form-control" type="text" id="price" name="price" value="{{$detail->price}}">
                </div>
              </div>
            <button class="btn btn-warning" type="submit" name="button">update</button>
            <a href={{"/deleteProduct/".$detail->id}} class="btn btn-danger" type="button" name="button"/>delete<a/>
          </form>
          @endforeach
        </div>
      </div>
    </div>
</div>

@endsection;
