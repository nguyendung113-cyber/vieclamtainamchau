
@include('layouts.css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@include('HR.layouts.navigation')
<div class="w-full" style="border:1px solid blue"></div>
@include('HR.layouts.sidebar')

<div class="px-5 py-5" style=" width:1300px">

<div class=" tab flex bg-white" style="width:800px">
  <button class="text-2xl" style="height: 50px;width:500px" onclick="openCity('filter')">Yêu cầu hỗ trợ & báo cáo vi phạm</button>
  <button class="text-2xl"style="height: 50px;width:300px" onclick="openCity('thongbao')">Tư vấn tuyển dụng</button>
</div>

<div id="filter" class=" bg-white city mt-5">
    <div class=" px-4 py-4">
        <h1 class="font-bold">Vieclamnamchau luôn sẵn sàng tiếp nhận và lắng nghe mọi ý kiến phản hồi từ khách hàng. Chúng tôi sẽ luôn không ngừng cải tiến chất lượng sản phẩm và dịch vụ để phục vụ Quý khách. Hãy liên hệ với chúng tôi theo thông tin bên dưới</h1>
        <div class="flex items-center">
            <label class="font-bold text-xl" for="yeucau" style="width:300px">Chọn yêu cầu:</label>
            <select class="border gray" style="width:400px; height:50px" name="" id="">
                <option class="text-xl" value="1">Chọn yêu cầu</option>
            </select>
        </div>
        <div class="flex mt-3">
            <label class="font-bold text-xl" for="yeucau" style="width:300px">Nội dung</label>
            <input class="border gray" type="textarea" style="width:700px; height:300px" placeholder="Nội dung bạn muốn góp ý hoặc gửi yêu cầu" name="" id="">
        </div>
        <div class="flex mt-3">
            <label class="font-bold text-xl" for="yeucau" style="width:300px">Mã bảo mật</label>
            <div class="flex flex-col">
                <input class="border gray" type="text" style="width:300px; height:50px" placeholder="Nhập dãy ký tự kế bên" name="" id="">
            
            <button class="bg-blue-900 text-white text-xl mt-3"style="width:200px; height:50px">
                Gửi yêu cầu
            </button>
            </div>
            </div>
        </div>

</div>

<div id="thongbao" class="city bg-white mt-5" style="display:none">
  <div class="px-4 py-4">
    <div class="grid grid-cols-2">
        <div>
            <h1 class="font-bold">Liên hệ trực tiếp</h1>
            <h1>Trong trường hợp khẩn cấp bạn có thắc mắc hoặc cần tư vấn những vấn đề dịch vụ, tài khoản nhà tuyển dụng. Vui lòng liên hệ trực tiếp đến chuyên viên chăm sóc tài khoản nhà tuyển dụng</h1>
        </div>
        <div class="flex">
            <img style="width:100px; height:100px" src="./images/support_images/image.png" alt="">
            <div class="flex flex-col">
                <div class="flex">
                    <h1 style="width:150px" class="font-bold">Tên NVCS: </h1>
                    <h1>Kiều Thị Tuyết</h1>
                </div>
                <div class="flex">
                    <h1 style="width:150px" class="font-bold">Hotline: </h1>
                    <h1>0911737530</h1>
                </div>
                <div class="flex">
                    <h1 style="width:150px" class="font-bold">Email liên hệ: </h1>
                    <h1>tuyetkt@nhanlucsieuviet.com:</h1>
                </div>
            </div>
        </div>
</div>
    <div class="border mt-3 mb-3"></div>
    <h1 class="font-bold">Gửi yêu cầu tư vấn</h1>
    <div class="grid grid-cols-2">
        <h1>Trong trường hợp của bạn muốn nhận tư vấn, giải đáp thông tin qua địa chỉ Email. Vui lòng nhập thông tin cần tư vấn</h1>
    </div>
    <div class="mt-4">
        <div class="flex items-center" >
            <h1 style="width:200px">Địa chỉ Email: </h1>
            <select class="border bg-gray-200" style="width:500px; height:50px" name="Email" id="">
                <option value="1">jellyfishdns@gamil.com</option>
            </select>
        </div>
        <div class="flex items-center mt-5" >
            <h1 style="width:200px">Tiều đề: </h1>
            <input type="text" class="border" style="width:500px; height:50px" placeholder="Bạn đang thắc mắc" name="" id="">
        </div>
        <div class="flex mt-10">
            <label class="font-bold text-xl" for="yeucau" style="width:200px">Mã bảo mật</label>
            <div class="flex flex-col">
                <input class="border gray" type="text" style="width:300px; height:50px" placeholder="Nội dung bạn muốn góp ý hoặc gửi yêu cầu" name="" id="">
            
            <button class="bg-blue-900 text-white text-xl mt-3"style="width:200px; height:50px">
                Gửi yêu cầu
            </button>
            </div>
            </div>
    </div>
  </div>
</div>


</div>

<style>
.collapsible {
  color: black;
  cursor: pointer;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
}

</style>

<script>
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}

</script>