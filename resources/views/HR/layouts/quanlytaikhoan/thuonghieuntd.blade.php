

@include('layouts.css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@include('HR.layouts.navigation')
<div class="w-full" style="border:1px solid blue"></div>
@include('HR.layouts.sidebar')

<div class="px-5 py-5" style=" width:1300px">
    <h1 class="text-blue-700 text-4xl font-bold " style="height: 100px; background:white">Quảng bá thương hiệu</h1>
    <div class="bg-white px-4 py-4">
        <div class="flex items-center py-4">
            <h1 class="font-bold text-2xl">Thông tin doanh nghiệp</h1>
            <p class=" ml-14">Hướng dẫn cập nhật thông tin</p>
        </div>
        <div class=" border gray"></div>
        <div class="flex py-5">
            <h1 class="px-4 py-4">Giới thiệu doanh nghiệp</h1>
            <form class="px-4 py-4" action="">
                <input class=" border black bg-white" type="textarea" style="height:300px;width:700px">
            </form>
        </div>
        <div class="flex py-5">
            <h1 class="px-4 py-4" style="width:200px">Website</h1>
            <form class="px-4 py-4" action="">
                <input class=" border black bg-white" type="text" style="width:700px">
                <button style="width:150px; height:50px" class="text-white mt-4 bg-blue-900">Cập nhật</button>
            </form>
        </div>
            
    </div>

    <div class="bg-white px-4 py-4">
        <div class="flex items-center py-4">
            <h1 class="font-bold text-2xl">Ảnh bìa công ty</h1>
        </div>
        <div class=" border gray"></div>
        <div class="flex py-5">
            <h1 class="px-4 py-4">Ảnh bìa hiện tại</h1>
            <form class="px-4 py-4" action="">
                <input class=" border black bg-white" type="text" style="width:700px;height:max-content">
            </form>
            
        </div>
        <button style="width:150px; height:50px" class="text-white mt-4 bg-blue-900 ml-40">Thay ảnh bìa</button>
                <a href="">Xem trang công ty</a>
            
    </div>
</div>