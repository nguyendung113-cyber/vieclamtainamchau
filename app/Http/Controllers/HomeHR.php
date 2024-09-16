<?php

namespace App\Http\Controllers;

use App\Models\nganhnghes;
use App\Models\quocgias;
use App\Models\nghes;
use App\Models\congtys;
use App\Models\loaicongviecs;
use Illuminate\Http\Request;

class HomeHR extends Controller
{
    public function dangtin(){
        $nganhnghes= nganhnghes::all();
        $quocgias = quocgias::all();
        $congtys = congtys::all();
        $loaicongviecs = loaicongviecs::all();
        return view('HR.layouts.quanlydangtuyen.tintuyendung',compact('nganhnghes'), compact('quocgias'),  compact('loaicongviecs'),compact('congtys'));
    }

    public function insertnghes(Request $request){
        $nghes = new nghes();
        $nghes->tennghe = $request->input('tennghe');
        $nghes->id_nganhnghe = $request->input('id_nganhnghe');
        $nghes->bangcap = $request->input('bangcap');
        $nghes->Luong = $request->input('Luong');
        $nghes->hinhthuc = $request->input('hinhthuc');
        $nghes->kinhnghiem = $request->input('kinhnghiem');
        $nghes->capbac = $request->input('capbac');
        $nghes->age = $request->input('age');
        $nghes->soluong = $request->input('soluong');
        $nghes->Location = $request->input('Location');
        $nghes->id_congty = $request->input('id_congty');
        $nghes->id_quocgia = $request->input('id_quocgia');
        $nghes->id_loainghe = $request->input('id_loainghe');
        $nghes->thoigianthuviec = $request->input('thoigianthuviec');
        $nghes->mota = $request->input('mota');
        $nghes->yeucau = $request->input('yeucau');
        $nghes->quyenloi_congviec = $request->input('quyenloi_congviec');
        $nghes->kynang = $request->input('kynang');
        $nghes->save();
        return redirect('HR/danhsachdangtin')->with('success', 'Thêm thành công!');
    }

    public function danhsachdangtin(){
        return view('HR.layouts.quanlydangtuyen.danhsachtin');
    }

    public function hosoungvien(){
        return view('HR.layouts.quanlyungvien.hosoungvien');
    }

    public function hosodaluu(){
        return view('HR.layouts.quanlyungvien.hosodaluu');
    }

    public function timungvien(){
        return view('HR.layouts.quanlyungvien.timungvien');
    }

    public function thanhtoan(){
        return view('HR.layouts.quanlydichvu.thanhtoan');
    }

    public function lichsu(){
        return view('HR.layouts.quanlydichvu.lichsu');
    }

    public function taikhoanntd(){
        return view('HR.layouts.quanlytaikhoan.taikhoanntd');
    }

    public function thuonghieuntd(){
        return view('HR.layouts.quanlytaikhoan.thuonghieuntd');
    }

    public function thongbao(){
        return view('HR.layouts.huongdanvathongbao.thongbao');
    }
    public function hotro(){
        return view('HR.layouts.huongdanvathongbao.hotro');
    }
}
