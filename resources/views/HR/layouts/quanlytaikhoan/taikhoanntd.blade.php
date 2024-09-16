

@include('layouts.css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@include('HR.layouts.navigation')
<div class="w-full" style="border:1px solid blue"></div>
@include('HR.layouts.sidebar')

<div class="px-5 py-5" style=" width:1300px">

<div class=" tab flex bg-white" style="width:800px">
  <button class="text-2xl" style="height: 50px;width:300px" onclick="openCity('filter')">Lọc hồ sơ ứng viên</button>
  <button class="text-2xl"style="height: 50px;width:300px" onclick="openCity('thongbao')">Thông báo hồ sơ phù hợp</button>
</div>

<div id="filter" class=" city">
  <h2 class="px-3 py-4 font-bold">Lọc hồ sơ ứng viên</h2>
  <div class="bg-white px-4 py-4">
  <div class=" px-3  py-4 flex justify-between">
    <input class="border gray" type="text" placeholder="Nhập tên vị trí hoặc chức danh" style="width:600px">
    <input class="border gray" type="text" placeholder="Tất cả nghề nghiệp" style="width:500px">
    <button style="width:100px; height:40px" class="flex justify-center items-center text-white bg-blue-900">
      Tìm kiếm
    </button>
  </div>
  <div class="flex">
    <div class="flex flex-col border py-2" style="width:30%">
      <div class="flex justify-between items-center px-3 py-4" style="height:70px">
        <h1 class="text-3xl font-bold">Bộ lọc nâng cao</h1>
        <p class="text-blue-700">Xóa cài đặt</p>
        </div>
      <div class="border gray text-center" style="width:90%"></div>
      <div class="flex flex-col px-4 py-4" >
          <h1 class="font-bold">Thời gian cập nhật</h1>
          <form action="" class="ml-3 ">
            <input type="radio" id="all" name="time_update" value="all">
              <label for="all">Tất cả</label><br>
            <input type="radio" id="1day" name="time_update" value="1day">
              <label for="1day">Trong vòng 1 ngày</label><br>
            <input type="radio" id="1week" name="time_update" value="1week">
              <label for="1week">1 Tuần gần đây</label><br>
            <input type="radio" id="1month" name="time_update" value="1month">
              <label for="1month">1 tháng gần đây</label><br>
            <input type="radio" id="1year" name="time_update" value="1year">
              <label for="1year">1 Tuần gần đây</label>
          </form>
        </div>
        <div class="border gray text-center" style="width:90%"></div>
        <div class="flex flex-col px-4 py-4" >
          <h1 class="font-bold">Thời gian cập nhật</h1>
          <form action="" class="ml-3 ">
            <input type="radio" id="all-time" name="time_update" value="all-time">
              <label for="all-time">Toàn thời gian cố định</label><br>
            <input type="all-time1" id="1week" name="time_update" value="all-time1">
              <label for="all-time1">Toàn thời gian tạm thời</label><br>
            <input type="radio" id="part-time" name="time_update" value="part-time">
              <label for="part-time">Bán thời gian cố định</label><br>
            <input type="radio" id="part-time1" name="time_update" value="part-time1">
              <label for="part-time1">Bán thời gian tạm thời</label><br>
            <input type="radio" id="hopdong" name="time_update" value="hopdong">
              <label for="hopdong">Theo hợp đồng tư vấn</label><br>
            <input type="radio" id="intern" name="time_update" value="intern">
              <label for="intern">Thực tập</label><br>
            <input type="radio" id="khac" name="time_update" value="khac">
              <label for="khac">Khác</label><br>
          </form>
        </div>
        <div class="border gray text-center" style="width:90%"></div>

        <div class="flex flex-col px-4 py-4" >
          <h1>Địa điểm</h1>
          <select name="" id="">
            <option value="1">Toàn châu lục</option>
          </select>
          </form>
        </div>
        <div class="border gray text-center" style="width:90%"></div>

        <div class="flex flex-col px-4 py-4" >
          <h1>Bằng cấp</h1>
          <select class="border gray py-3" name="" id="">
            <option value="1">Tất cả bằng cấp</option>
          </select>
          </form>
        </div>
        <div class="border gray text-center" style="width:90%"></div>
        <div class="flex flex-col px-4 py-4" >
        <button type="button" class="collapsible">Kinh nghiệm</button>
          <div class="content mt-3">
            <p>Kinh nghiệm</p>
          </div>
        </div>
        <div class="border gray text-center" style="width:90%"></div>
        <div class="flex flex-col px-4 py-4" >
        <button type="button" class="collapsible">Mức lương</button>
          <div class="content mt-3">
            <p>Mức lương</p>
          </div>
        </div>
        <div class="border gray text-center" style="width:90%"></div>
        <div class="flex flex-col px-4 py-4" >
        <button type="button" class="collapsible">Giới tính</button>
          <div class="content mt-3">
            <p>Kinh nghiệm</p>
          </div>
        </div>
        <div class="border gray text-center" style="width:90%"></div>
        <div class="flex flex-col px-4 py-4" >
        <button type="button" class="collapsible">Ngoại ngữ</button>
          <div class="content mt-3">
            <p>Ngoại ngữ</p>
          </div>
        </div>
        <div class="border gray text-center" style="width:90%"></div>
        <div class="flex flex-col px-4 py-4" >
        <button type="button" class="collapsible">Loại hồ sơ</button>
          <div class="content mt-3">
            <p>Loại hồ sơ</p>
          </div>
        </div>
    </div>
    <div class="flex flex-col py-2 ml-4 pt-4" style="width:70%">
      <div class="flex">
        <p class="font-bold text-2xl">Kết quả tìm thấy: <span class="font-bold text-red-700 text-2xl">12.922.291 hồ sơ</span></p>
        <select name="" id="">
          <option value="1">10 CV/Trang</option>
        </select>
      </div>
      <div class="border gray px-4 py-4">
        <div class="flex justify-between">
          <div class="flex flex-col" style="width:500px">
            <h1 class="font-bold text-xl" style="height:30px">Nguyễn Thị A <span class="text-gray-400 text-base">(25 tuổi)</span></h1>
            <h1>Nhân viên điều dưỡng</h1>
            <div class="flex justify-between">
              <div>
                <p>140.000 yeen</p>
              </div>
              <div>
                <p>5 năm</p>
              </div>
              <div>
                <p>Hokkaido, Nhật bản</p>
              </div>
        </div>
          </div>
          <div class="flex flex-col" style="float:right">
            <div>
              <p class="py-2 float-right bg-gray-300 text-center" style="width:50px">Xem</p>
            </div>
            <h1>Thời gian cập nhật: 03/04/2024</h1>
            <h1 style="float:right">NTD quan tâm: 205</h1>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>
</div>

<div id="thongbao" class="city bg-white mt-5" style="display:none">
  <div class="px-4 py-4">
    <h1 class="font-bold">Thông báo hồ sơ ứng viên phù hợp qua email (1/3)</h1>
    <h1>Bạn có thẻ cài đặt tính năng nhận thông báo hồ sơ phù hợp và gửi thông báo có ứng viên đến địa chỉ email nhà tuyển dụng tinh năng <span class="blue underline">lọc hồ sơ ứng viên</span></h1>
    <div class="mt-10 border gray px-4 py-4" style="width:800px"> 
    <div class="flex justify-between  font-bold texl-xl" >
          <h1>Nhận thông báo hồ sơ để xuất</h1>
          <h1 class="gray">Bật/Tắt thông báo</h1>
    </div>
    <div class="border gray mt-3"></div>
    <div class="flex">
      <div class="grid py-3 gap-3" style="width:50%">
        <label for="Email">Email nhận thông báo:</label>
        <label for="chucvu">Chức danh: </label>
        <label for="job">Nghề nghiệp</label>
        <label for="location">Địa điểm: </label>
        <label for="time_upadte">Thời gian cập nhật: </label>
        <label for="hinhthuc">Hình thức làm việc:</label>
        <label for="bangcap">Bằng cấp:</label>
        <label for="kinhnghiem">Kinh nghiệm</label>
        <label for="salary">Mức lương:</label>
        <label for="Gioitinh">Giới tính:</label>
        <label for="langague">Ngoại ngữ:</label>
      </div>
      <div class="grid py-3 gap-3">
        <label for="Email1" class="font-bold">jellyfishdns@gmail.com</label>
        <label for="chucvu1" class="font-bold">Nhân viên Điều dưỡng</label>
        <label for="job1" class="font-bold">Y tế</label>
        <label for="location1" class="font-bold">Nhật Bản </label>
        <label for="time_upadte1" class="font-bold">Tất cả</label>
        <label for="hinhthuc1" class="font-bold">Tất cả</label>
        <label for="bangcap1" class="font-bold">Nghề</label>
        <label for="kinhnghiem1" class="font-bold">1 năm</label>
        <label for="salary1" class="font-bold">Tất cả mức lương</label>
        <label for="Gioitinh1" class="font-bold">Tất cả giới tính</label>
        <label for="langague1" class="font-bold">Tiếng Nhật</label>
      </div>
      
    </div>
    <button class="text-white px-4 py-5 bg-blue-800" style="width:200px">
        Hiệu chỉnh bộ lọc
      </button>
      <button class="text-white px-4 py-5 bg-blue-800" style="width:200px">
        Xóa thông báo
      </button>
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

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>