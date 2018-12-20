<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loai;
use DB;

class TheLoaiController extends Controller
{
    public function index()
    {
        // Eloquent Model de lay du lieu
        //$ds_loai = Loai::all(); // SELECT * FROM cusc_loai
        // Query Builder
        $ds_loai = DB::table('theloai')->get();

        return view('theloai.index')
            ->with('danhsachloai', $ds_loai);
    }
}
