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
              <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
      <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
          <div class="card-body">
            <center class="m-t-30"> <img src="{{ url('/upload/user/avatar/' . $data->image) }}" class="rounded-circle"
                width="150" />
              <h4 class="card-title m-t-10">{{ $data->name }}</h4>
              <h4 class="card-title m-t-15">
                @if (($data->level)==1)
                    <span style="color: red">ADMIN</span>
                    @else
                    <span style="color: red">ADMIN</span>
                    USER
                @endif
              </h4>
            </center>
          </div>
          <div>
            <hr>
          </div>
          <div class="card-body">
            <small class="text-muted">Email address </small>
            <h6>{{ $data->email }}</h6>
            <small class="text-muted p-t-30 db">Phone</small>
            <h6>{{ $data->phone }}</h6>
            <small class="text-muted p-t-30 db">Address</small>
            <h6>{{ $data->country }}</h6>
          </div>
        </div>
      </div>
      <!-- Column -->
      <!-- Column -->
      <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
          <div class="card-body">
            <form class="form-horizontal form-material" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label class="col-md-12">Full Name</label>
                <div class="col-md-12">
                  <input type="text" value="{{ $data->name }}" class="form-control form-control-line" name="name">
                </div>
              </div>
              <div class="form-group">
                <label for="example-email" class="col-md-12">Email</label>
                <div class="col-md-12">
                  <input type="email" value="{{ $data->email }}" class="form-control form-control-line" name="email"
                    id="example-email" readonly="true">
                </div>
              </div>
              <div class="form-group">
                <label for="phone" class="col-md-12">Phone</label>
                <div class="col-md-12">
                  <input type="text" value="{{ $data->phone }}" class="form-control form-control-line" name="phone"
                    id="phone">
                </div>
              </div>
              <div class="form-group">
                <label for="phone" class="col-md-12">Gender</label>
                <div class="col-md-12">
                  <select class="col-12" name="gender" id="gender">
                    <option value="">Chose gender</option>
                    <option value="nam" @if ($data->gender == 'nam') @selected(true) @endif>Male
                    </option>
                    <option value="nu" @if ($data->gender == 'nu') @selected(true) @endif>Female
                    </option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="country" class="col-md-12">Country</label>
                <div class="col-md-12">
                  <input type="text" value="{{ $data->country }}" class="form-control form-control-line" name="country"
                    id="country">
                </div>
              </div>
              <div class="form-group">
                <label for="image" class="col-md-12">Image</label>
                <div class="col-md-12">
                  <input type="file" value="{{ $data->image }}" class="form-control form-control-line" name="image"
                    id="image">
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
