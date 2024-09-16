
@include('layouts.css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@include('HR.layouts.navigation')
<div class="w-full" style="border:1px solid blue"></div>
@include('HR.layouts.sidebar')


<div class=" w-full px-10 py-10" >
    <h1 class="text-blue-800 font-bold text-4xl">Tạo tin tuyển dụng</h1>
    <div style="width: 100%" class="flex flex-col mt-4">
        <form  method="POST"  action="{{url('HR/insert-nghes')}}">
        @csrf
        <h1 class="font-bold text-2xl">Thông tin cơ bản</h1>
        <div class="flex flex-col text-xl my-2">
            <div class="flex justify-between lg:w-full">
                <h1 class="my-2">Chức danh</h1>
                <h2 class="my-2">Thông tin này không thể chỉnh sửa trong 72 giờ kiểm duyệt</h2>
            </div>
            <input class="border" style="height: 40px;width:90%" type="text" name="tennghe">
        </div>
        <div class=" grid grid-cols-2 gap-3 mt-3" style="width:90%">
            <div>
                <h1 class="my-2" >Nghề nghiệp</h1>
                <td >
                <select name="id_nganhnghe" id="">
                        @foreach ($nganhnghes as $nganhnghes)
                            <option value="{{$nganhnghes->id_nganhnghe}}">{{$nganhnghes->tennganh}}</option>
                        @endforeach            
                </select>
            </div>
            
            <div>
                <h1 class="my-2" >Bằng cấp</h1>
                <input class="border" style="height: 40px;width:90%" type="text" name="bangcap" placeholder="bằng cấp" id="">
            </div>
          
            <div>
                <h1 class="my-2" >Lương</h1>
                <input class="border" style="height: 40px;width:90%" type="text" name="Luong" placeholder="Lương" id="">
            </div>
            <div>
                <h1 class="my-2" >Hình thức</h1>
                <input class="border" style="height: 40px;width:90%" type="text" name="hinhthuc" placeholder="Hình thưc" id="">
            </div>
        </div>
        <div class=" grid grid-cols-3 gap-3 mt-3" style="width:90%">
            <div>
                <h1 class="my-2" >Kinh nghiệm</h1>
                <input class="border" style="height: 40px;width:90%" type="text" name="kinhnghiem" placeholder="Kinh nghiệm" id="">
            </div>
            <div>
                <h1 class="my-2" >Cấp bậc</h1>
                <input class="border" style="height: 40px;width:90%" type="text" name="capbac" placeholder="Cấp bậc" id="">

            </div>
            <div class="flex justify-between ">
                <div class="grid grid-flow-row ">
                    <h1 class="mt-2">Độ tuổi </h1>
                    <div class="flex">
                        <input style="width:100%" type="text" name="age" id="" placeholder="Nhập độ tuổi"><label class="bg-gray-200" style="width:50px; text-align:center; border-radius:5px" for="age">tuổi</label>
                    </div>
                </div>
              
            </div>
        </div>
        <div class=" grid grid-cols-3 gap-3 mt-3" style="width:90%">
            <div>
                <div class="grid grid-flow-row ">
                    <h1 >Số lượng tuyển</h1>
                    <div class="flex">
                    <input class="border" style="height: 40px;width:90%" type="text" name="soluong" placeholder="Số lượng tuyển" id="">
                    </div>
                </div>
            </div>
            <div>
                <div class="grid grid-flow-row ">
                    <h1 >Thời gian thử việc</h1>
                    <div class="flex">
                    <input class="border" style="height: 40px;width:90%" type="text" name="thoigianthuviec" placeholder="Thời gian thử việc" id="">
                    </div>
                </div>
            </div>
            
            <div class="grid grid-flow-row ">
                    <h1 >Công ty</h1>
                    <?php

                    use App\Models\congtys;
                        $congtys = congtys::all();
                    ?>
                    <select name="id_congty" id="">
                        @foreach ($congtys as $congtys)
                            <option value="{{$congtys->id_congty}}">{{$congtys->tencongty}}</option>
                        @endforeach            
                </select>
                </div>
            
        </div>
    </div>
    <div class="mt-4">
        <div>
            <h1 class="font-bold text-3xl">Địa điểm làm việc</h1>
            <div class=" grid grid-cols-3 gap-3 mt-3" style="width:90%">
                <div class="grid grid-flow-row ">
                    <h1 >Quốc Gia</h1>
                    <select name="id_quocgia" id="">
                        @foreach ($quocgias as $quocgias)
                            <option value="{{$quocgias->id_quocgia}}">{{$quocgias->tenquocgia}}</option>
                        @endforeach            
                </select>
                </div>
            
                <div class="grid grid-flow-row ">
                    <h1 >Số nhà tên đường</h1>
                    <div class="flex">
                        <input class="border" style="width:580px;height:40px" type="text" name="Location" id="" placeholder="VD: 123 đường Lê Đức Thọ, quận Cầu Giấy (Tên đường cần ngắn hơn 200 ký tự)">
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-flow-row ">
                    <h1 >Loại nghề</h1>
                    <div class="flex">
                    <?php

                    use App\Models\loaicongviecs;
                        $loaicongviecs = loaicongviecs::all();
                    ?>
                    <select name="id_loainghe" id="">
                        @foreach ($loaicongviecs as $loaicongviecs)
                            <option value="{{$loaicongviecs->id_loainghe}}">{{$loaicongviecs->tenloainghe}}</option>
                        @endforeach   
                    </select>
               </div>
            </div>
        
    </div>
                
    <div class="mt-4">
        <div>
            <h1 class="font-bold text-3xl">Mô tả công việc</h1>
            <h1 class="font-bold text-xl mt-3">Mô tả công việc</h1>
            <h1 class="font-bold mt-3 text-gray-400">Thông tin vị trí công việc yêu cầu, trách nhiệm mà ứng viên có thể đảm nhận khi làm việc tại công ty</h1>
            <div>
                <input style="width:100%; height:100px" class="border" type="text" name="mota" id="">
            </div>
            <div>
                <h1 class="font-bold text-blue-500 mb-4">Xem gợi ý mô tả công việc</h1>
            </div>
        </div>
        <div>
            <h1 class="font-bold text-xl mt-3">Yêu cầu công việc</h1>
            <h1 class="font-bold mt-3 text-gray-400">Kỹ năng chuyên môn hoặc ký năng mềm cần thiết với công việc mà ứng viên cần quan tâm</h1>
            <div>
                <input style="width:100%; height:100px" class="border" type="text" name="yeucau" id="">
            </div>
            <div>
                <h1 class="font-bold text-blue-500 mb-4">Xem gợi ý mô tả công việc</h1>
            </div>
        </div>
        <div>
            <h1 class="font-bold text-xl mt-3">Quyền lợi</h1>
            <h1 class="font-bold mt-3 text-gray-400">Những quyền lợi, lợi ích với công việc cho ứng viên với vị trí ứng tuyển</h1>
            <div>
                <input style="width:100%; height:100px" class="border" type="text" name="quyenloi_congviec" id="">
            </div>
            <div>
                <h1 class="font-bold text-blue-500 mb-4">Xem gợi ý mô tả công việc</h1>
            </div>
        </div>
            <h1 class="font-bold text-xl mt-3">Kỹ năng</h1>

            <h1 class="font-bold mt-3 text-gray-400">Những quyền lợi, lợi ích với công việc cho ứng viên với vị trí ứng tuyển</h1>
            <div>
                <input style="width:100%; height:100px" class="border" type="text" name="kynang" id="">
            </div>
            <div>
                <h1 class="font-bold text-blue-500 mb-4">Xem gợi ý mô tả công việc</h1>
                </div> 
        
        </div>
        <div class="flex justify-end ">
                <input type="submit" value="Tiếp tục" class="border cursor-pointer bg-purple-700 font-bold text-white" style="height:50px; width: 100px; border-radius:5px; "></input>
            </div>

            </form>
 
        <div>
        <h1 class="font-bold text-xl mt-3">Thông tin người liên hệ</h1>

        <div class=" grid grid-cols-3 gap-3 mt-3" style="width:100%">


            <div class="grid grid-flow-row ">
                <h1 >Họ tên</h1>
                <div class="flex">
                    <input class="border" style="width:100%; height:40px" type="text" name="" id="" placeholder="Nguyễn Văn A">
                </div>
            </div>

            <div>
                <div class="grid grid-flow-row ">
                    <h1 >Email</h1>
                    <div class="flex">
                        <input class="border" style="width:100%; height:40px" type="text" name="" id="" placeholder="jellyfishdns@gmail.com">
                    </div>
                </div>
            </div>
            <div>
                <div class="grid grid-flow-row ">
                    <h1 >Điện thoại</h1>
                    <div class="flex">
                        <input class="border" style="width:100%; height:40px" type="text" name="" id="" placeholder="024 668 2649">
                    </div>
                </div>
            </div>
        </div>
            <h1 class="font-bold text-xl mt-3">Địa chỉ liên hệ</h1>
                <div class="grid grid-flow-row ">
                    <h1 >Họ tên</h1>
                    <div class="flex">
                        <input class="border" style="width:100%; height:40px" type="text" name="" id="" placeholder="Số 68 Nguyễn Du - Hai Bà Trưng - Hà Nội">
                    </div>
                </div>
                <div class="flex mt-2 mb-2">
                    <input class=" items-baseline" type="checkbox">
                    <p>Bằng việc tạo tin tuyển dụng, bạn xác nhận đồng ý với <a href="#" class="text-blue-400 underline">các điều kiện và điều khoản</a> sử dụng với vieclamnamchau.com</p>
                </div>
            
            </div>
          
        </div>
        </div>
    </div>
</div>