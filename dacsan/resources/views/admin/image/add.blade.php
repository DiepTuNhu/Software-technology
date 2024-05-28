@extends('admin.index')
@section('title_name')
    Thêm hình ảnh 
@endsection
@section('path')
    Thêm hình ảnh
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
<<<<<<< HEAD
          <div class="card card-primary">
=======
<<<<<<< HEAD
          <div class="card card-primary">
=======
<<<<<<< HEAD
          <div class="card card-primary">
=======
          <div class="card card-white">
>>>>>>> d11ceec2296ff6f7445fe8d4fb1716a7490ae76a
>>>>>>> 1df59350248c3687e03f94371caeeb96a4ab6128
>>>>>>> aad9120012ee8c98bea2552970dc4b57ae51951a
            <div class="card-header">
               @include('admin.alert')
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" action="{{route('images.store')}}" method = "post" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                    <label>Chọn ảnh</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label>Tên món ăn</label>
                    <select class="custom-select" name="food">
                      @foreach ($food as $f)
                        <option value="{{ $f->id }}">{{ $f->name }}</option>
                      @endforeach      
                    </select>
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




