@extends('admin.layouts.main')
@section('content')
  @php
    $count = 1;
  @endphp
  <script>
    function deleteBook() {
      if (!confirm("Are You Sure to delete this"))
        event.preventDefault();
    }
  </script>
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-5 align-self-center">
        <h4 class="page-title">BOOK</h4>
      </div>
      <div class="col-7 align-self-center">
        <div class="d-flex align-items-center justify-content-end">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/admin/home">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Book</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- End Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->

  <div class="container-fluid">
    <div class="form-group">
      <div class="col-sm-12">
        <button class="btn btn-success"><a href="/admin/add-book">Add</a></button>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Ordinal Number</th>
                    <th scope="col">Id</th>
                    <th scope="col">Book</th>
                    <th scope="col">User</th>
                    <th scope="col">Status</th>
                    <th scope="col">Detail</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($dataS as $c)
                    <tr id="{{ $c->id }}">
                      <th>{{ $count++ }}</th>
                      <th scope="row">{{ $c->id }}</th>
                      <td>
                        @foreach ($dataBook as $item)
                          @php
                            $d = explode('|', $c->id_book);
                            $data = [];
                            if (count($d) > 1) {
                                $temp1 = $d[0];
                                $temp2 = $d[1];
                                if ($temp1 == $item->id) {
                                    $data[0] = ['name' => $item['name']];
                                }
                                if ($temp2 == $item->id) {
                                    $data[1] = ['name' => $item['name']];
                                }
                                echo implode('|', array_column($data, 'name'));
                            } else {
                                $temp1 = $d[0];
                                if ($temp1 == $item->id) {
                                    $data[0] = ['name' => $item['name']];
                                }
                                echo implode('|', array_column($data, 'name'));
                            }
                          @endphp
                        @endforeach
                      </td>
                      <td>
                        @foreach ($dataUser as $u)
                          @if ($c->id_user == $u->id)
                            {{ $u->name }}
                          @endif
                        @endforeach
                      </td>
                      <td>
                        @foreach ($dataS as $d)
                          @if ($d->status == 0)
                            <div class="alert alert-danger">Pending</div>
                          @endif
                        @endforeach
                      </td>
                      <td><a href="/admin/borrow-detail/{{ $c->id }}">Action</a></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{ $dataS->links() }}
  </div>
@endsection
