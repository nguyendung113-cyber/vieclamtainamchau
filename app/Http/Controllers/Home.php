<?php

namespace App\Http\Controllers;

use App\Models\nghes;
use App\Models\congtys;
use App\Models\nganhnghes;
use App\Models\chaulucs;
use App\Models\quocgias;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class Home extends Controller
{
    public function index(Request $request){
        return view('layouts.index');
    }
    
    public function dangtin(){
        return view('footer.support.dangtin');
    }
    public function quydinhdangtin(){
        return view('footer.support.quydinhdangtin');
    }
    public function huongdandangtin(){
        return view('footer.support.huongdandangtin');
    }

    public function info(){
        return view('footer.home.info');
    }

    public function price(){
        return view('footer.home.price');
    }
    public function lienhe(){
        return view('footer.home.lienhe');
    }
    public function gopy(){
        return view('footer.question.gopy');
    }
    public function cauhoi(){
        return view('footer.question.cauhoi');
    }
    public function cauhoithuonggap(){
        return view('footer.question.cauhoithuonggap');
    }
    public function tintuc(){
        return view('footer.home.tintuc');
    }
    public function chitiettintuc(){
        return view('footer.home.chitiettintuc');
    }
    public function dichvu(){
        return view('footer.home.dichvu');
    }

    public function chitietdichvu(){
        return view('footer.home.chitietdichvu');
    }
    public function taikhoan(){
        return view('layouts.nguoitimviec.quanlytaikhoan.taikhoan');
    }



    public function detailpage($id){
        $data = nghes::findorFail($id);
        $congtys = nghes::join('congtys','congtys.id_congty', '=', 'nghes.id_congty')->where('id' ,'=',$id)->first();
        return view('chitiet.chitietcongviec', ['data'=>$data, 'congtys'=>$congtys]);
    }

    public function duhocnghe($id_quocgia){
        $quocgias = quocgias::join('nghes','quocgias.id_quocgia', '=', 'nghes.id_quocgia')
        ->where('quocgias.id_quocgia' ,'=',$id_quocgia)->first();

        $nghes = nghes::select()
        ->join('congtys','congtys.id_congty', '=', 'nghes.id_congty')
        ->where('id_loainghe', '=', 1)
        ->where('nghes.id_quocgia' ,'=',$id_quocgia)->get();
        return view('home.danhmucduhocnghe', [ 'quocgias'=>$quocgias,'nghes'=>$nghes]);
    }

    public function xuatkhaulaodong($id_quocgia){
        $quocgias = quocgias::join('nghes','quocgias.id_quocgia', '=', 'nghes.id_quocgia')
        ->where('quocgias.id_quocgia' ,'=',$id_quocgia)->first();

        $nghes = nghes::select()
        ->join('congtys','congtys.id_congty', '=', 'nghes.id_congty')
        ->where('id_loainghe', '=', 2)
        ->where('nghes.id_quocgia' ,'=',$id_quocgia)->get();
        return view('home.danhmucxuatkhaulaodong', [ 'quocgias'=>$quocgias,'nghes'=>$nghes]);
    }
    public function vieclam($id_quocgia){
        $quocgias = quocgias::join('nghes','quocgias.id_quocgia', '=', 'nghes.id_quocgia')
        ->where('quocgias.id_quocgia' ,'=',$id_quocgia)->first();

        $nghes = nghes::select()
        ->join('congtys','congtys.id_congty', '=', 'nghes.id_congty')

        ->where('nghes.id_quocgia' ,'=',$id_quocgia)->get();
        return view('home.vieclam', [ 'quocgias'=>$quocgias,'nghes'=>$nghes]);
    }


  
}