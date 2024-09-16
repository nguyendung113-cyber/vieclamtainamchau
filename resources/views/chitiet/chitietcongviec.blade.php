@include('layouts.css')
@include('layouts.navigation')
@include('layouts.menu')
<div class="flex justify-center">


<div style="max-width: 1400px;" class=" tracking-normal pt-12 md:pt-0">
    <div class=" md:px-10 py-3 md:py-4 px-4 shadow-sd-12 rounded-sm mb-5">
   
        <div style="justify-content: center" class=" lg:flex md:px-10 py-3 md:py-4 px-4 bg-white shadow-sd-12 rounded-sm mb-5">

            <div style="max-width:1280px; width:100%; padding:20px" class="flex items-start">
            <img style="width:100px" src="{{asset('/public/uploads/congty/'.$congtys->logo_congty)}}" alt="">

           
            <div class="flex flex-col w-full">
                <h1 class="font-bold lg:text-4xl ">{{$data->tennghe}}</h1>
                <div class="md:flex  mt-5">
                    <div class="flex flex-col lg:flex-row items-start min-w-[250px] mb-4">
                            <p  class="mr-1 text-grey-11 flex-shrink-0"> <i class="fa-solid fa-money-bill mr-3"></i>tên công ty: {{$data->tencongty}}</p>
                            <p class="mr-1 text-grey-11 flex-shrink-0"> <i class="fa-solid fa-money-bill mr-3"></i>Mức lương: {{$data->Luong}}</p>
                            <p class="mr-1 text-grey-11 flex-shrink-0 mr-5"> <i class="fa-solid fa-money-bill mr-3"></i>Hạn nộp hồ sơ: 30/3/2024</p>
                    </div>
                </div>
                <div style="margin-top: 10px;" class="flex  justify-between w-full">
                    <div  class="w-full md:w-[60%]">
                        <div class="flex flex-col lg:flex-row items-start">
                            <div class=" flex flex-col">              
                                <input type="file" id="uploadBtn" style="display: none;">
                                    <label style="background-color: rgba(69, 29, 160);width:150px;" class=" cursor-pointer py-3 px-6 mb-4 md:mb-0 bg-primary text-white text-14  md:min-w-[165px] max-w-[165px] flex items-center justify-center rounded-md !w-full md:!w-[300px] order-2 md:order-1" for="uploadBtn">Nộp hồ sơ</label>
                                </input>           
                            </div>
                        </div>
                    </div>    
                </div>
                <div>
                    <span style="width:250px;" class=" flex font-medium pr-1">Lượt xem: 100</span>
                    <span style="width:250px;" class=" flex font-medium pr-1">Ngày cập nhật: {{$data->ngaydang}}</span>
                </div> 
            </div>


            </div>

        </div>

    </div>

    <div class=" px-4 flex flex-col lg:flex-row">
 
        <div class = " w-full lg:w-3/4 pb-4">
            <div style=" width: 100%; height:40px ;   box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);" class=" md:w-[450px] flex mb-[-1px] z-10 items-center">
                <a style="width:35%; display: flex;justify-content: center;" class=" text-16 font-semibold bg-white p-[14px] cursor-pointer text-se-accent-100  border-se-accent-100">Chi tiết tuyển dụng</a>
                <a style="width:35%; display: flex;justify-content: center;" class=" text-16 font-semibold  p-[14px] cursor-pointer text-se-accent-100  border-se-accent-100">Công ty</a>
            </div>
            <div style="box-shadow: 0px 0px 6px rgba(0,0,0,.12); " class=" px-12 md:px-10 py-4 bg-white shadow-sd-12 rounded-sm">
            <h2 style="font-size: 50px; margin-left:20px" class="font-semibold py-4">Thông tin chung</h2>
            <div  class=" px-4 pt-5 pb-1 mb-6" style="--tw-bg-opacity: 1;background-color: rgb(245 243 255 / var(--tw-bg-opacity))">
                <div style="border-bottom-width: 1px; border-color: #E489F6; " class="flex justify-between md:flex md:border-b mb-4">
                    <div style="height: 80px; " class="flex items-center mb-4 md:w-[33%]">
                        <i style="font-size: 30px;" class="fa-regular fa-calendar-days"></i>
                        <h3 class=" px-3 ml-3">
                            <p style=" color: gray; width: max-content" class="mr-1 text-xl ">Ngày đăng</p>
                            <p class=" font-bold text-base">{{$data->ngaydang}}</p>

                        </h3>
                    </div>
                    <div style="height: 80px;" class="flex items-center mb-4 md:w-[33%]">
                    
                        <i style="font-size: 30px; width: max-content" class="fa-solid fa-calendar-check"></i>
                        <h3 class=" px-3 ml-3">
                            <p style=" color: gray" class="mr-1 text-xl ">Thời gian thử việc</p>
                            <p class=" font-bold text-base">{{$data->thoigianthuviec}}</p>
                        </h3>
                    </div>
                    <div style="height: 80px;" class="flex items-center mb-4 md:w-[33%]">
                    <i  style="font-size: 30px; width: max-content" class="fa-solid fa-star"></i>
                        <h3 class=" px-3 ml-3">
                            <p style=" color: gray" class="mr-1 text-xl ">Cấp bậc</p>
                            <p class=" font-bold text-base">{{$data->capbac}}</p>
                        </h3>
                    </div>
                    
            </div>
            <div style="border-bottom-width: 1px;border-color: #E489F6;" class="flex justify-start md:flex md:border-b mb-4">
                    <div style="height: 80px;" class="flex items-center mb-4 md:w-[33%]">
                        <i style="font-size: 30px;"  class="fa-solid fa-user-group"></i>
                        <h3 class=" px-3 ml-3">
                            <p style=" color: gray; width: max-content" class="mr-1 text-xl ">Số lượng tuyển</p>
                            <p class=" font-bold text-base">{{$data->soluong}}</p>
                        </h3>
                    </div>
                    <div style="height: 80px;" class="flex items-center mb-4 md:w-[33%]">
                        <i style="font-size: 30px; width: max-content" class="fa-regular fa-calendar-days"></i>
                        <h3 class=" px-3 ml-3">
                            <p style=" color: gray" class="mr-1 text-xl ">Hình thức công việc</p>
                            <p class=" font-bold text-base">{{$data->hinhthuc}}</p>
                        </h3>
                    </div>                   
        </div>
        <div style="border-bottom-width: 1px;border-color: #E489F6;" class="flex justify-between md:flex md:border-b mb-4">
                    <div style="height: 80px;" class="flex items-center mb-4 md:w-[33%]">
                        <i style="font-size: 30px;" class="fa-regular fa-calendar-days"></i>
                        <h3 class=" px-3 ml-3">
                            <p style=" color: gray; width: max-content" class="mr-1 text-xl ">Độ tuổi</p>
                            <p class=" font-bold text-base">{{$data->age}}</p>
                        </h3>
                    </div>
                    <div style="height: 80px;" class="flex items-center mb-4 md:w-[33%]">
                        <i style="font-size: 30px; width: max-content" class="fa-regular fa-calendar-days"></i>
                        <h3 class=" px-3 ml-3">
                            <p style=" color: gray" class="mr-1 text-xl ">Yêu cầu bằng cấp</p>
                            <p class=" font-bold text-base">{{$data->bangcap}}</p>
                        </h3>
                    </div>
                    <div style="height: 80px;" class="flex items-center mb-4 md:w-[33%]">
                        <i style="font-size: 30px; width: max-content" class="fa-regular fa-calendar-days"></i>
                        <h3 class=" px-3 ml-3">
                            <p style=" color: gray" class="mr-1 text-xl ">Yêu cầu kinh nghiệm</p>
                            <p class=" font-bold text-base">{{$data->kinhnghiem}}</p>
                        </h3>
                    </div>
        </div>
        <div style="border-bottom-width: 1px;border-color: #E489F6;" class="flex justify-between md:flex md:border-b mb-4">
                    <div style="height: 80px;" class="flex items-center mb-4 md:w-[33%]">
                        <i style="font-size: 30px;" class="fa-regular fa-calendar-days"></i>
                        <h3 class=" px-3 ml-3">
                            <p style=" color: gray; width: max-content" class="mr-1 text-xl ">Ngành nghề</p>


                        </h3>
                    </div>
        </div>
       
        </div>
        <div>

            <div>
                <h2 style="font-size: 30px; padding-top: 20px;" class=" font-semibold">Mô tả công việc</h2>
                <div class=" mb-2 text-14 break-words text-se-neutral-80 text-description">
                    <ul >
                        <li style="white-space: pre-wrap;">{{$data->mota}}</li>
                    </ul>
                </div>
            </div>
            <div>
                <h2 style="font-size: 30px; padding-top: 20px;" class=" font-semibold">Yêu cầu công việc</h2>
                <div class=" mb-2 text-14 break-words text-se-neutral-80 text-description">
                    <ul >
                        <li style="white-space: pre-wrap;">{{$data->yeucau}}</li>
                    </ul>
                </div>
            </div>
            <div>
                <h2 style="font-size: 30px; padding-top: 20px;" class=" font-semibold">Quyền lợi</h2>
                <div class=" mb-2 text-14 break-words text-se-neutral-80 text-description">
                <ul >
                        <li style="white-space: pre-wrap;">{{$data->quyenloi_congviec}}</li>
                    </ul>
                </div>
            </div>
            <div>
                <h2 style="font-size: 30px; padding-top: 20px;" class=" font-semibold">Kỹ năng cần thiết</h2>
                <div class=" mb-2 text-14 break-words text-se-neutral-80 text-description">
                <ul >
                        <li style="white-space: pre-wrap;">{{$data->kynang}}</li>
                    </ul>
                </div>
            </div>
            <div>
                <h2 style="font-size: 30px; padding-top: 20px;" class=" font-semibold">Địa điểm làm việc</h2>
                <div class=" mb-2 text-14 break-words text-se-neutral-80 text-description">
                <ul >
                        <p style="white-space: pre-wrap; display: flex; align-items:end;"><img style="height: 20px; margin-right: 5px" src="images/icon/location.svg"/>{{$data->Location}}</p>
                    </ul>
                </div>
            </div>
            <div class="w-full lg:w-[25%] lg:ml-8 px-0 md:px-4 lg:px-0"></div>

    </div>

</div> 
<div style="margin-top:20px;box-shadow: 0px 0px 6px rgba(0,0,0,.12); " class=" px-12 md:px-10 py-4 bg-white shadow-sd-12 rounded-sm">
            <div id="section2">
                <a href="" class="md:flex justify-between items-start">
                    <div>
                    <h3 class=" text-2xl font-semibold pt-4 md:pr-4">
                        <i class="fa fa-thin fa-users"></i>
                        {{$congtys->tencongty}}
                        </h3>
                        <div>
                    </div>
                            <p class=" flex-wrap">                    
                                {{$congtys->thongtin}}
                            </p>
                        </div>
                    </a>
            </div>
            <style>
                html{
                    scroll-behavior: smooth;
                }
            </style>
        </div>
      
   
        
   
        </div>


        <div style="width:auto" class="w-full  lg:ml-8 px-0 md:px-4 lg:px-0">
            <div class="pl-4 md:px-0 top-4 pb-2">
            <?php
            use App\Models\nghes;
                    $nghes = nghes::select()
                        ->join('nganhnghes' ,'nghes.id_nganhnghe' , '=' , 'nganhnghes.id_nganhnghe')->where('nghes.id_nganhnghe' , '=' ,61)
                        ->join('congtys', 'nghes.id_congty', '=', 'congtys.id_congty')->limit(10)
                        ->get();
            ?>
            
                <h2 class="text-24 md:text-18 mt-4 md:mt-0 font-semibold">Việc làm tương tự</h2>
                    <div class="my-3 w-[80px] h-1 bg-primary"></div>

                <div>

            <div class=" w-full p-2 gap-1 h-max bg-white rounded border border-solid border-se-blue-10 mb-2">
            @foreach ($nghes as $nghes)

            <a class=" hover:shadow-2xl lg:rounded-none bg-se-mint-cream" style="padding:20px" href="{{url('detailpage',$nghes->id)}}">
                <div style=" margin-left: 20px; border: 1px solid #4DA5EC;border-radius:5px; height:70%;width:90%" class="relative w-full flex pr-4 pt-3.5 pl-2 pb-4 lg:pb-2 lg:pt-2 lg:pl-2 lg:pr-[34px]">
                    <div style="max-width: 20%;" class="relative mr-2 lg:mr-5">
                    <img style="padding:20px" src="{{asset('/public/uploads/congty/'.$nghes->logo_congty)}}">
                    </div>
                    <div style="max-width: 100%" class="lg:pt-4 leading-6 flex-1 overflow-hidden lg:max-w-none">
                        <div class="flex items-start flex-1 overflow-hidden pr-2">
                            <h3 class="text-16 lg:text-16 mb-0 line-clamp-2 lg:line-clamp-none lg:truncate lg:block text-se-neutral-100-n font-medium">
                            {{$nghes->tennghes}}
                            </h3>
                        </div>
                        <div style="flex-direction: column;" class="flex lg:flex-row text-12 leading-6">
                            <div class="flex">{{$nghes->tencongty}}</div>
                            <div >
                                <div>
                                    <i class="fa-solid fa-money-bill"></i>
                                    <span>{{$nghes->Luong}}</span>
                                </div>
                                <div>
                                <i class="fa-solid fa-location-dot"></i>
                                    <span>{{$nghes->Location}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <i style="color:#4DA5EC" class="fa-regular fa-heart cursor-pointer ml-2 text-lg text-se-accent-100 mt-0.5"></i>
                </div>

            </a>
            @endforeach

                    </div>

                </div>
            </div>
        </div>
        

       

        
    </div>
    

    <div class="wp-container !max-w-[1320px] px-4 text-center bg-white">
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
</div></div>

@include('layouts.footer')