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
                    <label class="col-md-12">Category</label>
                    <div class="col-md-12">
                        <input type="text" value="{{ $data -> title }}" class="form-control form-control-line" name="name">
                    </div>
                    <div class="col-md-12">
                        <input type="text" value="{{ $data -> title }}" class="form-control form-control-line" name="title">
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
