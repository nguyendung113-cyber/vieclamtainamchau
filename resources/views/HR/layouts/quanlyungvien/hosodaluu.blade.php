
@include('layouts.css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@include('HR.layouts.navigation')
<div class="w-full" style="border:1px solid blue"></div>
@include('HR.layouts.sidebar')

<div class="px-5 py-5" style=" width:1300px">
    <h1 class="text-blue-700 bg-white text-4xl font-bold mb-5" style="height: 100px; background:white">Hồ sơ đã lưu</h1>
    <div class="px-4 py-4 bg-white">


    <div class="flex  justify-between items-center">
        <h1 class="font-bold text-2xl">Hồ sơ đã lưu: <span class="text-red-700 font-bold text-2xl">0</span></h1>
        <h1 >Hồ sợ bị xóa hoặc ẩn bởi ứng viên sẽ không thể tải xuống. Danh sách hồ sơ sẽ bị xóa trong 6 tháng</h1>
    </div>
    <div class="flex mt-5 mb-5 gap-7">
        <div class="border" style="border:1px solid gray; width:300px">
            <input style="border-width: 0px;" type="text" placeholder="Nhập tên hồ sơ" name="" id="">
        </div>
        <div class="border" style="border:1px solid gray;width:250px">
            <input style="border-width: 0px;" type="datetime-local" placeholder="Toàn bộ thời gian đã lưu" name="" id="">
        </div>
        <select  class="border" style="border:1px solid gray;width:300px" name="" id="">
            <option value="1">Tất cả hồ sơ</option>
        </select>
        <select  class=" bg-green-400" style="border:1px solid gray;width:300px" name="" id="">
            <option value="1">Lọc nâng cao</option>
        </select>
    </div>
    <div class="flex mt-5 mb-5 gap-7">
        <div class="font-bold" style=" width:300px">Tên hồ sơ</div>
        <div class="font-bold"  style=" width:250px">Tình trạng</div>
        <div class="font-bold"  style=" width:300px">Ngày lưu</div>
        <div class="font-bold"  style=" width:300px">Trạng thái tuyển dụng</div>
    </div>
    <div class="border gray"></div>
    </div>
</div>
