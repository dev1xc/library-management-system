@extends('user.layouts.main')
@section('content')
@php
    foreach ($dataBook as $value) {

    }
@endphp
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
      <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
          <div class="card-body">
            <center class="m-t-30"> <img src="{{ url('/upload/book/image/' . $data->image) }}" class=""
                width="150" />
              <h4 class="card-title m-t-10 text-dark">{{ $data->name }}</h4>
              <h5 class="card-title m-t-10">{{ $data->author }}</h5>
            </center>
          </div>
          <div>
            <hr>
          </div>
          <div class="card-body">
            <small class="text-muted">Category</small>
            <h6>
              @foreach ($dataCategory as $dC)
                @if ($dC->id == $data->id_category)
                  {{ $dC->name }}
                @endif
              @endforeach
            </h6>
            <small class="text-muted">Language</small>
            <h6>
              @foreach ($dataLanguage as $dL)
                @if ($dL->id == $data->id_language)
                  {{ $dL->name }}
                @endif
              @endforeach
            </h6>
            <small class="text-muted">Page Number </small>
            <h6>{{ $data->page }}</h6>
            <small class="text-muted p-t-30 db">Book Rental Price</small>
            <h6>{{ $data->price }}</h6>
            <small class="text-muted p-t-30 db">Laguage</small>
            <h6>{{ $data->language }}</h6>
            <small class="text-muted p-t-30 db">Size</small>
            <h6>{{ $data->size }}</h6>
            <small class="text-muted p-t-30 db">Book Cover</small>
            <h6>{{ $data->book_cover }}</h6>
            <small class="text-muted p-t-30 db">Publisher</small>
            <h6>
              @foreach ($dataPublisher as $dP)
                @if ($dP->id == $data->id_publisher)
                  {{ $dP->name }}
                @endif
              @endforeach
            </h6>
          </div>
        </div>
      </div>
      <!-- Column -->
      <!-- Column -->
      <!-- Column -->
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
