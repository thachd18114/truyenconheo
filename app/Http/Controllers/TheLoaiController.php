<?php

namespace App\Http\Controllers;

use App\TheLoai;
use Illuminate\Http\Request;
use App\Http\Requests\TheLoaiRequest;

use DB;

class TheLoaiController extends Controller
{
    public function index()
    {
        $ds_loai = DB::table('theloai')->get();

        return view('theloai.index')
            ->with('danhsachloai', $ds_loai);
    }

    public function create()
    {
        return view('theloai.create');
    }

    public  function store (Request $request){
            $loai = new TheLoai();
            $loai->tl_ten = $request->tl_ten;
            $loai->tl_moTa = $request->tl_moTa;
            $loai->tl_taoMoi = $request->tl_taoMoi;
            $loai->tl_capNhat = $request->tl_capNhat;
            $loai->tl_trangThai = $request->tl_trangThai;
            $loai->save();
        \Session::flash('alert-info', 'Them moi thanh cong ^^~!!!');
        return redirect()->route('danhsachloai.index');
    }

    public function edit($id)
    {
        $loai = TheLoai::where("tl_ma", $id)->first();
        return view('theloai.edit')->with('loai', $loai);
    }

    public function update(TheLoaiRequest $request, $id)
    {
        // $validator = Validator::make($request->all(), [
        //     'l_ten' => 'required|unique:cusc_loai|max:60',
        //     'l_taoMoi' => 'required',
        //     'l_capNhat' => 'required',
        //     'l_trangThai' => 'required',
        // ]);
        // if ($validator->fails()) {
        //     return redirect(route('danhsachloai.edit', ['id' => $id]))
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
        $loai = TheLoai::where("tl_ma", $id)->first();
        $loai->tl_ten = $request->tl_ten;
        $loai->tl_taoMoi = $request->tl_taoMoi;
        $loai->tl_capNhat = $request->tl_capNhat;
        $loai->tl_trangThai = $request->tl_trangThai;
        $loai->tl_moTa = $request->tl_moTa;
        $loai->save();
        \Session::flash('alert-info', 'Cap nhat thanh cong ^^~!!!');
        return redirect()->route('danhsachloai.index');
    }

    public function destroy($id)
    {
        $loai = TheLoai::where("tl_ma",  $id)->first();
        $loai->delete();
        Session::flash('alert-danger', 'Xoa du lieu thanh cong ^^~!!!');
        return redirect()->route('danhsachloai.index');
    }
}
