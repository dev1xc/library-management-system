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
        <h4 class="page-title">Profile</h4>
      </div>
      <div class="col-7 align-self-center">
        <div class="d-flex align-items-center justify-content-end">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/admin/home">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="/admin/user">User</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Add-User</li>
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
                <label class="col-md-12">Full Name</label>
                <div class="col-md-12">
                  <input type="text" value="" class="form-control form-control-line" name="name">
                </div>
              </div>
              <div class="form-group">
                <label for="example-email" class="col-md-12">Email</label>
                <div class="col-md-12">
                  <input type="email" value="" class="form-control form-control-line" name="email"
                    id="example-email">
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="col-md-12">Password</label>
                <div class="col-md-12">
                  <input type="password" value="" class="form-control form-control-line" name="password"
                    id="password">
                </div>
              </div>
              <div class="form-group">
                <label for="phone" class="col-md-12">Phone</label>
                <div class="col-md-12">
                  <input type="text" value="" class="form-control form-control-line" name="phone"
                    id="phone">
                </div>
              </div>
              <div class="form-group">
                <label for="phone" class="col-md-12">Gender</label>
                <div class="col-md-12">
                  <select class="col-12" name="gender" id="gender">
                    <option value="">Chose gender</option>
                    <option value="nam">Male
                    </option>
                    <option value="nu">Female
                    </option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="country" class="col-md-12">Country</label>
                <div class="col-md-12">
                  <input type="text" value="" class="form-control form-control-line"
                    name="country" id="country">
                </div>
              </div>
              <div class="form-group">
                <label for="image" class="col-md-12">Image</label>
                <div class="col-md-12">
                  <input type="file" value="" class="form-control form-control-line"
                    name="image" id="image">
                </div>
              </div>
              <div class="form-group">
                <label for="level" class="col-md-12">Level</label>
                <div class="col-md-12">
                  <select class="col-12" name="gender" id="gender">
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
