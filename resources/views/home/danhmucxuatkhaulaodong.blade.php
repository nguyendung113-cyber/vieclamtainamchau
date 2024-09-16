<script src="https://cdn.tailwindcss.com"></script>

@include('layouts.navigation')
@include('layouts.menu')
<div class="flex justify-center">


<div style="background-color: rgba(250, 250, 255, var(--tw-bg-opacity));" class="bg-se-titan-white">
<div style="display: flex;max-width: 1280px;width:100%; justify-content:center" class="wp-container mt-[160px] px-2 pt-4 md:pt-1 pb-[30px] lg:px-0 flex flex-col md:mt-[160px] animated fadeIn lg:mt-0">
    <div  class="  bg-blue-600wp-container hidden sm:block pt-4">
        <form  autocomplete="off" style=" max-width:100%; padding-top:20px; padding-left:30px; padding-right: 30px;">
        <div >

        <div style="   background-color: rgb(30,58,138); padding-left:48px; padding-right:48px; padding-top: 48px; padding-top: 48px"  class=" text-white px-12 py-8 rounded-lg">
                <div>

                <div class="flex items-center pb-2">
                <div class="text-[20px] leading-6">Du học tại </div>
                </div>
                <div style="font-size:32px" class=" leading-10 font-semibold">
                    <p>{{$quocgias->tenquocgia}}</p>

                </div>

                </div>
              
                <div class="w-full flex items-center text-sm ">
                    <div style="width:50%; height: 48px;" class="bg-white rounded-sm mr-2  text-grey-50 ">
                        <div class="w-full h-full flex items-center justify-center pl-4">
                            <i style="margin-right: 10px;margin-left: 20px; color: black;" class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" name="q" class="w-full tracking-tight focus:outline-none focus:text-black" placeholder="Tìm kiếm cơ hội Du học">
                        </div>
                    </div>
                 <div class="w-full flex items-center text-sm ">
                    <div style="width:40%; height: 48px;" class="bg-white rounded-sm mr-2  text-grey-50 ">
                        <div class="w-full h-full flex items-center justify-center pl-4">
                        <h1 style=" color: black; border-radius:5rem;background-color:rgba(51, 51, 51,0.4); width:70%; overflow:hidden; margin-right:10px">Tên ngành</h1>
                        <i style="color: black;" class="fa-solid fa-caret-down"></i>                    

                        </div>
                    </div>
                    <div style="width:40%; height: 48px;" class="bg-white rounded-sm mr-2  text-grey-50 ">
                        <div class="w-full h-full flex items-center justify-center pl-4">
                        <h1 style=" color: black; width:70%; overflow:hidden; margin-right:10px">Lọc theo tỉnh thành</h1>
                        <i style="color: black;" class="fa-solid fa-caret-down"></i>                    
                        </div>
                    </div>
                    <div style="background-color: rgba(44, 149, 255); height: 48px;">
                        <button style="margin-left: 10px;    width: max-content;   margin-right: 10px;" type="submit" class="w-full h-full flex items-center  text-white justify-center font-semibold">Tìm kiếm</button>
                   </div>
                   <div style="background-color: rgba(44, 149, 255);margin-left: 10px; height: 48px;">
                        <button style="margin-left: 10px;    width: max-content;   margin-right: 10px;" type="submit" class="w-full h-full flex items-center  text-white justify-center font-semibold">Lọc nâng cao</button>
                   </div>
            </div>
            </div>
</div>
        </div>
        </form>
        
    </div> 
    
            
    
</div>
<div style="width: 100%; display:flex; justify-content:center" class="wp-container mt-[160px] px-2 pt-4 md:pt-1 pb-[30px] lg:px-0 flex flex-col md:mt-[160px] animated fadeIn lg:mt-0">
<div  style="  margin-left: 35px; margin-right: 35px; margin-top:-50px;border-radius:5px;display: flex;justify-content: center">
<div style=" max-width: 1200px;  background-color:#fff;   box-shadow: 0 0 12px rgba(0,0,0,.12); margin-top: 10px;border-radius:10px; display: flex; padding-left:48px; padding-right:48px" class=" flex items-center px-3 pt-3 pb-4">
        <div class="min-w-max text-se-neutral-48-n text-13">Lọc nâng cao</div>
        <div style="  margin-left:10px; margin-right:10px; grid-template-columns: repeat(6, minmax(0, 1fr)); margin-right:10px" class="grid gap-1 items-center mx-2.5">
            <div class=" select-search-custom w-full rounder-sm border border-se-blue-10 text-sm focus:outline-none text-grey-50">
            <div class="  flex items-center select-search-custom__value">
                <input value="Tất cả kinh nghiệm" style="display: block;height: 36px;width: 100%;padding: 0 40px 0 16px;color: #000;background: #fff;border: 1px solid transparent;border-radius: 2px;outline: none;font-size: 14px;text-align: left;text-overflow: ellipsis;line-height: 36px;  letter-spacing: -.5px;" autocomplete="on" class="select-search-custom__input !text-grey-50">
                <i style="color: black; padding-right:10px" class="fa-solid fa-caret-down"></i> 
            </div>
            
        </div>
        <div class="select-search-custom w-full rounder-sm border border-se-blue-10 text-sm focus:outline-none text-grey-50">
            <div class=" flex items-center select-search-custom__value">
                <input value="Tất cả mức lương" style="    display: block;height: 36px;width: 100%;padding: 0 40px 0 16px;color: #000;background: #fff;border: 1px solid transparent;border-radius: 2px;outline: none;font-size: 14px;text-align: left;text-overflow: ellipsis;line-height: 36px;  letter-spacing: -.5px;" autocomplete="on" class="select-search-custom__input !text-grey-50">
                <i style="color: black; padding-right:10px" class="fa-solid fa-caret-down"></i> 
            </div>
            
        </div>
        <div class="select-search-custom w-full rounder-sm border border-se-blue-10 text-sm focus:outline-none text-grey-50">
            <div class=" flex items-center select-search-custom__value">
                <input value="Tất cả cấp bậc" style="    display: block;height: 36px;width: 100%;padding: 0 40px 0 16px;color: #000;background: #fff;border: 1px solid transparent;border-radius: 2px;outline: none;font-size: 14px;text-align: left;text-overflow: ellipsis;line-height: 36pX;  letter-spacing: -.5px;" autocomplete="on" class="select-search-custom__input !text-grey-50">
                <i style="color: black; padding-right:10px" class="fa-solid fa-caret-down"></i> 
            </div>
            
        </div>
        <div class="select-search-custom w-full rounder-sm border border-se-blue-10 text-sm focus:outline-none text-grey-50">
            <div class=" flex items-center select-search-custom__value">
                <input value="Tất cả trình độ" style="    display: block;height: 36px;width: 100%;padding: 0 40px 0 16px;color: #000;background: #fff;border: 1px solid transparent;border-radius: 2px;outline: none;font-size: 14px;text-align: left;text-overflow: ellipsis;line-height: 36px;  letter-spacing: -.5px;" autocomplete="on" class="select-search-custom__input !text-grey-50">
                <i style="color: black; padding-right:10px" class="fa-solid fa-caret-down"></i> 
            </div>
        </div>
        <div class="select-search-custom w-full rounder-sm border border-se-blue-10 text-sm focus:outline-none text-grey-50">
            <div class="flex items-center select-search-custom__value">
                <input value="Loại công việc" style="    display: block;height: 36px;width: 100%;padding: 0 40px 0 16px;color: #000;background: #fff;border: 1px solid transparent;border-radius: 2px;outline: none;font-size: 14px;text-align: left;text-overflow: ellipsis;line-height: 36px;  letter-spacing: -.5px;" autocomplete="on" class="select-search-custom__input !text-grey-50">
                <i style="color: black; padding-right:10px" class="fa-solid fa-caret-down"></i> 
            </div>
            
        </div>
        <div class="select-search-custom w-full rounder-sm border border-se-blue-10 text-sm focus:outline-none text-grey-50">
            <div class="flex items-center  select-search-custom__value">
                <input value="Tất cả giới tính" style="    display: block;height: 36px;width: 100%;padding: 0 40px 0 16px;color: #000;background: #fff;border: 1px solid transparent;border-radius: 2px;outline: none;font-size: 14px;text-align: left;text-overflow: ellipsis;line-height: 36px;  letter-spacing: -.5px;" autocomplete="on" class="select-search-custom__input !text-grey-50">
                <i style="color: black; padding-right:10px" class="fa-solid fa-caret-down"></i>                    
            </div>
            
        </div>
        
    </div>

    <div class="min-w-max flex">
        <div style="align-items: baseline;" class=" flex w-max cursor-pointer">
            <div class="flex text-purple-500 rounded-sm font-semibold text-11 text-primary text-sm">Xóa chọn</div>
            <div class="border border-se-blue-10 w-4 rotate-90"></div>
            <div class="text-11 font-semibold text-se-neutral-48-n cursor-pointer">Đóng</div>
            
        </div>
    </div>
</div>
</div>
</div>

<div style="display: flex;max-width: 1280px;width:100%; justify-content:center" class="wp-container mt-[160px] px-2 pt-4 md:pt-1 pb-[30px] lg:px-0 flex flex-col md:mt-[160px] animated fadeIn lg:mt-0">
<div style="margin-top: 30px;display: flex; padding-left:48px; padding-right:48px; max-width:100%; justify-content:flex-start" class="pb-4 flex justify-between align-center flex-col xl:flex-row">
    <div style="align-items: baseline;flex-direction: row;" class="pb-4 flex justify-between align-center xl:flex-row">
        <div class=" mb-2 md:mb-0 text-14 text-se-neutral-84 font-medium min-w-max md:mr-2">Sắp xếp theo</div>
        <div style="padding-left:10px; padding-right: 10px" class="flex w-full overflow-auto">
            <h2 style="padding-left:10px; margin-right: 10px" class=" flex items-baseline" >
                <button style="margin-right: 30px; height:30px; align-items: center; " class="flex  border py-3 h-11 mr-3 rounded  text-xs font-medium  min-w-[130px] !px-3 bg-gray-200  whitespace-nowrap border-solid border-[#2C95FF] transition-all">
                    Đề xuất
                </button>
                <button style="margin-right: 30px; height:30px; align-items: center " class=" flex  border py-3 h-11 mr-3 rounded  text-xs font-medium  min-w-[130px] !px-3 bg-gray-200  whitespace-nowrap border-solid border-[#2C95FF] transition-all">
                    Du học phù hợp
                </button>
                <button style="margin-right: 30px; height:30px; align-items: center " class="flex  border py-3 h-11 mr-3 rounded  text-xs font-medium  min-w-[130px] !px-3 bg-gray-200 whitespace-nowrap border-solid border-[#2C95FF] transition-all">
                    Du học mới nhất
                </button>
                <button style="margin-right: 30px; height:30px; align-items: center " class="flex  border py-3 h-11 mr-3 rounded  text-xs font-medium  min-w-[130px] !px-3 bg-gray-200 whitespace-nowrap border-solid border-[#2C95FF] transition-all">
                    Du học lương cao
                </button>
            </h2>
        </div>
    </div>
</div>
</div>

<div class="relative w-full block">
    <div style="grid-template-columns: repeat(1, minmax(0, 1fr));     max-width: 100%; justify-items: center;" class="grid  gap-y-2 lg:gap-y-2.5">
        <div style=" max-width: 1280px;" class="relative w-full  ">
        @foreach ($nghes as $nghes)

            <a class=" hover:shadow-2xl lg:rounded-none bg-se-mint-cream not-italic" style="padding:20px" href="{{url('detailpage',$nghes->id)}}">

                <div style=" margin-left: 50px; border: 1px solid #4DA5EC;border-radius:5px; width:70%;height:120px" class="relative w-full flex pr-4 pt-3.5 pl-2 pb-4 lg:pb-2 lg:pt-2 lg:pl-2 lg:pr-[34px]">
                    
                    <div style="width: 20%;" class="relative mr-2 lg:mr-5">
                        <img style="padding:20px" src="{{asset('/public/uploads/congty/'.$nghes->logo_congty)}}">
                    </div>
                    <div style="max-width: 100%" class="lg:pt-4 leading-6 flex-1 overflow-hidden lg:max-w-none">
                        <div class="flex items-start flex-1 overflow-hidden pr-2">
                            <h3 class="text-16 lg:text-16 mb-0 line-clamp-2 lg:line-clamp-none lg:truncate lg:block text-se-neutral-100-n font-medium">
                                {{$nghes->tennghe}}
                            </h3>
                        </div>
                        <div style="flex-direction: column;" class="flex lg:flex-row text-12 leading-6">
                            <div class="flex">{{$nghes->tencongty}}</div>
                            <div class="flex lg:mr-3 items-center">
                                <div>
                                    <i class="fa-solid fa-money-bill"></i>
                                    <span style="margin-right: 30px;">{{$nghes->Luong}}</span>
                                </div>
                                <div class="flex items-end 
">      
                                    <i class="fa fa-thin fa-location-dot">                 
                                    <span  style="margin-right: 30px;">{{$nghes->Location}}</span>
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
            @endforeach

        </div>    

    </div>
</div>

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