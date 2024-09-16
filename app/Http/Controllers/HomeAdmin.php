<?php

namespace App\Http\Controllers;
use App\Models\congtys;
use App\Models\nganhnghes;
use App\Models\quocgias;
use App\Models\chaulucs;
use App\Models\loaicongviecs;
use App\Models\nghes;
use Illuminate\Http\Request;

class HomeAdmin extends Controller
{

    public function showcongty(){
        $congty = congtys::paginate(10);
        return view('admin.congty.show' , compact('congty'));
    }

    public function shownghes(){
        $nghes = nghes::select()
        ->where('post_status', '=','active')
        ->join('congtys','congtys.id_congty', '=', 'nghes.id_congty')
        ->paginate(10);

        return view('admin.nghes.show' , compact('nghes'));
    }

    public function shownghespending(){
        $nghes = nghes::select()
        ->where('post_status', '=','pending')
        ->join('congtys','congtys.id_congty', '=', 'nghes.id_congty')
        ->paginate(10);

        return view('admin.nghes.showpending' , compact('nghes'));
    }

    public function shownghesreject(){
        $nghes = nghes::select()
        ->where('post_status', '=','reject')
        ->join('congtys','congtys.id_congty', '=', 'nghes.id_congty')
        ->paginate(10);

        return view('admin.nghes.showreject' , compact('nghes'));
    }

    public function shownganhnghe(){
        $nganhnghes = nganhnghes::select()->paginate(10);
        return view('admin.nganhnghe.show' ,['nganhnghes' => $nganhnghes]);
    }
    public function indexquocgia(){
        $quocgias = quocgias::select()->paginate(10);
        return view('admin.quocgia.index' ,compact('quocgias'));
    }

    public function addquocgia(){
        $chaulucs= chaulucs::all();
        return view('admin.quocgia.add', compact('chaulucs'));
    }

    public function insertquocgia(Request $request){
        $quocgias = new quocgias();
        if($request->hasFile('flag'));
        {
            $file = $request->file('flag');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/quocgia/',$filename);
            $quocgias->flag=$filename;
        }
        $quocgias->tenquocgia = $request->input('tenquocgia');
        $quocgias->id_chauluc = $request->input('id_chauluc');
        $quocgias->save();
        return redirect('admin/showquocgia')->with('success', 'Thêm thành công!');
    }


    public function insertnganhnghe(Request $request){
        $nganhnghes = new nganhnghes();
        if($request->hasFile('hinhanh'));
        {
            $file = $request->file('hinhanh');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/nganhnghe/',$filename);
            $nganhnghes->hinhanh=$filename;
        }
        $nganhnghes->tennganh = $request->input('tennganh');
        $nganhnghes->thutu = $request->input('thutu');
        $nganhnghes->soluong = $request->input('soluong');
        $nganhnghes->save();
        return redirect('admin/shownganhnghe')->with('success', 'Thêm thành công!');
    }

    public function addnghes(){
        $nganhnghes= nganhnghes::all();
        $quocgias = quocgias::all();
        $congtys = congtys::all();
        $loaicongviecs = loaicongviecs::all();
        return view('admin.nghes.add',compact('nganhnghes'), compact('quocgias'),  compact('loaicongviecs'),compact('congtys'));
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
        return redirect('admin/shownghes')->with('success', 'Thêm thành công!');
    }

    public function destroycongty($id_congty)
    {   
        $quocgias = congtys::find($id_congty);
        $quocgias->delete();
        return redirect()->back()->with('quocgias',$quocgias)->with('success' ,'Đã xóa thành công thông tin công ty!');
    }

    public function destroyquocgia($id_quocgia)
    {   
        $quocgias = quocgias::find($id_quocgia);
        $quocgias->delete();
        return redirect('admin/showquocgia');
    }

    public function destroynganhnghe($id_nganhnghe)
    {   
        $nganhnghes = nganhnghes::find($id_nganhnghe);
        $nganhnghes->delete();
        return redirect('admin/shownganhnghe');
    }

    public function destroynghe($id)
    {   
        $nghes = nghes::find($id);
        $nghes->delete();
        return redirect('admin/shownghes');
    }



    public function accept_status($id)
    {   
        $nghes = nghes::find($id);
        $nghes->post_status='active';
        $nghes->save();
        return redirect()->back();
    }

    public function reject_status($id)
    {   
        $nghes = nghes::find($id);
        $nghes->post_status='reject';
        $nghes->save();
        return redirect()->back();
    }


    public function editquocgia(string $id)
    {
        $chaulucs = chaulucs::all();
        $quocgias = quocgias::findOrFail($id);
        return view('admin.quocgia.edit', compact('quocgias','chaulucs'));
    }
 

    public function updatequocgia(Request $request, quocgias $quocgias)
    {
        $data = $request->validate([
           'tenquocgia' => 'required|string|max:250',
        ]);
        $quocgias->update($data);

        return redirect()->back()->with('success', 'Đã thay đổi thông tin quốc gia');
    }
}
