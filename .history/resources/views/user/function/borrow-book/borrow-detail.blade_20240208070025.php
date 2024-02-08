@extends('user.layouts.main')
@section('content')
  @php
    $count = 1;
    $data = session()->get('borrow-detail');
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
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @if ($data)
                  @foreach ($data as $c)
                  <tr id="{{ $count}}">
                    <th>{{ $count++ }}</th>
                    <td class="edit"><a href="/admin/edit-book/{{ $c['id_book'] }}">Edit</a></td>
                    <td class="delete"><a href="/admin/delete-book/{{ $c['id_book'] }}"
                        onclick="return deleteBook()">Delete</a></td>
                  </tr>
                @endforeach
                  @else
                    DONT HAVE ANY BOOK YET
                  @endif

                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
