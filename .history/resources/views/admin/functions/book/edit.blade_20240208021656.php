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
      <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
          <div class="card-body">
            <center class="m-t-30"> <img src="{{ url('/upload/book/image/' . $data->image) }}" class=""
                  width="150" />
                <h4 class="card-title m-t-10">{{ $data->name }}</h4>
              </center>
          </div>
          <div>
            <hr>
          </div>
          <div class="card-body">
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
                @if ($dp == ($data->id_publisher))
                  $dp->name
                @else
                  Null
                @endif
              @endforeach
          </h6>
          </div>
        </div>
      </div>
      <!-- Column -->
      <!-- Column -->
      <!-- Column -->
      <div class="col-lg-8 col-xlg-9 col-md-7">
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
                  <input type="text" value="" class="form-control form-control-line" name="description"
                    id="example-email">
                </div>
              </div>
              <div class="form-group">
                <label for="example-email" class="col-md-12">Image</label>
                <div class="col-md-12">
                  <input type="file" value="" class="form-control form-control-line" name="image"
                    id="example-email">
                </div>
              </div>
              <div class="form-group">
                <label for="example-email" class="col-md-12">Page Number</label>
                <div class="col-md-12">
                  <input type="text" value="" class="form-control form-control-line" name="page"
                    id="example-email">
                </div>
              </div>
              <div class="form-group">
                <label for="example-email" class="col-md-12">Book Cover</label>
                <div class="col-md-12">
                  <input type="text" value="" class="form-control form-control-line" name="book_cover"
                    id="example-email">
                </div>
              </div>
              <div class="form-group">
                <label for="example-email" class="col-md-12">Size</label>
                <div class="col-md-12">
                  <input type="text" value="" class="form-control form-control-line" name="size"
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
                  <select name="id_category" id="Category" class="col-12">
                    @foreach ($dataCategory as $c)
                      <option value="{{ $c->id }}">{{ $c->title }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="country" class="col-md-12">Publisher</label>
                  <div class="col-md-12">
                    <select name="id_publisher" id="Category" class="col-12">
                      @foreach ($dataPublisher as $c)
                        <option value="{{ $c->id }}">{{ $c->name }}</option>
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
