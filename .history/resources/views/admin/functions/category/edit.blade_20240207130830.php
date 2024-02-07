@extends('admin.layouts.main')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible">
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
        <h4 class="page-title">ADD-CATEGORY</h4>
      </div>
      <div class="col-7 align-self-center">
        <div class="d-flex align-items-center justify-content-end">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/admin/home">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="/admin/category">Categories</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Edit-Category</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <form method="post">
                @csrf
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" value="{{ $data -> title }}" class="form-control form-control-line" name="title">
                    </div>
                    <div class="col-md-12">
                        <input type="text" value="{{ $data -> description }}" class="form-control form-control-line" name="description">
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success" type="submit">Add Category</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
