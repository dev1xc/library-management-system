@extends('admin.layouts.main')
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
      <!-- Column -->
      <!-- Column -->
      <!-- Column -->
      <div class="col-lg-10 col-xlg-10 col-md-7">
        <div class="card">
          <div class="card-body">
            <form class="form-horizontal form-material" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label class="col-md-12">Name</label>
                <div class="col-md-12">
                  <input type="text" value="" class="form-control form-control-line" name="name">
                </div>
              </div>
              <div class="form-group">
                <label for="example-email" class="col-md-12">Description</label>
                <div class="col-md-12">
                  <input type="email" value="" class="form-control form-control-line" name="description"
                    id="example-email">
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="col-md-12">Author</label>
                <div class="col-md-12">
                  <input type="text" value="" class="form-control form-control-line" name="author"
                    id="password">
                </div>
              </div>
              <div class="form-group">
                <label for="phone" class="col-md-12">Price</label>
                <div class="col-md-12">
                  <input type="text" value="" class="form-control form-control-line" name="price"
                    id="phone">
                </div>
              </div>
              <div class="form-group">
                <label for="phone" class="col-md-12">Inventory</label>
                <div class="col-md-12">
                  <input type="text" value="" class="form-control form-control-line" name="inventory"
                    id="phone">
                </div>
              </div>
              <div class="form-group">
                <label for="country" class="col-md-12">Category</label>
                <div class="col-md-12">
                  <select name="id_category" id="Category"></select>
              </div>
              <div class="form-group">
                <label for="level" class="col-md-12">Level</label>
                <div class="col-md-12">
                  <select class="col-12" name="level" id="gender">
                    <option value="0">User
                    </option>
                    <option value="1">Admin
                    </option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <button class="btn btn-success" type="submit">Update Profile</button>
                </div>
              </div>

            </form>
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
