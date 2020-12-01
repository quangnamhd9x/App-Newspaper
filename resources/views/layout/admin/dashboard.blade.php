@extends('layout.admin.master')

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                DataTable Example
                <a href="{{ route('newspaper.create') }}" class="btn btn-success">+Thêm mới</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Intro</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Intro</th>
                            <th>Options</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @forelse($newspapers as $key => $newspaper)
                            <tr>
                                <td>{{++$key}}</td>
                                <td><img style="width: 100px; height: 100px"
                                         src="@if($newspaper->getNameImage() == '/storage/images/')
                                             https://www.studynhac.vn/assets/img/default-avatar.jpg
                                         @else
                                         {{$newspaper->getNameImage()}}
                                         @endif"
                                         class="img-border-radius avatar-40 img-fluid"></td>
                                <td>{{$newspaper->title}}</td>
                                <td style="width: 400px; word-wrap: break-word">{{$newspaper->intro}}</td>
                                <td>
                                    <div>
                                        <a data-placement="top" href="{{route('newspaper.edit', $newspaper->id)}}">
                                            <i class="nav-icon fas fa-edit"></i>Sửa</a>
                                        <a class="text-danger"
                                           onclick="return confirm('Chú ý: Bạn chắc chán muốn xoá?')"
                                           href="{{ route('newspaper.destroy', $newspaper->id) }}">
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
