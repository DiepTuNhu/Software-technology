@extends('admin.index')
@section('title_name')
    Thêm danh mục
@endsection
@section('path')
    Thêm danh mục
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
<<<<<<< HEAD
          <div class="card card-primary " >
=======
<<<<<<< HEAD
          <div class="card card-primary " >
=======
<<<<<<< HEAD
          <div class="card card-primary " >
=======
          <div class="card card-primary">
>>>>>>> d11ceec2296ff6f7445fe8d4fb1716a7490ae76a
>>>>>>> 1df59350248c3687e03f94371caeeb96a4ab6128
>>>>>>> aad9120012ee8c98bea2552970dc4b57ae51951a
            <div class="card-header">
               @include('admin.alert')
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" action="{{route('categories.store')}}" method = "post">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tên danh mục</label>
                  <input type="text" name="categoryName" class="form-control" id="categoryName" placeholder="Nhập tên danh mục">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Thêm</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section> 
@endsection


