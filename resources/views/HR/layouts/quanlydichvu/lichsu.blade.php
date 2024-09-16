
@include('layouts.css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@include('HR.layouts.navigation')
<div class="w-full" style="border:1px solid blue"></div>
@include('HR.layouts.sidebar')
<div class="px-5 py-5" style=" width:1300px">
    <h1 class="text-blue-700 text-4xl font-bold mb-5" style="height: 100px; background:white"> Lịch sử đơn hàng</h1>

    <div class="bg-white">
    <div class=" px-3  py-4 flex gap-4">
        <input class="border gray" type="text" placeholder="Tìm mã đơn hàng" style="width:500px">
        <select class="border gray "  style="width:250px">
            <option value="1">Trạng thái đơn hàng</option>
        </select>
        <select class="border gray"  style="width:250px">
            <option value="1">Thời gian đặt hàng</option>
        </select>
    </div>
    <table class="border gray" style="width:100%">
        <tr class="border gray bg-gray-300 px-3 py-3" style="height:max-content; width:max-content">
            <th class="border gray"></th>
            <th class="border gray">Mã đơn hàng</th>
            <th class="border gray">TRẠNG THÁI ĐƠN HÀNG</th>
            <th class="border gray">THỜI GIAN ĐẶT HÀNG</th>
            <th class="border gray">HẠN KÍCH HOẠT</th>
            <th class="border gray">SL SẢN PHẨM</th>
            <th class="border gray">ĐÃ KÍCH HOẠT</th>
            <th class="border gray">GIÁ TRỊ</th>
        </tr>
        <tr class="border gray px-3 py-3" style="height:100px; width:max-content">
            <th class="border gray">></th>
            <th class="border gray">MP - 2001234991</th>
            <th class="border gray text-green-500">TĐã thanh toán</th>
            <th class="border gray">00:00 15/03/2024</th>
            <th class="border gray">30/04/2024</th>
            <th class="border gray">1</th>
            <th class="border gray">1</th>
            <th class="border gray">0đ</th>
        </tr>
        <tr class="border gray px-3 py-3" style="height:100px; width:max-content">
            <th class="border gray">></th>
            <th class="border gray">MP - 2001234991</th>
            <th class="border gray text-green-500">TĐã thanh toán</th>
            <th class="border gray">00:00 15/03/2024</th>
            <th class="border gray">30/04/2024</th>
            <th class="border gray">1</th>
            <th class="border gray">1</th>
            <th class="border gray">0đ</th>
        </tr>
        <tr class="border gray px-3 py-3" style="height:100px; width:max-content">
            <th class="border gray">></th>
            <th class="border gray">MP - 2001234991</th>
            <th class="border gray text-green-500">TĐã thanh toán</th>
            <th class="border gray">00:00 15/03/2024</th>
            <th class="border gray">30/04/2024</th>
            <th class="border gray">1</th>
            <th class="border gray">1</th>
            <th class="border gray">0đ</th>
        </tr>
        <tr class="border gray px-3 py-3" style="height:100px; width:max-content">
            <th class="border gray">></th>
            <th class="border gray">MP - 2001234991</th>
            <th class="border gray text-green-500">TĐã thanh toán</th>
            <th class="border gray">00:00 15/03/2024</th>
            <th class="border gray">30/04/2024</th>
            <th class="border gray">1</th>
            <th class="border gray">1</th>
            <th class="border gray">0đ</th>
        </tr>
        <tr class="border gray px-3 py-3" style="height:100px; width:max-content">
            <th class="border gray">></th>
            <th class="border gray">MP - 2001234991</th>
            <th class="border gray text-green-500">TĐã thanh toán</th>
            <th class="border gray">00:00 15/03/2024</th>
            <th class="border gray">30/04/2024</th>
            <th class="border gray">1</th>
            <th class="border gray">1</th>
            <th class="border gray">0đ</th>
        </tr>
        </table>
    </div>

</div>
