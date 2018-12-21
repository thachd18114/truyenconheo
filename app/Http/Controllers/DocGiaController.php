<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\DocGia;

class DocGiaController extends Controller
{
    public function index()
    {
        // Eloquent Model de lay du lieu
        //$ds_loai = Loai::all(); // SELECT * FROM cusc_loai
        // Query Builder
        $ds_docgia = DB::table('docgia')->get();

        return view('docgia.index')
            ->with('danhsachdocgia', $ds_docgia);
    }
}
