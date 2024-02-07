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
        <h4 class="page-title">EDIT-PUBLISHER</h4>
      </div>
      <div class="col-7 align-self-center">
        <div class="d-flex align-items-center justify-content-end">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/admin/home">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="/admin/category">Publisher</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Edit-Publisher</li>
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
                      <input type="text" value="{{ $data->name }}" class="form-control form-control-line" name="name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="example-email" class="col-md-12">Description</label>
                    <div class="col-md-12">
                      <input type="text" value="{{ $data->description }}" class="form-control form-control-line" name="description"
                        id="example-email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" class="col-md-12">Author</label>
                    <div class="col-md-12">
                      <input type="text" value="{{ $data->author }}" class="form-control form-control-line" name="author"
                        id="password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="phone" class="col-md-12">Price</label>
                    <div class="col-md-12">
                      <input type="text" value="{{ $data->price }}" class="form-control form-control-line" name="price"
                        id="phone">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="phone" class="col-md-12">Inventory</label>
                    <div class="col-md-12">
                      <input type="text" value="{{ $data->inventory }}" class="form-control form-control-line" name="inventory"
                        id="phone">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="country" class="col-md-12">Category</label>
                    <div class="col-md-12">
                      <select name="id_category" id="Category" class="col-12">
                        @foreach ($dataCategory as $c)
                          <option value="{{ $c->id }}">{{ $c->title }}</option>
                        @endforeach
                      </select>
                  </div>
                  <br>
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
    </div>

@endsection
