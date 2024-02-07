@extends('admin.layouts.main')
@section('content')
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
