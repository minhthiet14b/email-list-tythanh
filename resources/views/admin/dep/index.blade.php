@extends('layout.admin')
@section('title')
<title>Dep</title>
@endsection
@section('content')
<div class="content-wrapper">
    @include('partials.content-header', ['name'=>'Dep', 'key'=>'List'])

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
          <div class="col-sm-12">
              <a href="{{ route('dep.create') }}" class="btn btn-success float-right m2">Add</a>
          </div>
          <div class="col-sm-12">
              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Tên danh mục</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    {{-- @foreach ($categories as  $category) --}}
                    <tr>
                      {{-- <th scope="row">{{ $category->id }}</th>
                      <td>{{ $category->name }}</td> --}}
                      <td>
                        {{-- <a href="{{ route('categories.edit', ['id' => $category->id]) }}" class="btn btn-default ">Edit</a>
                        <a data-url="{{ route('categories.delete', ['id' => $category->id]) }}" href="" class="btn btn-danger action_delete">Delete</a> --}}
                      </td>
                    </tr>
                    {{-- @endforeach --}}
                  </tbody>
                </table>
          </div>
          <div class="col-sm-12">
            {{-- {{ $categories->links() }} --}}
          </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
@endsection
