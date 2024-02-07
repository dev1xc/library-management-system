@extends('admin.layouts.main')
@section('content')
@php
    $count = 1;
@endphp
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-5 align-self-center">
        <h4 class="page-title">CATEGORIES</h4>
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
    <div class="form-group">
      <div class="col-sm-12">
        <button class="btn btn-success"><a href="/admin/add-category">Add</a></button>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Ordinal Number</th>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $c)
                    <tr>
                      <th scope="row">{{ $c->id }}</th>
                      <th scope="row">{{ $c->id }}</th>
                      <td>{{ $c->title }}</td>
                      <td>{{ $c->description }}</td>
                      <td><a href="/admin/edit-category/{{ $c->id }}">Edit</a></td>
                      <td><a href="/admin/delete-category/{{ $c->id }}">Delete</a></td>
                    </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{ $data->links() }}
  </div>
@endsection
