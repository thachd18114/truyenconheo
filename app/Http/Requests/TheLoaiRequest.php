<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TheLoaiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tl_ten' => 'required|unique:theloai|max:60',
            'tl_taoMoi' => 'required',
            'tl_capNhat' => 'required',
            'tl_moTa' => 'required|max:250',
            'tl_trangThai' => 'required',
        ];
    }
    public function messages() {
        return [
            'tl_ten.required' => __('Ten loai bat buoc nhap'),
            'tl_ten.unique' => 'Ten loai da co trong he thong. Vui long kiem tra lai.',
            'tl_ten.max' => 'Ten loai da vuot qua so luong cho phep',
            'tl_taoMoi.required' => 'Ngay tao moi khong duoc phep rong'
        ];
    }
}
