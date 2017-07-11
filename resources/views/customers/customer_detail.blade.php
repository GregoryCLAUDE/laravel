@extends("layout/default")
@section("content")
<div id="page-wrapper">
  <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">
                  Details
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
      <h1>debut</h1>

        @foreach ($customer as $detail )
        <form action={{"/updateCustomer/".$detail->id}}  method="post">

          <div >

          <label for="first_name">first name</label>
          <input class="form-control" type="text" id="first_name" name="first_name" value="{{$detail->first_name}}">

          <label for="last_name">last name</label>
          <input class="form-control" type="text" id="last_name" name="last_name" value="{{$detail->last_name}}">

          <label for="email">email</label>
          <input class="form-control" type="text" id="email" name="email" value="{{$detail->email}}">

          <button class="btn btn-success" type="submit" name="button">modify</button>


        </div>
        </form>
        <tr>

                    <td></td>
          <td></td>
          <td></td>

        </tr>
        @endforeach

      </tbody>

      </table>
    </div>
  </div>
</div>

@endsection
