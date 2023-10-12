@extends('layout.admin')
@section('title')
<title>Dep</title>
@endsection
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@section('content')
<div class="content-wrapper">
    @include('partials.content-header', ['name'=>'Dep', 'key'=>'List'])

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
          <div class="col-sm-12">
              <a href="{{ route('deps.create') }}" class="btn btn-success float-right m2">Add</a>
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
                    @foreach ($deps as  $dep)
                    <tr>
                      <th scope="row">{{ $dep->id }}</th>
                      <td>{{ $dep->name }}</td>
                      <td>
                        <a href="{{ route('deps.edit', ['id' => $dep->id]) }}" class="btn btn-default ">Edit</a>
                        <a data-url="{{ route('deps.delete', ['id' => $dep->id]) }}" href="" class="btn btn-danger action_delete">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
          </div>
          <div class="col-sm-12">
            {{ $deps->links() }}
          </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
@endsection
