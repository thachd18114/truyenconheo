<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    const     CREATED_AT    = 'tl_taoMoi';
    const     UPDATED_AT    = 'tl_capNhat';
    protected $table        = 'theloai';
    protected $fillable     = ['tl_ten', 'tl_taoMoi', 'tl_capNhat', 'tl_trangThai','tl_moTa'];
    protected $guarded      = ['tl_ma'];
    protected $primaryKey   = 'tl_ma';
    protected $dates        = ['tl_taoMoi', 'tl_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
