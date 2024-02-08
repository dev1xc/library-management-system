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
      </div>
      <!-- Column -->
      <!-- Column -->
      <!-- Column -->
      <div class="col-lg-5 col-xlg-5 col-md-7">
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
            <h4 class="text-dark">
              {{ $data->description }}
            </h4>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <p class="text-dark font-weight-bold">Detail</p>
            <table class="table">
              <tbody>
                <tr>
                  <td colspan="2" class="table-active">Larry the Bird</td>
      <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-xlg-4 col-md-7">
        <div class="card">
          <div class="card-body">

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
