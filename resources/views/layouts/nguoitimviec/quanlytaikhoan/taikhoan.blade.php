

@include('layouts.css')
@include('layouts.navigation')

<div class="flex justify-center">
@include('layouts.nguoitimviec.sidebar')

<div class="px-5 py-5 ">


        <form method="POST" action="">

        <div class="flex text-4xl">
            <h1 class="text-blue-400">Xin chào,</h1>
            <h1 class="text-blue-900"></h1>
        </div>
        <div class="px-4 py-4 mt-6 text-2xl bg-white">
            <h1>Thông tin đăng ký</h1>
           
            <div class="border gray mt-3 mb-3"></div>
            <div class="flex  justify-center">
                <label style="width: 200px; height:40px" for="email">Email</label>
                <input style="width:600px; height:40px" class="border gray" name="email" type="email" placeholder="">
                <div class="flex justify-center bg-pink-300 ml-5" style="border-radius:5px; width:250px;">

                <input type="submit" name="updateemail"  value="Sửa Email">
            </span>
            </div>

        </form>
    </div>
    <div class="px-4 py-4 mt-6 text-2xl bg-white">
        <h1 class="text-xl">Thông tin cá nhân</h1>
    <form method="POST" action="">
  
        <div class="border gray mt-3 mb-3"></div>
        <h1>Ảnh đại diện</h1>
        <div class="flex  px-3 py-3">
        <i style="width:50px; height:50px; font-size:75px" class="fa-solid fa-circle-user "></i>
        <div class="ml-6 mt-3 flex flex-col">
            <div>                 
            <input type="file" id="uploadBtn" style="display: none;">
                <label class=" inline-block bg-gray-300 text-center text justify-center ml-10 cursor-pointer" style="border-radius:5px;width:300px;height:40px" for="uploadBtn">UploadFile</label>
            </input>           
            <p class="text-gray-700 text-xl ml-10">Định dạng JPG, .JEPG, .PNG dung lượng thấp hơn 300kb với kích thước tối thiểu 300x300px</p>
            </div>  
        </div>
        
        </div>
        <div class="border gray mt-3 mb-3"></div>
        <div class="flex">
            <div class="mt-4">
                <h1 class="font-bold mb-4">Họ và tên</h1>
                <input name="name" class="border gray" style="height:50px; width:500px" type="text" value="">
            </div>
            <div class="mt-4 ml-4">
                <h1 class="font-bold mb-4">Ngày sinh</h1>
                <input name="ngaysinh" class="border gray" style="height:50px; width:500px" type=" datetime" value="">
            </div>
        </div>
        <div class="flex">
            <!-- <div class="mt-4" style="width:50%">
                <h1 class="font-bold mb-4">Châu lục</h1>
                <select style="width:500px; height:50px" class="border gray" name="" id="">
             
                </select>
            </div> -->

            <div class="mt-4" style="width:50%">
                <h1 class="font-bold mb-4">Châu lục</h1>
               
            </div>

            <?php
            ?>
        </div>
        <div class="flex" >
            <div class="mt-4 flex justify-between">
            <div >
                <label class="font-bold" for="">Giới tính</label>
                <div class="flex mt-4" style="width:540px">
                    <input type="radio"  name="gioitinh" value="Female">
                   <label class="ml-4" for="html">Nữ</label><br>
                    <input class="ml-5" type="radio"  name="gioitinh" value="Male">
                   <label class="ml-4" for="html">Nam</label><br>
                </div>
            </div>
            <div style="widtH:50%">
                <label class="font-bold" for="">Tình trạng hôn nhân</label>
                <div class="flex mt-4">
                    <input type="radio" name="kethon" value="yes">
                   <label class="ml-4" for="html">Độc thân</label><br>
                    <input class="ml-5" type="radio"  name="kethon" value="no">
                   <label class="ml-4" for="html">Đã lập gia đình</label><br>
                </div>
            </div>
                
            </div>
        </div>
        <div class="py-4 mt-4">
            <h1 class="font-bold text-2xl ">Số điện thoại</h1>
            <input name="SDT" style="width:100%; height:50px" class="border gray mt-3" type="text" value="">
        </div>
        <div class="flex justify-end">
            <!-- <button class="text-2xl bg-gray-300 text-blue-800 px-7 py-3" style="border-radius: 5px;">Hủy</button> -->
            <input type="submit" name="updateuser" class=" cursor-pointer text-2xl text-blue-800 px-7 py-3 ml-4" style="border-radius: 5px;border: 1px solid blue" value="Lưu thông tin">
        </div>
        
    </div>
    </form>

</div>
</div>




<script>const form = document.querySelector("form");

form.addEventListener(
  "submit",
  (event) => {
    const data = new FormData(form);
    let output = "";
    for (const entry of data) {
      output = `${output}${entry[0]}=${entry[1]}\r`;
    }
    log.innerText = output;
    event.preventDefault();
  },
  false,
);</script>