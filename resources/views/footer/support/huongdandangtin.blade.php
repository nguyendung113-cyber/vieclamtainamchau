


@include('layouts.css')


@include('layouts.navigation')

@include('layouts.menu')


<div class=" bg-gray-200">
    <div  class=" py-8 flex justify-center h-auto ">
        <div style="border-radius: 8px; " class="px-5 bg-white h-auto pb-6 w-3/4">
            <h1 class="font-bold mt-5 mb-3 text-blue-800 text-4xl">Sơ đồ</h1>
            <div style="border: 1px gray solid; width:100%;" class="flex justify-center"></div>
            <div class="mt-10 grid grid-cols-1 lg:grid-cols-3">
                <div>
                    <p class="font-bold text-xl">Người tìm việc</p>
                    <p>Tìm việc làm</p>
                    <p>Tạo hồ sơ</p>
                    <p>Tạo thông báo việc làm</p>
                    <p>Tạo CV online</p>
                    <p>Đăng nhập người tìm việc</p>
                </div>
                <div>
                    <p class="font-bold text-xl">Nhà tuyển dụng</p>
                    <p>Tìm hồ sơ</p>
                    <p>Đăng tin tuyển dụng</p>
                    <p>Đăng nhập nhà tuyển dụng</p>
                    <p>Báo giá</p>
                </div>
                <div>
                    <p class="font-bold text-xl">Liên hệ việc lam tại năm châu</p>
                    <p>Cẩm nang nghề nghiệp</p>
                    <p>Điều khoản sử dụng</p>
                    <p>Quy định bảo mật</p>
                </div>
            </div>
            <!-- <div class="mt-10 grid grid-cols-1 lg:grid-cols-3">
                <div>
                <p class="font-bold text-xl">Việc làm tại quốc gia</p>
                //<?php
                //            $sql_lietke_quocgia="SELECT * FROM tbl_quocgia ORDER BY  id_quocgia LIMIT 10";
                //            $query_lietke_quocgia= mysqli_query($mysqli,$sql_lietke_quocgia);
                //            $i=0;
                //            while ($row1 = mysqli_fetch_array($query_lietke_quocgia)){
                //            $i++;
                //        ?>
                //            <?php
                //            }
                //            ?>
                </div>
                <div>
                    <p class="font-bold text-xl">TOP ngành nghề</p>
                    //<?php
                    //        $sql_lietke_nganhnghe="SELECT * FROM tbl_nganhnghe ORDER BY  id_nganhnghe LIMIT 10";
                    //        $query_lietke_nganhnghe= mysqli_query($mysqli,$sql_lietke_nganhnghe);
                    //        $i=0;
                    //        while ($row = mysqli_fetch_array($query_lietke_nganhnghe)){
                    //        $i++;
                    //    ?>
                    //        <?php
                    //        }
                    //        ?>
                </div>
                <div>
                    <p class="font-bold text-xl">Top công ty</p>
                    //<?php
                    //        $sql_lietke_congty="SELECT * FROM tbl_congty ORDER BY  id_congty LIMIT 10";
                    //        $query_lietke_congty= mysqli_query($mysqli,$sql_lietke_congty);
                    //        $i=0;
                    //        while ($row = mysqli_fetch_array($query_lietke_congty)){
                    //        $i++;
                    //    ?>
                    //        <?php
                    //        }
                    //        ?>
                </div>
            </div> -->

        </div>      
    </div>
</div>
    <div class="bg-white">
    <div class="wp-container !max-w-[1320px] px-4 text-center">
    <div class="lg:px-0 w-full m-auto flex justify-between lg:gap-x-24 select-none py-6 lg:flex-row flex-col pb-8 lg:pb-6">
        <div class="lg:w-[49%] w-full">
            <div style="color: rgba(69, 29, 160); font-size: 30px" class="text-20 leading-8 font-bold text-se-mulled">
                Hotline cho người tìm việc
            </div>
            <div style="color: rgba(69, 29, 160); justify-content:space-around" class=" flex justify-between lg:flex lg:w-full m-auto mt-4  lg:justify-between px-6">
                <div class="mb-4 lg:mb-0">
                    <p style="color: rgba(69, 29, 160)" class="text-14 ">Hotline hỗ trợ</p>
                    <div class="mb-4 lg:mb-0">  
                    <div class="text-20 select-text mt-1 text-primary font-semibold">
                    0413 88 66 22
                </div></div>
                </div>
                <div class="mb-4 lg:mb-0">
                    <p class="text-14 text-[#8B5CF6]">Hotline hỗ trợ kỹ thuật</p>
                    <div class="mb-4 lg:mb-0">  
                    <div class="text-20 select-text mt-1 text-primary font-semibold">
                    0406 181 198
                </div></div>
                </div>
                
            </div>
            <div class=" h-auto lg:mt-4 lg:w-full lg:mx-0 m-auto">
                <span style="color: rgba(69, 29, 160)">
                    <button class="px-6 py-2 h-10 text-primary border rounded border-primary text-14 font-semibold">Tư vấn cho Người tìm việc</button>
                </span>
            </div>
        </div>
        <div style="background-color: #AFAFBC" class="w-[1px] bg-se-neutral-12 hidden lg:block"></div>
        <div class="lg:w-[49%] w-full">
            <div style="color:#4DA5EC; font-size: 30px" class="text-20 leading-8 font-bold text-se-mulled">
                Hotline cho Nhà tuyển dụng
            </div>
            <div style="color: #4DA5EC; justify-content:space-around" class=" flex justify-between lg:flex lg:w-full m-auto mt-4  lg:justify-between px-6">
                <div class="mb-4 lg:mb-0">
                    <p style="color: #4DA5EC" class="text-14 ">Hotline hỗ trợ</p>
                    <div class="mb-4 lg:mb-0">  
                    <div class="text-20 select-text mt-1 text-primary font-semibold">
                    0413 88 66 22
                </div></div>
                </div>
                <div class="mb-4 lg:mb-0">
                    <p style="color:#4DA5EC" class="text-14 ">Hotline hỗ trợ kỹ thuật</p>
                    <div class="mb-4 lg:mb-0">  
                    <div class="text-20 select-text mt-1 text-primary font-semibold">
                    0406 181 198
                </div></div>
                </div>
                
            </div>
            <div class=" h-auto lg:mt-4 lg:w-full lg:mx-0 m-auto">
                <span style="color:#4DA5EC">
                    <button class="px-6 py-2 h-10 text-primary border rounded border-primary text-14 font-semibold">Tư vấn cho Nhà tuyển dụng</button>
                </span>
            </div>
        </div>
           
        </div>
    </div>
 
    </div>
</div>

@include('layouts.footer')