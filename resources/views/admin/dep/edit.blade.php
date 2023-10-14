@extends('layout.admin')
@section('title')
<title>Trang chu</title>
@endsection
@section('js')
<script src="{{ asset('adminn/list.js')}}"></script>
@endsection
@section('content')
<div class="content-wrapper">
    @include('partials.content-header', ['name'=>'category', 'key'=>'ADD'])
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
        <form action="{{route('deps.update',['id'=>$dep->id])}}" method="post">
            @csrf
            <div class="row">
                <div class="col-9">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-info-circle"></i> Thông tin chung
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Tiêu đề <span class="text-danger">(*)</span>:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" value="{{$dep->name}}">
                                    <span class="text-small text-gray help-block-none">Nhập tiêu đề menu.</span>
                                    {{-- @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Thao tác</label>
                                <div class="col-sm-10 mb-3">
                                    <button class="btn btn-primary action_change" type="submit" name="ok" value="ok">Thay đổi</button>
                                    <button class="btn btn-primary" type="reset">Làm lại</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-gift fa-lg"></i> Tùy chọn
                        </div>
                        <div class="card-body">
                            <div class="form-group d-flex">
                                <div class="form-check-inline nb-create-article-category-title-op">
                                    <label class="form-control-label ">Hiển thị:</label>
                                </div>
                                <div>
                                    <div class="form-check-inline mb-1">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input " name="publish" value="0" {{$dep->publish=='0'?'checked':''}}>
                                            <span class="bg-secondary nb-check text-white">Không</span>
                                        </label>
                                    </div>
                                    <div class="form-check-inline mb-1 ">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input " name="publish" value="1" {{$dep->publish=='1'?'checked':''}}>
                                            <span class="bg-success text-white nb-check">Có</span>
                                        </label>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            </form>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
@endsection
