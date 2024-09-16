

@include('layouts.css')


@include('layouts.navigation')

@include('layouts.menu')
    <div class="flex justify-center flex-col">
    <div style="background-color: rgba(250, 250, 255, var(--tw-bg-opacity));" class="bg-se-titan-white">
<div style="display: flex;justify-content:center" class="wp-container mt-[160px] px-2 pt-4 md:pt-1 pb-[30px] lg:px-0 flex flex-col md:mt-[160px] animated fadeIn lg:mt-0">
    <div  class=" hidden sm:block pt-4">
        <form  autocomplete="off" style=" max-width:100% ;padding-top:20px; padding-left:30px; padding-right: 30px;">
        <div >
        <div style="   background-color: rgb(30,58,138); padding-left:48px; padding-right:48px; padding-top: 48px; padding-top: 48px"  class=" text-white px-12 py-8 rounded-lg">
                <div>
                <div style="font-size:32px" class=" leading-10 font-semibold">
                    <p>Tin tức</p>
                </div>
              
                <div class="w-full flex items-center text-sm ">
                    <div style="width:50%; height: 48px;" class="bg-white rounded-sm mr-2  text-grey-50 ">
                        <div class="w-full h-full flex items-center justify-center pl-4">
                            <i style="margin-right: 10px;margin-left: 20px; color: black;" class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" name="q" class="w-full tracking-tight focus:outline-none focus:text-black" placeholder="Tìm kiếm các dịch vụ">
                        </div>
                    </div>
                 <div class="w-full flex items-center text-sm ">
                    <div style="width:40%; height: 48px;" class="bg-white rounded-sm mr-2  text-grey-50 ">
                        <div class="w-full h-full flex items-center justify-center pl-4">
                        <h1 style=" color: black; border-radius:5rem; width:70%; overflow:hidden; margin-right:10px">Lọc theo châu lục</h1>
                        <i style="color: black;" class="fa-solid fa-caret-down"></i>                    

                        </div>
                    </div>
                    <div style="width:40%; height: 48px;" class="bg-white rounded-sm mr-2  text-grey-50 ">
                        <div class="w-full h-full flex items-center justify-center pl-4">
                        <h1 style=" color: black; width:70%; overflow:hidden; margin-right:10px">Lọc theo đất nước</h1>
                        <i style="color: black;" class="fa-solid fa-caret-down"></i>                    
                        </div>
                    </div>
                    <div style="background-color: rgba(44, 149, 255); height: 48px;">
                        <button style="margin-left: 10px;    width: max-content;   margin-right: 10px;" type="submit" class="w-full h-full flex items-center  text-white justify-center font-semibold">Tìm kiếm</button>
                   </div>
                  
            </div>
            </div>
</div>
        </div>
        </form>
        
    </div> 
    
            
    
</div>
<div style="width: 100%; display:flex; justify-content:center" class=" mx-2 wp-container mt-[160px]  pt-4 md:pt-1 pb-[30px] lg:px-0 flex flex-col md:mt-[160px] animated fadeIn lg:mt-0">
<div  style="  margin-left: 35px; margin-right: 35px; margin-top:-50px;border-radius:5px;">
<div style=" max-width: 1200px;  background-color:#fff;   box-shadow: 0 0 12px rgba(0,0,0,.12); margin-top: 40px;border-radius:10px; display: flex;" class=" flex items-center px-3 pt-3 pb-4">
        <div class="min-w-max text-se-neutral-48-n text-13">Tìm kiếm gần đây</div>
        <div style="  margin-left:10px; margin-right:10px; margin-right:10px" class="flex gap-1 items-center mx-2.5">
            <div class=" select-search-custom w-full rounder-sm border border-se-blue-10 text-sm focus:outline-none text-grey-50">
            <div class="  flex items-center select-search-custom__value">
                <div style="width:max-content;display: block;height: 36px;color: #000;background: #fff;border: 1px solid transparent;border-radius: 2px;outline: none;font-size: 14px;text-align: left;text-overflow: ellipsis;line-height: 36px;  letter-spacing: -.5px;" autocomplete="on" class=" px-5 select-search-custom__input !text-grey-50">Tin tức - sự kiện</div>
            </div>
            
        </div>
        <div class="select-search-custom w-full rounder-sm border border-se-blue-10 text-sm focus:outline-none text-grey-50">
            <div class=" flex items-center select-search-custom__value">
            <div style="width:max-content;display: block;height: 36px;color: #000;background: #fff;border: 1px solid transparent;border-radius: 2px;outline: none;font-size: 14px;text-align: left;text-overflow: ellipsis;line-height: 36px;  letter-spacing: -.5px;" autocomplete="on" class="px-5 select-search-custom__input !text-grey-50">Tin tức - Du học nghề</div>
            </div>
            
        </div>
        <div class="select-search-custom w-full rounder-sm border border-se-blue-10 text-sm focus:outline-none text-grey-50">
            <div class=" flex items-center select-search-custom__value">
            <div style="width:max-content;display: block;height: 36px;color: #000;background: #fff;border: 1px solid transparent;border-radius: 2px;outline: none;font-size: 14px;text-align: left;text-overflow: ellipsis;line-height: 36px;  letter-spacing: -.5px;" autocomplete="on" class="px-5 select-search-custom__input !text-grey-50">Tin tức - Xuất khẩu lao động</div>
            </div>
        </div>
        <div class="select-search-custom w-full rounder-sm border border-se-blue-10 text-sm focus:outline-none text-grey-50">
            <div class=" flex items-center select-search-custom__value">
            <div style="width:max-content;display: block;height: 36px;color: #000;background: #fff;border: 1px solid transparent;border-radius: 2px;outline: none;font-size: 14px;text-align: left;text-overflow: ellipsis;line-height: 36px;  letter-spacing: -.5px;" autocomplete="on" class="px-5 select-search-custom__input !text-grey-50">Tin tức Đầu tư - Định cư</div>
            </div>
        </div>
        
    </div>
    </div>
</div>
</div>
    </div>
</div>



<div class="relative w-full block">
    <div style="grid-template-columns: repeat(1, minmax(0, 1fr));     max-width: 100%; justify-items: center;" class="grid ">
        <div style=" max-width: 1280px;" class="relative w-full mb-5 ">

            <a class=" hover:shadow-2xl lg:rounded-none bg-se-mint-cream" href="{{route('chitiettintuc')}}">
                <div style=" margin-left: 50px; border: 1px solid #4DA5EC;border-radius:5px; width:70%;height:120px" class="relative w-full flex pr-4 pt-3.5 pl-2 pb-4 lg:pb-2 lg:pt-2 lg:pl-2 lg:pr-[34px]">
                    <div style="max-width: 20%;" class="relative mr-2 lg:mr-5">
                    <img style="height: -webkit-fill-available;" src="/public/images/tintuc/tintuc_1.png">
                    </div>
                    <div style="max-width: 100%" class="lg:pt-4 leading-6 flex-1 overflow-hidden lg:max-w-none">
                        <div class="flex items-start flex-1 overflow-hidden pr-2">
                            <h3 class="text-16 lg:text-16 mb-0 line-clamp-2 lg:line-clamp-none lg:truncate lg:block text-se-neutral-100-n font-medium">
                                Ngày ANZAC tại Úc và các hoạt động trong dịp này
                            </h3>
                        </div>
                            <p >
                                Anzac Day là từ viết tắt của Austalia and New Zealand Army Corps. Đây là ngày lễ vô cùng đặc biệt với người dân Úc và New Zealand.
                            </p>
                        
                    </div>
                </div>
            </a>
        </div>  
   
    </div>
    <div style="grid-template-columns: repeat(1, minmax(0, 1fr));     max-width: 100%; justify-items: center;" class="grid  gap-y-2 lg:gap-y-2.5">
        <div style=" max-width: 1280px;" class="relative w-full mb-5 ">

            <a class=" hover:shadow-2xl lg:rounded-none bg-se-mint-cream" href="{{route('chitiettintuc')}}">
                <div style=" margin-left: 50px; border: 1px solid #4DA5EC;border-radius:5px; width:70%;height:120px" class="relative w-full flex pr-4 pt-3.5 pl-2 pb-4 lg:pb-2 lg:pt-2 lg:pl-2 lg:pr-[34px]">
                    <div style="max-width: 20%;" class="relative mr-2 lg:mr-5">
                    <img style="height: -webkit-fill-available;" src="/public/images/tintuc/tintuc_2.png">
                    </div>
                    <div style="max-width: 100%" class="lg:pt-4 leading-6 flex-1 overflow-hidden lg:max-w-none">
                        <div class="flex items-start flex-1 overflow-hidden pr-2">
                            <h3 class="text-16 lg:text-16 mb-0 line-clamp-2 lg:line-clamp-none lg:truncate lg:block text-se-neutral-100-n font-medium">
                                Nhiều khoản tiền trợ cấp an sinh xã hội tăng nhẹ ở Úc
                            </h3>
                        </div>
                            <p >
                                Nhằm giảm bớt tình trạng lạm phát và áp lực chi phí sinh hoạt tại Úc, chính phủ đã tăng mức trợ cấp xã hội cho các đối tượng từ ngày 20 tháng 3 năm nay.
                            </p>
                        
                    </div>
                </div>
            </a>
        </div>  
   
    </div>
    <div style="grid-template-columns: repeat(1, minmax(0, 1fr));     max-width: 100%; justify-items: center;" class="grid ">
        <div style=" max-width: 1280px;" class="relative w-full mb-5 ">

            <a class=" hover:shadow-2xl lg:rounded-none bg-se-mint-cream" href="{{route('chitiettintuc')}}">
                <div style=" margin-left: 50px; border: 1px solid #4DA5EC;border-radius:5px; width:70%;height:120px" class="relative w-full flex pr-4 pt-3.5 pl-2 pb-4 lg:pb-2 lg:pt-2 lg:pl-2 lg:pr-[34px]">
                    <div style="max-width: 20%;" class="relative mr-2 lg:mr-5">
                    <img style="height: -webkit-fill-available;" src="/public/images/images/tintuc/tintuc_1.png">
                    </div>
                    <div style="max-width: 100%" class="lg:pt-4 leading-6 flex-1 overflow-hidden lg:max-w-none">
                        <div class="flex items-start flex-1 overflow-hidden pr-2">
                            <h3 class="text-16 lg:text-16 mb-0 line-clamp-2 lg:line-clamp-none lg:truncate lg:block text-se-neutral-100-n font-medium">
                                Ngày ANZAC tại Úc và các hoạt động trong dịp này
                            </h3>
                        </div>
                            <p >
                                Anzac Day là từ viết tắt của Austalia and New Zealand Army Corps. Đây là ngày lễ vô cùng đặc biệt với người dân Úc và New Zealand.
                            </p>
                        
                    </div>
                </div>
            </a>
        </div>  
   
    </div>
    <div style="grid-template-columns: repeat(1, minmax(0, 1fr));     max-width: 100%; justify-items: center;" class="grid  gap-y-2 lg:gap-y-2.5">
        <div style=" max-width: 1280px;" class="relative w-full mb-5 ">

            <a class=" hover:shadow-2xl lg:rounded-none bg-se-mint-cream" href="{{route('chitiettintuc')}}">
                <div style=" margin-left: 50px; border: 1px solid #4DA5EC;border-radius:5px; width:70%;height:120px" class="relative w-full flex pr-4 pt-3.5 pl-2 pb-4 lg:pb-2 lg:pt-2 lg:pl-2 lg:pr-[34px]">
                    <div style="max-width: 20%;" class="relative mr-2 lg:mr-5">
                    <img style="height: -webkit-fill-available;" src="/public/images/images/tintuc/tintuc_2.png">
                    </div>
                    <div style="max-width: 100%" class="lg:pt-4 leading-6 flex-1 overflow-hidden lg:max-w-none">
                        <div class="flex items-start flex-1 overflow-hidden pr-2">
                            <h3 class="text-16 lg:text-16 mb-0 line-clamp-2 lg:line-clamp-none lg:truncate lg:block text-se-neutral-100-n font-medium">
                                Nhiều khoản tiền trợ cấp an sinh xã hội tăng nhẹ ở Úc
                            </h3>
                        </div>
                            <p >
                                Nhằm giảm bớt tình trạng lạm phát và áp lực chi phí sinh hoạt tại Úc, chính phủ đã tăng mức trợ cấp xã hội cho các đối tượng từ ngày 20 tháng 3 năm nay.
                            </p>
                        
                    </div>
                </div>
            </a>
        </div>  
   
    </div>
    <div style="grid-template-columns: repeat(1, minmax(0, 1fr));     max-width: 100%; justify-items: center;" class="grid ">
        <div style=" max-width: 1280px;" class="relative w-full mb-5 ">

            <a class=" hover:shadow-2xl lg:rounded-none bg-se-mint-cream" href="{{route('chitiettintuc')}}">
                <div style=" margin-left: 50px; border: 1px solid #4DA5EC;border-radius:5px; width:70%;height:120px" class="relative w-full flex pr-4 pt-3.5 pl-2 pb-4 lg:pb-2 lg:pt-2 lg:pl-2 lg:pr-[34px]">
                    <div style="max-width: 20%;" class="relative mr-2 lg:mr-5">
                    <img style="height: -webkit-fill-available;" src="/public/images/images/tintuc/tintuc_1.png">
                    </div>
                    <div style="max-width: 100%" class="lg:pt-4 leading-6 flex-1 overflow-hidden lg:max-w-none">
                        <div class="flex items-start flex-1 overflow-hidden pr-2">
                            <h3 class="text-16 lg:text-16 mb-0 line-clamp-2 lg:line-clamp-none lg:truncate lg:block text-se-neutral-100-n font-medium">
                                Ngày ANZAC tại Úc và các hoạt động trong dịp này
                            </h3>
                        </div>
                            <p >
                                Anzac Day là từ viết tắt của Austalia and New Zealand Army Corps. Đây là ngày lễ vô cùng đặc biệt với người dân Úc và New Zealand.
                            </p>
                        
                    </div>
                </div>
            </a>
        </div>  
   
    </div>
    <div style="grid-template-columns: repeat(1, minmax(0, 1fr));     max-width: 100%; justify-items: center;" class="grid  gap-y-2 lg:gap-y-2.5">
        <div style=" max-width: 1280px;" class="relative w-full mb-5 ">

            <a class=" hover:shadow-2xl lg:rounded-none bg-se-mint-cream" href="{{route('chitiettintuc')}}">
                <div style=" margin-left: 50px; border: 1px solid #4DA5EC;border-radius:5px; width:70%;height:120px" class="relative w-full flex pr-4 pt-3.5 pl-2 pb-4 lg:pb-2 lg:pt-2 lg:pl-2 lg:pr-[34px]">
                    <div style="max-width: 20%;" class="relative mr-2 lg:mr-5">
                    <img style="height: -webkit-fill-available;" src="/public/images/images/tintuc/tintuc_2.png">
                    </div>
                    <div style="max-width: 100%" class="lg:pt-4 leading-6 flex-1 overflow-hidden lg:max-w-none">
                        <div class="flex items-start flex-1 overflow-hidden pr-2">
                            <h3 class="text-16 lg:text-16 mb-0 line-clamp-2 lg:line-clamp-none lg:truncate lg:block text-se-neutral-100-n font-medium">
                                Nhiều khoản tiền trợ cấp an sinh xã hội tăng nhẹ ở Úc
                            </h3>
                        </div>
                            <p >
                                Nhằm giảm bớt tình trạng lạm phát và áp lực chi phí sinh hoạt tại Úc, chính phủ đã tăng mức trợ cấp xã hội cho các đối tượng từ ngày 20 tháng 3 năm nay.
                            </p>
                        
                    </div>
                </div>
            </a>
        </div>  
   
    </div>
</div>


 
</div>

@include('layouts.footer')



