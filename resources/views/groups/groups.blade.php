@extends("layout/default");
@section("content");
<div id="page-wrapper">
  <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">
                  Dashboard
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
          <th>Name</th>
          <th>Created at</th>
          <th>Updated at</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($groups as $group )
        <tr>
          <td>{{$group->name}}</td>
          <td>{{$group->created_at}}</td>
          <td>{{$group->updated_at}}</td>
          <td>
            <a href={{"/groups/".$group->id}}>Details</a>

          </td>
        </tr>
        @endforeach

      </tbody>
      <a href={{"groupNew"}} class="btn btn-success">New group</a>
      </table>
    </div>
  </div>
</div>


@endsection;
