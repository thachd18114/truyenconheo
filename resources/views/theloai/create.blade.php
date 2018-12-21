@extends('backend.layouts.index')

@section('title')
    Them moi the loai truyen
@endsection

@section('content')
    <form  method="post" action="{{route('danhsachloai.store')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="tl_ten">Nhập tên loại</label>
            <input type="text" class="form-control" id="tl_ten" name="tl_ten" placeholder="Nhap ten">
        </div>
        <div class="form-group">
            <label for="tl_moTa">Mô tả</label>
            <textarea type="text" class="form-control" id="tl_moTa" name="tl_moTa"></textarea>
        </div>
        <div class="form-group">
            <label for="tl_taoMoi">Ngày tạo mới</label>
            <input type="text" class="form-control" id="tl_taoMoi" name="tl_taoMoi" placeholder="Nhap ngay tao moi">
        </div>

        <div class="form-group">
            <label for="tl_capNhat">Ngày cập nhật</label>
            <input type="text" class="form-control" id="tl_capNhat" name="tl_capNhat" placeholder="Nhap ngay cap nhat">
        </div>
        <div class="form-group">
            <label for="tl_trangThai">Trang thai</label>
            <select name="tl_trangThai">
                <option value="1">Khoa</option>
                <option value="2">Kha dung</option>
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Luu</button>
        </div>

    </form>
@endsection