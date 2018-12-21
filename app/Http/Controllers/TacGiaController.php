<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TacGia;
use  DB;

class TacGiaController extends Controller
{
    public function index()
    {
        // Eloquent Model de lay du lieu
        //$ds_loai = Loai::all(); // SELECT * FROM cusc_loai
        // Query Builder
        $ds_tacgia = DB::table('tacgia')->get();

        return view('tacgia.index')
            ->with('danhsachtacgia', $ds_tacgia);
    }
}
