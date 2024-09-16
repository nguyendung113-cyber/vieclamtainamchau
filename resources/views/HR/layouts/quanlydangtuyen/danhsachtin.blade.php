
@include('layouts.css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@include('HR.layouts.navigation')
<div class="w-full" style="border:1px solid blue"></div>
@include('HR.layouts.sidebar')


<div class="px-5 py-5 w-full" style="max-width: 1400px;">
    <h1 class="text-blue-700 text-4xl font-bold " style="height: 100px; background:white">DANH SÁCH ĐĂNG TIN</h1>
    <div class="flex  justify-between items-center">
        <a class="text-white bg-blue-900 text-center py-5" style="border-radius:10px; width:150px"  href="index.php?action=nhatuyendung_1.php">Tạo tin đăng</a>
        <h1 >Để đảm bảo đăng tin hợp lê, tham khảo <span class="text-blue-700"> Quy định duyệt tin tuyển dụng </span>tại Việc Làm tại Năm Châu</h1>
    </div>
    <div class="flex justify-between py-3 items-center">
        <h1>Thống kê tin: </h1>
        <h1 style=" border-radius:10px ; width:170px;height:100px"  class="px-4 py-4 text-center bg-green-300">Thông số tin đăng </br>25</h1>
        <h1 style="border-radius:10px ; width:170px;height:100px"  class="px-4 py-4 text-center bg-pink-300">Tin trả phí</br>25</h1>
        <h1 style=" border-radius:10px ; width:170px;height:100px"  class="px-4 py-4 text-center bg-gray-300">Tin không phí</br>25</h1>
        <h1 style="border-radius:10px ; width:270px;height:100px"  class="px-4 py-4 text-center bg-gray-200">Tin gói miễn phí</br>1/8</br>(Mỗi tháng có 1 lần miễn phí)</h1>
        <h1 style=" border-radius:10px ; width:170px;height:100px" class="px-4 py-4 text-center bg-gray-100">Tin không phí không giới hạn</br>0</h1>
    </div>
    <div class="flex py-2 px-4 justify-between">
        <h1>Bộ lọc: </h1>
        <select style="width:200px;height:40px; border: 1px solid gray; border-radius:5px" name="" id="">
            <option  value="1" aria-placeholder="">Tất cả tin đăng</option>
        </select>
        <select style="width:200px;height:40px; border: 1px solid gray; border-radius:5px" name="" id="">
            <option  value="1" aria-placeholder="">Tất cả trạng thái</option>
        </select>
        <select style="width:200px;height:40px; border: 1px solid gray; border-radius:5px" name="" id="">
            <option  value="1" aria-placeholder="">Tất cả loại tin</option>
        </select>
        <select style="width:200px;height:40px; border: 1px solid gray; border-radius:5px" name="" id="">
            <option  value="1" aria-placeholder="">Tất cả</option>
        </select>
        <div class="bg-gray-300" style="height:40px">
            <div type=" file" style="width:200px;height:40px; border: 1px solid gray; border-radius:5px" name="" id="" >
            <h1 style="height:40px" class="justify-center flex items-center">Tải danh sách</h1>
        </div>
        </div>

    </div>
        <div class="flex justify-between items-center">
            <h1 style="height:40px;margin-top:20px; width:300px;">Tên tin đăng</h1>
            <select style="width:150px;height:40px; " name="" id="">
                <option value="1">Ngày đăng</option>
            </select>
            <select style="height:40px;width:150px " name="" id="">
                <option value="1">Thời hạn nộp</option>
            </select>
            <select style="height:40px;width:100px  " name="" id="">
                <option value="1">Lượt nộp</option>
            </select>
            <select style="height:40px;width:100px  " name="" id="">
                <option value="1">Lượt xem</option>
            </select>
            <select style="height:40px;width:150px  " name="" id="">
                <option value="1">Tình trạng tin</option>
            </select>
            <select style="height:40px;width:150px  " name="" id="">
                <option value="1">Trạng thái</option>
            </select>
            <select style="height:40px;width:100px " name="" id="">
                <option value="1">Khác</option>
            </select>
        </div>            
        <div class="border gray"></div>
        <div class="flex justify-between items-center">
            <div class="flex flex-col" style="width:300px">
                <h1 class="font-bold text-xl">Nhân viên Điều Dưỡng</h1>
                <p>Loại tin: Tin không phí</p>
                <p>Mã tin: 20241213</p>
                <p>Xem hồ sơ ứng viên phù hợp</p>
            </div>
                <h1 style="width:150px " class="font-bold">13/03/2024</h1>
                <h1 style="width:150px " class="text-red-700">Đã hết hạn</h1>
                <h1 style="width:100px " class="text-blue-400">185</h1>
                <h1 style="width:100px " class="text-blue-400">2045</h1>
                <h1 style="width:150px " class="font-bold">Đang ẩn</h1>
                <h1 style="width:150px" class=" bg-green-500 font-bold">Đã duyệt</h1>
                <div  style="border: 1px solid blue; margin-left:5px;border-radius:5px" class="px-2 ">
                    <h1>Xuất bản</h1>
                </div>
        </div>
        <div class="border gray"></div>
        <div class="flex justify-between items-center">
            <div class="flex flex-col" style="width:300px">
                <h1 class="font-bold text-xl">Nhân viên Điều Dưỡng</h1>
                <p>Loại tin: Tin không phí</p>
                <p>Mã tin: 20241213</p>
                <p>Xem hồ sơ ứng viên phù hợp</p>
            </div>
                <h1 style="width:150px " class="font-bold">13/03/2024</h1>
                <h1 style="width:150px " class="text-red-700">Đã hết hạn</h1>
                <h1 style="width:100px " class="text-blue-400">185</h1>
                <h1 style="width:100px " class="text-blue-400">2045</h1>
                <h1 style="width:150px " class="font-bold">Đang ẩn</h1>
                <h1 style="width:150px" class=" bg-yellow-300 font-bold">Chờ duyệt</h1>
                <div  style="border: 1px solid blue; margin-left:5px;border-radius:5px" class="px-2 ">
                    <h1>Xuất bản</h1>
                </div>
        </div>
</div>
