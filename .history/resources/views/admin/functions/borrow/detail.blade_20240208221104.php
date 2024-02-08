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
    @if (session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif
        @if ($dataBorrow->status == 0)
        <a href="/admin/borrow-confirm/{{ $dataBorrow->id }}" class="btn btn-success">Confirm</a>
        @elseif ($dataBorrow->status == 1)
        <div class="alert alert-info">Borrowing</div>
        <div class="alert alert-info">Borrowing</div>
        @elseif ($dataBorrow->status == 2)
        <div class="alert alert-success">Refund</div>
        @endif
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
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $c)
                    <tr id="{{ $c['id'] }}">
                      <th>{{ $count++ }}</th>
                      <th scope="row">{{ $c->id }}</th>
                      <td>
                        {{ $c->name }}
                      </td>
                      <td>
                        <img src="{{ asset('upload/book/image/' . $c->image) }}" alt="{{ $c->image }}" height="100px"
                          width="100px">
                      </td>
                      <td>
                        {{ $c->price }}
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- {{ $dataS->links() }} --}}
  </div>
@endsection
