@extends('admin.layouts.main')
@section('content')
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
                      <li class="breadcrumb-item active" aria-current="page">Categories</li>
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
        <div class="row">
            <form method="post">
                @csrf
                <div class="form-group">
                    <label class="col-md-12">Name</label>
                    <div class="col-md-12">
                        <input type="text" value="" class="form-control form-control-line" name="name">
                    </div>
                    <label class="col-md-12">Title</label>
                    <div class="col-md-12">
                        <input type="text" value="" class="form-control form-control-line" name="title">
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success" type="submit">Add Brand</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
