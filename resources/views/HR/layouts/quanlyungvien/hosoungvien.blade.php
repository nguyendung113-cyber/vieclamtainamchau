

@include('layouts.css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@include('HR.layouts.navigation')
<div class="w-full" style="border:1px solid blue"></div>
@include('HR.layouts.sidebar')


<div class="px-5 py-5" style=" width:1300px">
    <h1 class="text-blue-700 text-4xl font-bold mb-5" style="height: 100px; background:white">Hồ sơ ứng tuyển</h1>
    <div class="px-4 py-4 bg-white">


    <div class="flex  justify-between items-center">
        <h1 class="font-bold text-2xl">Tất cả tin đăng: <span class="text-red-700 font-bold text-2xl">(273 hồ sơ nộp)</span></h1>
        <h1 >Hồ sợ bị xóa hoặc ẩn bởi ứng viên sẽ không thể tải xuống </br> Danh sách hồ sơ sẽ bị xóa trong 6 tháng</h1>
    </div>
    <div class="flex justify-between mt-5 mb-5 gap-7">
        <h1>Lọc vị trí</h1>
        <div class="border" style="border:1px solid gray; width:300px">
            <input style="border-width: 0px;" type="text" placeholder="Tất cả tin đăng" name="" id="">
        </div>
        <select  class="border" style="border:1px solid gray;width:300px" name="" id="">
            <option value="1">Tất cả thời gian nộp</option>
        </select>
        <select  class=" bg-green-400" style="border:1px solid gray;width:300px" name="" id="">
            <option value="1">Lọc nâng cao</option>
        </select>
    </div>
    <div class="border gray"></div>
    <div class="font-bold">
        <h1>Bạn đã chọn</h1>
        <h1>0 <p class="text-red-700">hồ sơ</p></h1>
    </div>
    <div class="flex mt-5 justify-between mb-5">
        <div class="font-bold" style=" width:250px">Tên hồ sơ</div>
        <div class="font-bold"  style=" width:200px">Vị trí ứng tuyển</div>
            <select style="width:150px  " name="" id="">
                <option value="1">Thời gian nộp</option>
            </select>
            <select style="width:150px  " name="" id="">
                <option value="1">Loại hồ sơ</option>
            </select>
            <select style="width:150px  " name="" id="">
                <option value="1">Nguồn hồ sơ</option>
            </select>
            <select style="width:200px  " name="" id="">
                <option value="1">Trạng thái tuyển dụng</option>
            </select>
    </div>
    <div class="border gray"></div>
    <div class="flex justify-between items-center">
            <div class="flex flex-col py-4" style="width:250px">
                <h1 class="font-bold text-base" style="height:30px">Nguyễn Văn B <span class="text-gray-400 text-base">(21 tuổi)</span></h1>
                <p>Nhân viên điều dưỡng</p>
            </div>
            <div class="flex flex-col  py-4" style="width: 200px">
                <p class="border gray flex justify-center items-center" style="width:50%; height:30px">Hết hạn</p>
                <p>Nhân viên điều dưỡng</p>
            </div>
                <h1 style="width:150px " class="font-bold">13/03/2024</h1>
                <h1 style="width:150px " >Hồ sơ nộp nhanh</h1>
                <h1 style="width:150px " >vieclamtai
                </br>namchau.com</h1>
                <h1 style="width:200px " >Chọn</h1>
        </div>
        <div class="border gray"></div>
        <div class="flex justify-between items-center">
            <div class="flex flex-col py-4" style="width:250px">
                <h1 class="font-bold text-base" style="height:30px">Nguyễn Văn B <span class="text-gray-400 text-base">(21 tuổi)</span></h1>
                <p>Nhân viên điều dưỡng</p>
            </div>
            <div class="flex flex-col  py-4" style="width: 200px">
                <p class="border gray flex justify-center items-center" style="width:50%; height:30px">Hết hạn</p>
                <p>Nhân viên điều dưỡng</p>
            </div>
                <h1 style="width:150px " class="font-bold">13/03/2024</h1>
                <h1 style="width:150px " >Hồ sơ nộp nhanh</h1>
                <h1 style="width:150px " >vieclamtai
                </br>namchau.com</h1>
                <h1 style="width:200px " >Chọn</h1>
        </div>
        <div class="border gray"></div>
        <div class="flex justify-between items-center">
            <div class="flex flex-col py-4" style="width:250px">
                <h1 class="font-bold text-base" style="height:30px">Nguyễn Văn C <span class="text-gray-400 text-base">(21 tuổi)</span></h1>
                <p>Nhân viên điều dưỡng</p>
            </div>
            <div class="flex flex-col  py-4" style="width: 200px">
                <p class="border gray flex justify-center items-center" style="width:50%; height:30px">Hết hạn</p>
                <p>Nhân viên điều dưỡng</p>
            </div>
                <h1 style="width:150px " class="font-bold">13/03/2024</h1>
                <h1 style="width:150px " >Hồ sơ nộp nhanh</h1>
                <h1 style="width:150px " >vieclamtai
                </br>namchau.com</h1>
                <h1 style="width:200px " >Chọn</h1>
        </div>
        <div class="border gray"></div>
        <div class="flex justify-between items-center">
            <div class="flex flex-col py-4" style="width:250px">
                <h1 class="font-bold text-base" style="height:30px">Nguyễn Thị C <span class="text-gray-400 text-base">(21 tuổi)</span></h1>
                <p>Nhân viên điều dưỡng</p>
            </div>
            <div class="flex flex-col  py-4" style="width: 200px">
                <p class="border gray flex justify-center items-center" style="width:50%; height:30px">Hết hạn</p>
                <p>Nhân viên điều dưỡng</p>
            </div>
                <h1 style="width:150px " class="font-bold">13/03/2024</h1>
                <h1 style="width:150px " >Hồ sơ nộp nhanh</h1>
                <h1 style="width:150px " >vieclamtai
                </br>namchau.com</h1>
                <h1 style="width:200px " >Chọn</h1>
        </div>
        <div class="border gray"></div>
        <div class="flex justify-between items-center">
            <div class="flex flex-col py-4" style="width:250px">
                <h1 class="font-bold text-base" style="height:30px">Nguyễn Thị D<span class="text-gray-400 text-base">(21 tuổi)</span></h1>
                <p>Nhân viên điều dưỡng</p>
            </div>
            <div class="flex flex-col  py-4" style="width: 200px">
                <p class="border gray flex justify-center items-center" style="width:50%; height:30px">Hết hạn</p>
                <p>Nhân viên điều dưỡng</p>
            </div>
                <h1 style="width:150px " class="font-bold">13/03/2024</h1>
                <h1 style="width:150px " >Hồ sơ nộp nhanh</h1>
                <h1 style="width:150px " >vieclamtai
                </br>namchau.com</h1>
                <h1 style="width:200px " >Chọn</h1>
        </div>
        <div class="border gray"></div>
    </div>
</div>
