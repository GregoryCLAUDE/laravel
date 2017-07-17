@extends("layout/default");
@section("content");
<div id="page-wrapper">
  <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">
                Products
              </h1>
              <ol class="breadcrumb">
                  <li class="active">
                      <i class="fa fa-dashboard"></i> Dashboard
                  </li>
              </ol>
          </div>
      </div>
  </div>
  <div class="col-lg-s12">
    <table class="table">

        <thead>
        <tr>
          <th>name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Created at</th>
          <th>Details</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product )
        <tr>
          <td>{{$product->name}}</td>
          <td>{{$product->quantity}}</td>
          <td>{{$product->price}}</td>
          <td>{{$product->created_at}}</td>
          <td>
            <a href={{"/product/".$product->id}}>Details</a>
          </td>
        </tr>
        @endforeach

      </tbody>
      <a href={{"/productNew"}} class="btn btn-success">new product</a>
      </table>
    </div>
  </div>
</div>




@endsection;
