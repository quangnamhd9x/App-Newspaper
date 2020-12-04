@extends('layout.admin.master')

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">List Blog</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                DataTable Example
                <a href="{{ route('user.create') }}" class="btn btn-success">+Thêm mới</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Options</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @forelse($users as $key => $user)
                            <tr>
                                <td>{{++$key}}</td>
                                <td><img style="width: 100px; height: 100px"
                                         src="@if($user->getNameImage() == '/storage/images/')
                                             https://www.studynhac.vn/assets/img/default-avatar.jpg
                                         @else
                                         {{$user->getNameImage()}}
                                         @endif"
                                         class="img-border-radius avatar-40 img-fluid"></td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->address}}</td>
                                <td>{{$user->phone}}</td>
                                <td>
                                    <div>
                                        <a data-placement="top" href="{{route('user.edit', $user->id)}}">
                                            <i class="nav-icon fas fa-edit"></i>Sửa</a>
                                        <a class="text-danger"
                                           onclick="return confirm('Chú ý: Bạn chắc chán muốn xoá?')"
                                           href="{{ route('user.destroy', $user->id) }}">
                                            <i class="nav-icon far fa-trash-alt"></i>Xóa</a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">Không có dữ liệu</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
