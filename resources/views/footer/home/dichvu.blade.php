
@include('layouts.css')


@include('layouts.navigation')

@include('layouts.menu')
<div class="flex justify-center">
<div style="background-color: rgba(250, 250, 255, var(--tw-bg-opacity));" class="bg-se-titan-white">
<div style="display: flex;max-width: 1280px;width:100%; justify-content:center" class="wp-container mt-[160px] px-2 pt-4 md:pt-1 pb-[30px] lg:px-0 flex flex-col md:mt-[160px] animated fadeIn lg:mt-0">
    <div  class="  bg-blue-600wp-container hidden sm:block pt-4">
        <form  autocomplete="off" style=" max-width:100% ;padding-top:20px; padding-left:30px; padding-right: 30px;">
        <div >
        <div style="   background-color: rgb(30,58,138); padding-left:48px; padding-right:48px; padding-top: 48px; padding-top: 48px"  class=" text-white px-12 py-8 rounded-lg">
                <div>
                <div style="font-size:32px" class=" leading-10 font-semibold">
                    <p>Dịch vụ</p>
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
<div  style="   margin-top:-50px;border-radius:5px; text-align:center" class="px-8">
<div style=" max-width: 1200px;  background-color:#fff;   box-shadow: 0 0 12px rgba(0,0,0,.12); margin-top: 40px;border-radius:10px; display: flex; padding-left:48px; padding-right:48px;" class=" flex items-center px-3 pt-3 pb-4">
        <div class="min-w-max text-se-neutral-48-n text-13">Tìm kiếm gần đây</div>
        <div style="  margin-left:10px; margin-right:10px; margin-right:10px" class="flex gap-1 items-center mx-2.5 ">
            <div class=" select-search-custom w-full rounder-sm border border-se-blue-10 text-sm focus:outline-none text-grey-50">
            <div class="  flex items-center select-search-custom__value">
                <div style="width:max-content;display: block;height: 36px;color: #000;background: #fff;border: 1px solid transparent;border-radius: 2px;outline: none;font-size: 14px;text-align: left;text-overflow: ellipsis;line-height: 36px;  letter-spacing: -.5px;" autocomplete="on" class="select-search-custom__input !text-grey-50">Visa Hộ Chiếu/Thẻ Apec</div>
            </div>
            
        </div>
        <div class="select-search-custom w-full rounder-sm border border-se-blue-10 text-sm focus:outline-none text-grey-50">
            <div class=" flex items-center select-search-custom__value">
            <div style="width:max-content;display: block;height: 36px;color: #000;background: #fff;border: 1px solid transparent;border-radius: 2px;outline: none;font-size: 14px;text-align: left;text-overflow: ellipsis;line-height: 36px;  letter-spacing: -.5px;" autocomplete="on" class="select-search-custom__input !text-grey-50">Đào tạo ngoại ngữ/Du học/ Xuất khẩu Lao Động</div>
            </div>
            
        </div>
        <div class="select-search-custom w-full rounder-sm border border-se-blue-10 text-sm focus:outline-none text-grey-50">
            <div class=" flex items-center select-search-custom__value">
            <div style="width:max-content;display: block;height: 36px;color: #000;background: #fff;border: 1px solid transparent;border-radius: 2px;outline: none;font-size: 14px;text-align: left;text-overflow: ellipsis;line-height: 36px;  letter-spacing: -.5px;" autocomplete="on" class="select-search-custom__input !text-grey-50">Logitics/Vận chuyển/Quốc tế</div>
            </div>
        </div>
        <div class="select-search-custom w-full rounder-sm border border-se-blue-10 text-sm focus:outline-none text-grey-50">
            <div class=" flex items-center select-search-custom__value">
            <div style="width:max-content;display: block;height: 36px;color: #000;background: #fff;border: 1px solid transparent;border-radius: 2px;outline: none;font-size: 14px;text-align: left;text-overflow: ellipsis;line-height: 36px;  letter-spacing: -.5px;" autocomplete="on" class="select-search-custom__input !text-grey-50">Luật lao động cho người Việt tại ngước ngoài</div>
            </div>
        </div>
        
    </div>
    </div>
</div>
</div>
</div>



<div class="relative w-full block">
    <div style="grid-template-columns: repeat(1, minmax(0, 1fr));     max-width: 100%; justify-items: center;" class="grid  gap-y-2 lg:gap-y-2.5">
        <div style=" max-width: 1280px;" class="relative w-full  ">

            <a class=" hover:shadow-2xl lg:rounded-none bg-se-mint-cream" href="{{route('chitietdichvu')}}">
                <div style=" margin-left: 50px; border: 1px solid #4DA5EC;border-radius:5px; width:70%;height:120px" class="relative w-full flex pr-4 pt-3.5 pl-2 pb-4 lg:pb-2 lg:pt-2 lg:pl-2 lg:pr-[34px]">
                    <div style="max-width: 20%;" class="relative mr-2 lg:mr-5">
                    <img style="height: -webkit-fill-available;" src="/publlic/images/support_images/servies_1.png">
                    </div>
                    <div style="max-width: 100%" class="lg:pt-4 leading-6 flex-1 overflow-hidden lg:max-w-none">
                        <div class="flex items-start flex-1 overflow-hidden pr-2">
                            <h3 class="text-16 lg:text-16 mb-0 line-clamp-2 lg:line-clamp-none lg:truncate lg:block text-se-neutral-100-n font-medium">
                                Dịch vụ cộng đồng
                            </h3>
                        </div>
                        <div style="flex-direction: column;" class="flex lg:flex-row text-12 leading-6">
                            <div class="flex lg:mr-3 items-center">
                                <div>
                                    <i class="fa-solid fa-money-bill"></i>
                                </div>
                                <div class="flex items-end">                       
                                </div>
                                <div>    
                                    <i class="fa-solid fa-calendar-days"></i>                                
                                    <span>30/04/2024</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <i style="color:#4DA5EC" class="fa-regular fa-heart cursor-pointer ml-2 text-lg text-se-accent-100 mt-0.5"></i>
                </div>
            </a>
        </div>  
        <div style=" max-width: 1280px;" class="relative w-full  ">

            <a class=" hover:shadow-2xl lg:rounded-none bg-se-mint-cream" href="{{route('chitietdichvu')}}">
                <div style=" margin-left: 50px; border: 1px solid #4DA5EC;border-radius:5px; width:70%;height:120px" class="relative w-full flex pr-4 pt-3.5 pl-2 pb-4 lg:pb-2 lg:pt-2 lg:pl-2 lg:pr-[34px]">
                    <div style="max-width: 20%;" class="relative mr-2 lg:mr-5">
                    <img style="height: -webkit-fill-available;" src="/publlic/images/support_images/services_2.png">
                    </div>
                    <div style="max-width: 100%" class="lg:pt-4 leading-6 flex-1 overflow-hidden lg:max-w-none">
                        <div class="flex items-start flex-1 overflow-hidden pr-2">
                            <h3 class="text-16 lg:text-16 mb-0 line-clamp-2 lg:line-clamp-none lg:truncate lg:block text-se-neutral-100-n font-medium">
                                Dịch vụ hộ chiếu chuyển đổi visa tại Úc tận tâm, nhanh chóng
                            </h3>
                        </div>
                        <div style="flex-direction: column;" class="flex lg:flex-row text-12 leading-6">
                            <div class="flex lg:mr-3 items-center">
                                <div>
                                    <i class="fa-solid fa-money-bill"></i>
                                </div>
                                <div class="flex items-end">                       
                                </div>
                                <div>    
                                    <i class="fa-solid fa-calendar-days"></i>                                
                                    <span>30/04/2024</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <i style="color:#4DA5EC" class="fa-regular fa-heart cursor-pointer ml-2 text-lg text-se-accent-100 mt-0.5"></i>
                </div>
            </a>
        </div>    
    </div>
</div>

<div class="wp-container !max-w-[1320px] px-4 text-center">
    <div class="lg:px-0 w-full m-auto flex justify-between lg:gap-x-24 select-none py-6 lg:flex-row flex-col pb-8 lg:pb-6">
        <div class="lg:w-[49%] w-full">
            <div style="color: rgba(69, 29, 160); font-size: 30px" class="text-20 leading-8 font-bold text-se-mulled">
                Hotline cho người tìm việc
            </div>
            <div style="color: rgba(69, 29, 160); justify-content:space-around" class=" flex justify-between lg:flex lg:w-full m-auto mt-4 relative lg:justify-between px-6">
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
            <div class="relative h-auto lg:mt-4 lg:w-full lg:mx-0 m-auto">
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
            <div style="color: #4DA5EC; justify-content:space-around" class=" flex justify-between lg:flex lg:w-full m-auto mt-4 relative lg:justify-between px-6">
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
            <div class="relative h-auto lg:mt-4 lg:w-full lg:mx-0 m-auto">
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
