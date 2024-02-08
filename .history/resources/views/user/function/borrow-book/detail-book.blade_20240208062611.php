@extends('user.layouts.main')
@section('content')
  @if ($errors->any())
    <div style="color: red">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-5 align-self-center">
        <h4 class="page-title">Book</h4>
      </div>
      <div class="col-7 align-self-center">
        <div class="d-flex align-items-center justify-content-end">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/admin/home">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="/admin/book">Book</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Add-Book</li>
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
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
      <div class="col-lg-3 col-xlg-3 col-md-5">
        <div class="card">
          <div class="card-body">
            <center> <img src="{{ url('/upload/book/image/' . $data->image) }}" class="" width="200" />
            </center>
          </div>
        </div>
        <span>{{ session()-> }}</span>
        <center><a href="/user/borrow-book/{{ $data->id }}" class="btn btn-success">Borrow</a></center>
      </div>
      <!-- Column -->
      <!-- Column -->
      <!-- Column -->
      <div class="col-lg-9 col-xlg-5 col-md-7">
        <div class="card">
          <div class="card-body">
            <h6 class="text-dark">Author: {{ $data->author }}</h6>
            <h3 class="text-dark">{{ $data->name }}</h3>
            <h3 class="text-warning">{{ $data->price . ' ' . 'đ' }}</h3>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <p class="text-dark font-weight-bold">Detail</p>
            <table class="table">
              <tbody>
                <tr>
                  <td>Category</td>
                  <td>
                    @foreach ($dataCategory as $item)
                      @if ($item->id == $data->id_category)
                        {{ $item->name }}
                      @endif
                    @endforeach
                  </td>
                </tr>
                <tr>
                  <td>Size</td>
                  <td>
                    {{ $data->size }}
                  </td>
                </tr>
                <tr>
                  <td>Page Number</td>
                  <td>
                    {{ $data->page }}
                  </td>
                </tr>
                <tr>
                  <td>Book Cover</td>
                  <td>
                    {{ $data->book_cover }}
                  </td>
                </tr>
                <tr>
                  <td>Publisher</td>
                  <td>
                    @foreach ($dataPublisher as $item)
                      @if ($item->id == $data->id_publisher)
                        {{ $item->name }}
                      @endif
                    @endforeach
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <p class="text-dark font-weight-bold">Detail</p>
            <h4 class="text-dark">
              {{ $data->description }}
            </h4>
          </div>
        </div>
      </div>
      <!-- Column -->
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
  </div>
@endsection
