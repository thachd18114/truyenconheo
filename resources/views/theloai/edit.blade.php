@extends('backend.layouts.index')

@section('title')
    Hieu chinh the loai truyen
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('danhsachloai.update', ['id' => $loai->tl_ma]) }}">
        <input type="hidden" name="_method" value="POST" />
        {{ csrf_field() }}
        <div class="form-group">
            <label for="tl_ten">Tên</label>
            <input type="text" class="form-control" id="tl_ten" name="tl_ten" value="{{ $loai->tl_ten }}" placeholder="Ten">
        </div>
        <div class="form-group">
            <label for="tl_moTa">Mô tả</label>
            <textarea type="text" class="form-control" id="tl_moTa" name="tl_moTa" >{{ $loai->tl_moTa }}</textarea>
        </div>
        <div class="form-group">
            <label for="tl_taoMoi">Ngày tạo mới</label>
            <input type="text" class="form-control" id="tl_taoMoi" name="tl_taoMoi" value="{{ $loai->tl_taoMoi }}" placeholder="tao moi">
        </div>
        <div class="form-group">
            <label for="tl_capNhat">Ngày cập nhật</label>
            <input type="text" class="form-control" id="tl_capNhat" name="tl_capNhat" value="{{ $loai->tl_capNhat }}" placeholder="cap nhat">
        </div>
        <select name="tl_trangThai">
            <option value="1" {{ $loai->tl_trangThai == 1 ? "selected" : "" }}>Khoa</option>
            <option value="2" {{ $loai->tl_trangThai == 2 ? "selected" : "" }}>Kha dung</option>
        </select>

        <button type="submit" class="btn btn-primary">Luu</button>
    </form>
@endsection