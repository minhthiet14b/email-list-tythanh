@extends('layout.admin')
@section('title')
<title>Trang chu</title>
@endsection
@section('content')
<div class="content-wrapper">
    @include('partials.content-header', ['name'=>'Dep', 'key'=>'ADD'])
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
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
                            <input type="text" class="form-control" name="title" value="">
                                                                <span class="text-small text-gray help-block-none">Nhập tiêu đề menu.</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Vị trí <span class="text-danger">(*)</span>:</label>
                        <div class="col-sm-10 mb-3">
                            <select size="5" class="form-control" name="location_id">
                                <option value="" selected="">--Chọn--</option>
                                                                            <option value="1">menu chính</option>
                                                                            <option value="2">footer</option>
                                                                            <option value="6">Vị trí khác</option>
                                                                    </select>
                                                                <span class="text-small text-gray help-block-none">Chọn vị trí menu.</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Url <span class="text-danger"></span>:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control nb-getlink" name="url" value="">

                            <span class="text-small text-gray help-block-none"> Nhập link cho menu (nếu điền thì không cần nhập phần bên dưới).</span>
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-primary btn-get-link" type="button">Lấy link bài viết</button>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Module <span class="text-danger"></span>:</label>
                        <div class="col-sm-10 mb-3">
                            <select size="5" class="form-control module" name="module" id="module">
                                <option value="" selected="">--Chọn--</option>
                                                                            <option value="product_catalogua">Sản phẩm</option>
                                                                            <option value="article_catalogua">Bài viêt</option>
                                                                    </select>
                            <span class="text-small text-gray help-block-none">Chọn module của menu.</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Module ID<span class="text-danger"></span>:</label>
                        <div class="col-sm-10 mb-3">
                            <select size="5" class="form-control md-select" name="module_id" id="module_id" disabled="">
                                <option value="" selected="">--Chọn--</option>




                                                                    </select>
                            <span class="text-small text-gray help-block-none">Chọn các danh mục con trong module.</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Module item<span class="text-danger"></span>:</label>
                        <div class="col-sm-10 mb-3">
                            <select size="5" class="form-control" name="module_item" id="module_item" disabled="">
                                <option value="" selected="">--Chọn--</option>





                                                                    </select>
                            <span class="text-small text-gray help-block-none"> Chọn cách hiển thị của module.</span>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Thao tác</label>
                        <div class="col-sm-10 mb-3">
                            <button class="btn btn-primary" type="submit" name="close" value="close">Lưu lại và thoát</button>
                            <button class="btn btn-primary" type="submit" name="back" value="back">Lưu lại và thêm mới</button>
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
                                    <input type="radio" class="form-check-input " name="publish" value="0" checked="">
                                    <span class="bg-secondary nb-check text-white">Không</span>
                                </label>
                            </div>
                            <div class="form-check-inline mb-1 ">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input " name="publish" value="1">
                                    <span class="bg-success text-white nb-check">Có</span>
                                </label>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
@endsection
