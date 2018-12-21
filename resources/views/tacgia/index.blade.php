@extends('backend.layouts.index')

@section('title')
    Danh sach the loai truyen
@endsection

@section('content')
    <h1>DANH SÁCH TÁC GIẢ</h1>
    <hr>
    <p><a href="#"><i class="fas fa-plus-circle"></i> Thêm mới</a></p>

    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
        @endforeach
    </div>

    <table id="table1" class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Mã</th>
            <th>Tên</th>
            <th>Tạo Mới</th>
            <th>Cập Nhật</th>
            <th>Trạng Thái</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        </thead>
        <tbody>
        @foreach($danhsachtacgia as $tacgia)
            <tr>
                <td>{{ $tacgia->tg_ma }}</td>
                <td>{{ $tacgia->tg_ten }}</td>
                <td>{{ $tacgia->tg_taoMoi }}</td>
                <td>{{ $tacgia->tg_capNhat }}</td>
                <td>{{ $tacgia->tg_trangThai }}</td>
                <td><a href="#"><button class="btn btn-success"><i class="far fa-edit"></i></button></a></td>
                <td>
                    <form method="post" >
                        <input type="hidden" name="_method" value="DELETE" />
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection