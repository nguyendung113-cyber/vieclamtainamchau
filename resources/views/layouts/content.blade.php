 
    <section>
        <div style="    --tw-bg-opacity: 1;background-color: rgba(250, 250, 255, var(--tw-bg-opacity));" class="px-3 flex justify-center lg:grid-cols-8 md:grid-cols-3 sm:grid-cols-1 lg:px-12 m-auto static">
            <div style="background-color: white;">
                <div class="search-box-version2" style="z-index:1">
                    <form class="w-full" autocomplete="off">
                        <div class="flex text-sm static  p-2 rounded-md shadow-md">
                            <div style="width: 37%;" class=" flex items-center  h-10 text-grey-50 static">
                                <div class="w-full h-full flex items-center justify-center static">
                                    <i class="fa-solid fa-bars"></i>
                                    <input type="text" name="q" style="border-color:white" class="w-full tracking-tight focus:outline-none focus:text-black pr-4" placeholder="Tất cả danh mục">
                                </div>
                            </div>
                         <div style="width: 30%;" class="flex items-center  h-10 text-grey-50 static">
                                <div class="w-full h-full flex items-center justify-center static">
                                    <p style="font-size: 25px;height: 23px;">|</p>
                                    <input type="text" name="q" style="border-color:white" class="w-full ml-2 tracking-tight focus:outline-none focus:text-black pr-4" placeholder="Từ khóa">
                                </div>
                            </div>
                            <div style="width: 30%;"  class=" flex items-centerh-10 text-grey-50 static">
                                <div class="w-full h-full flex items-center justify-center static">
                                    <p style="    font-size: 25px;height: 23px;">|</p>
                                    <input type="text" name="q"  style="border-color:white"class="w-full ml-2  tracking-tight focus:outline-none focus:text-black pr-4" placeholder="Nhập tỉnh, bang , quốc gia">
                                </div>
                            </div>
                            <div class="w-[180px] min-w-[180px] bg-blue-900 !h-10 cursor-pointer top-0 flex rounded-[6px] btn-box" style="widtH:150px; border-radius:5px">
                                <button type="submit" class="text-white font-medium flex items-center justify-center w-full" id="search-job">
                                    <i style="margin-right: 10px;" class="fa-solid fa-magnifying-glass"></i>
                                    Tìm việc
                                </button>
                            </div>
                        </div> 
                    </form>
                </div>
                <div class="mt-6">
                <div class="grid grid-cols-3 lg:grid-cols-8 gap-x-1 gap-y-2 lg:gap-3 mt-6">
                        <?php
                        use App\Models\nganhnghes;

                                $nganhnghes = nganhnghes::select()
                                ->where('thutu', '>=', 1)
                                ->where('thutu', '<=', 7)
                                ->get();
                
                        ?>
                        @foreach ($nganhnghes as $nganhnghes)
                        
                        <div class="w-full text-center flex">
                                <a href="" style="display: flex;flex-direction: column;justify-content: center;margin-left: 15px;align-items: center;" class="w-full outline-none block border transition-all duration-75 border-transparent hover:border-se-accent-100 rounded-lg p-2 lg:py-[12px] hover:shadow-lg">
                                    <img style="display: flex; flex-direction: column; justify-content:center; margin-left:15px; align-items:center; height:80px" src="{{asset('/public/uploads/nganhnghe/'.$nganhnghes->hinhanh)}}">
                                    <div class="flex items-center justify-center">
                                    <span style="color: rgb(44,149,255);" class="font-bold   text-12 lg:text-16">{{$nganhnghes->soluong}} &nbsp; </span>
                                        <span class=" text-gray-400 text-12 font-medium ml-1">việc</span>
                                    </div>

                                </a>
                        </div>
                    @endforeach

                        <div class="w-full text-center flex">
                            <?php

                                    $nganhnghes1 = nganhnghes::select()
                                    ->where('thutu', '', 0)
                                    ->get();
                    
                            ?>
                            @foreach ($nganhnghes1 as $nganhnghes1)
                                <a href="index.php?action=all-job" style="display: flex;flex-direction: column;justify-content: center; margin-left: 15px;align-items: center;" 
                                    class="w-full outline-none block border transition-all duration-75 border-transparent hover:border-se-accent-100 rounded-lg p-2 lg:py-[12px] hover:shadow-lg">
                                    <img style="display: flex; flex-direction: column; justify-content:center; margin-left:15px; align-items:center; height:80px" src="{{asset('/public/uploads/nganhnghe/'.$nganhnghes1->hinhanh)}}">
                                </a>
                                @endforeach
                        </div>
       
                        </div>
                </div>
                
            </div>
        </div>

    </section>
    <section class=" justify-center" style="width: 100%;--tw-bg-opacity: 1;background-color: rgba(250, 250, 255, var(--tw-bg-opacity));">
    <div  style="padding-left: 50px;padding-right: 50px; border:none;max-width:1280px" class="lg:w-full  md:w-3/4 sm:w-full border-none lg:bg-se-titan-white lg:border lg:border-solid lg:border-se-bright-gray pt-0 lg:pt-[18px] pb-8 lg:pb-10 lg:px-12 m-auto max-w-full lg:mb-12">

    <h1 class="font-bold text-4xl">Du học nghề</h1>    
    
        <div class="slick1">
              
        <?php
             use App\Models\nghes;
             use App\Models\congtys;
                    $nghes1 = nghes::select()
                        ->where('id_loainghe', '=', 1)
                        ->where('post_status','=', 'active')
                        ->join('congtys', 'nghes.id_congty', '=', 'congtys.id_congty')
                        ->get();
            ?>
            
        
                @foreach ($nghes1 as  $nghes1)
                
                <div  style="width: 100%;" class="images-items1" >

            <div class="min-h-[112px] mx-4 my-4 p-2 static bg-white leading-6 rounded border border-solid hover:shadow-sd-hover hover:border-se-accent-100 hover:border-opacity-50 border-se-blue-10">

                <a style="height:110px" href="{{url('detailpage',$nghes1->id)}}" class="flex static w-full flex-col">
                    <div title="jobtitle" >
                        <div class="flex items-start  justify-between flex-1">
                        <h3 class=" mx-2">{{$nghes1->tennghe}}</h3>
                            <span class="svicon-heart ">
                                <i class="fa-regular fa-heart cursor-pointer ml-2 text-lg text-se-accent-100 mt-0.5"></i>
                            </span>
                        </div>
                        <div class="flex flex-row">
                            <div class="bg-white flex flex-row rounded-md w-16 h-15 mr-1">
                            <img src="{{asset('/public/uploads/congty/'.$nghes1->logo_congty)}}" alt="">

                            </div>
                       
                            <div class="flex flex-col ml-1">
                                <div class="flex items-baseline">
                                    <i class="fa-solid fa-building"></i>
                                    <p class="ml-3" >{{$nghes1->tencongty}}</p>
                                </div>
                                <div class="flex items-baseline">
                                <i class="fa-solid fa-location-dot"></i>
                                    <p class="ml-3" >{{$nghes1->Location}}</p>
                                </div>
                            </div>
                            <div class="flex flex-col ml-auto"></div>
                        </div>
                    </div>
                </a>
                </div>
              
                </div>

            @endforeach
            </div>
 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>  

        <script type="text/javascript">
            $(document).ready(function(){
                $('.slick1').slick(
                    {   
                    rows: 6,
                    dots: true,
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplaySpeed: 2000,         
                    loop:true,
                    autoplay:true,
                    arrows: true,
                    prevArrow: `<button type='button' class='slick-prev slick-arrow'><ion-icon name="chevron-back-outline"></ion-icon></button>`,
                    nextArrow: `<button type='button' class='slick-next slick-arrow'><ion-icon name="chevron-forward-outline"></ion-icon></button>`, 
                    responsive: [
                        {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            arrows: false,
                        }
                        },
                        {
                        breakpoint: 900,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: false,
                        }
                        },
                    
                    
                    ]

                    
            }
        );
    });
    
  </script>

                        <style>
                            .slick1 .slick-arrow {
                            position: absolute;
                            border: none;
                            top:98%;
                            width: 50px;
                            height: 50px;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            z-index: 5;
                            transition: all 0.2s linear;
                            border-radius: 50%;
                            font-size: 30px;
                            border-radius: 50%;
                            
                            background-color: #FAF5F5;
                            }
                            .slick1 .slick-prev{
                                left:30%;
                            }
                            .slick1 .slick-next{
                                right:30%;
                            }
                            .slick-dots {
                                display: flex;
                                justify-content: center;
                                margin: 0;
                                padding: 1rem 0;
                                list-style-type: none;
                                
                                    li {
                                        margin: 0 0.25rem;
                                    }
                                
                                    button {
                                        display: block;
                                        width: 1rem;
                                        height: 1rem;
                                        padding: 0;
                                        
                                        border: none;
                                        border-radius: 100%;
                                        background-color: gray;
                                        text-indent: -9999px;
                                    }
                                }
                        </style>

       
<h1 class="mt-5 font-bold text-4xl">Xuất khẩu lao động</h1>   
<div class="slick1">

            <?php


                    $nghes2 = nghes::select()
                        ->where('post_status','=', 'active')
                        ->where('id_loainghe', '=', 2)
                        ->join('congtys', 'nghes.id_congty', '=', 'congtys.id_congty')
                        ->get();

            ?>
            @foreach ($nghes2 as $nghes2)
                <div  style="width: 100%;"  class="images-items1" >

            <div class="min-h-[112px] mx-4 my-4 p-2 static bg-white leading-6 rounded border border-solid hover:shadow-sd-hover hover:border-se-accent-100 hover:border-opacity-50 border-se-blue-10">

                <a style="height:110px" href="{{url('detailpage',$nghes2->id)}}" class="flex static w-full flex-col">
                    <div title="jobtitle" >
                        <div class="flex items-start  justify-between flex-1">
                        <h3 class=" mx-2">{{$nghes2->tennghe}}</h3>
                            <span class="svicon-heart ">
                                <i class="fa-regular fa-heart cursor-pointer ml-2 text-lg text-se-accent-100 mt-0.5"></i>
                            </span>
                        </div>
                        <div class="flex flex-row">
                            <div class="bg-white flex flex-row rounded-md w-16 h-15 mr-1">
                            <img src="{{asset('/public/uploads/congty/'.$nghes2->logo_congty)}}" alt="">

                            </div>
                        
                            <div class="flex flex-col ml-1">
                                <div class="flex items-baseline">
                                    <i class="fa-solid fa-building"></i>
                                    <p class="ml-3" >{{$nghes2->tencongty}}</p>
                                </div>
                                <div class="flex items-baseline">
                                <i class="fa-solid fa-location-dot"></i>
                                    <p class="ml-3" >{{$nghes2->Location}}</p>
                                </div>
                            </div>
                            <div class="flex flex-col ml-auto"></div>
                        </div>
                    </div>
                </a>
                </div>
                </div>

            @endforeach
</div>

            <h1 class="font-bold text-4xl">Đơn vị đào tạo ngôn ngữ </h1>  

            <div class="slick1">

            <?php
                    $nghes3 = nghes::select()
                        ->where('post_status','=', 'active')
                        ->where('id_loainghe', '=', 3)
                        ->join('congtys', 'nghes.id_congty', '=', 'congtys.id_congty')
                        ->get();
            ?>
            @foreach ($nghes3 as $nghes3)
  
            <div  style="width: 100%;" class="images-items1"  >

            <div class="min-h-[112px] mx-4 my-4 p-2 static bg-white leading-6 rounded border border-solid hover:shadow-sd-hover hover:border-se-accent-100 hover:border-opacity-50 border-se-blue-10">

                <a style="height:110px" href="{{url('detailpage',$nghes3->id)}}" class="flex static w-full flex-col">
                    <div title="jobtitle" >
                        <div class="flex items-start  justify-between flex-1">
                        <h3 class=" mx-2">{{$nghes3->tennghe}}</h3>
                            <span class="svicon-heart ">
                                <i class="fa-regular fa-heart cursor-pointer ml-2 text-lg text-se-accent-100 mt-0.5"></i>
                            </span>
                        </div>
                        <div class="flex flex-row">
                            <div class="bg-white flex flex-row rounded-md w-16 h-15 mr-1">
                                <img src="{{asset('/public/uploads/congty/'.$nghes3->logo_congty)}}" alt="">
                                </div>

                            <div class="flex flex-col ml-1">
                                <div class="flex items-baseline">
                                    <i class="fa-solid fa-building"></i>
                                    <p class="ml-3" >{{$nghes3->tencongty}}</p>
                                </div>
                                <div class="flex items-baseline">
                                <i class="fa-solid fa-location-dot"></i>
                                    <p class="ml-3" >{{$nghes3->Location}}</p>
                                </div>
                            </div>
                            <div class="flex flex-col ml-auto"></div>
                        </div>
                    </div>
                </a>
                </div>
                </div>
                @endforeach
            </div>
            
            
            </div>

 


              

          

            <div style=" width:100%" class="flex justify-center">

      
            <div class="text-center" style="max-width: 1280px;">

            
            <h1  class="font-bold text-4xl">Các đối tác</h1>
                <div class="slick4 lg:w-full" style="  margin-top:20px">
                    <div>
                        <div style="height: 130px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s; border-radius:10px" class="lg:w-full sm:w-full bg-white grid grid-cols-1 justify-items-center">
                            <img src="/public/images/doitac/cocacola.png" >
                            <p class="font-bold">20 vị trí đang tuyển</p> 
                        </div>    
                    </div>
                    <div >
                    <div style="height: 130px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s; border-radius:10px" class="lg:w-full sm:w-[200px] bg-white grid grid-cols-1 justify-items-center">
                    <img src="/public/images/doitac/phuongnam.png" >
                            <p class="font-bold">10 vị trí đang tuyển</p> 
                        </div>    
                    </div>
                    <div >
                    <div style="height: 130px;  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s; border-radius:10px" class="lg:w-full sm:w-[200px] bg-white grid grid-cols-1 justify-items-center">
                    <img src="/public/images/doitac/asiafort.png" >
                            <p class="font-bold">20 vị trí đang tuyển</p> 
                        </div>    
                    </div>
                    <div >
                    <div style="height: 130px;  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s; border-radius:10px" class="lg:w-full sm:w-[200px] bg-white grid grid-cols-1 justify-items-center">
                    <img src="/public/images/doitac/ccmb.png" >
                            <p class="font-bold">20 vị trí đang tuyển</p> 
                        </div>    
                    </div>
                    <div >
                    <div style="height: 130px;  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s; border-radius:10px" class="lg:w-full sm:w-[200px] bg-white grid grid-cols-1 justify-items-center">
                    <img src="/public/images/doitac/jellyfish.png" >
                            <p class="font-bold">20 vị trí đang tuyển</p> 
                        </div>    
                    </div>
                    <div>
                    <div style="height: 130px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s; border-radius:10px" class="lg:w-full sm:w-[200px] bg-white grid grid-cols-1 justify-items-center">
                    <img src="/public/images/doitac/image.png" >
                            <p class="font-bold">20 vị trí đang tuyển</p> 
                        </div>    
                    </div>
                    <div>
                    <div style="height: 130px;  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s; border-radius:10px" class="lg:w-full sm:w-[200px] bg-white grid grid-cols-1 justify-items-center">
                    <img src="/public/images/doitac/image.png" >
                            <p class="font-bold">20 vị trí đang tuyển</p> 
                        </div>    
                    </div>

                </div>
                </div>
                </div>
                <script>
                    
                    $('.slick4').slick({
                    infinite: true,
                    speed: 300,
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    arrows: true,
                    arrows: true,                    
                    draggable: false,
                    prevArrow: `<button type='button' class='slick-prev slick-arrow'><ion-icon name="chevron-back-outline"></ion-icon></button>`,
                    nextArrow: `<button type='button' class='slick-next slick-arrow'><ion-icon name="chevron-forward-outline"></ion-icon></button>`,    
                    responsive: [
                        {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true,
                            arrows: false,
                        }
                        },
                        {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            arrows: false,
                        }
                        },
                        {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: false,
                        }
                        }
                    ]
});
                </script>
      


        </section>



    <section style="margin-bottom:50px;display: grid;justify-items: center; width: 100%;gap: 50px;" class=" mx-5 px-4 lg:px-10 static m-auto w-full bg-se-titan-white lg:rounded-xl pb-7 mb-[-17px] min-h-[700px] md:min-h-[269px]">
        <h1 style="font-size: 40px" class=" font-bold">Từ khóa tìm việc làm phổ biến tại Việc làm năm châu</h1>
        <div style=" display: grid;gap: 20px;max-width:1280px" class="wp-container  sm:grid-cols-3 lg:grid-cols-3 sm:w-full ">    
        <div style="overflow: auto; height:300px; padding: 20px;" class="bg-gray-300 text-se-neutral-100-n lg:mb-0 mb-9 ">
            <h2 class="font-bold">Việc làm theo ngành nghề</h2>
                <div class="mt-2">
                <?php

                    $nganhnghes1 = nganhnghes::select()
                    ->get();
                
                ?>
                @foreach($nganhnghes1 as $nganhnghes1)
                    <p>{{$nganhnghes1->tennganh}}</p>
                    @endforeach
                </div>

        </div>

            <div style="height:300px; padding: 20px; overflow: auto;" class="bg-gray-300 text-se-neutral-100-n lg:mb-0 mb-9 ">
                <h2 class="font-bold font-size: 30px">Việc làm tại quốc gia</h2>
            
                <div class="mt-2">
                <?php
                    use App\Models\quocgias;
                        $quocgia = quocgias::select()
                        ->get();

                    ?>
                    @foreach($quocgia as $quocgia)
                    <p>{{$quocgia->tenquocgia}}</p>
                    @endforeach
                    </div>
                </div>

   
       
            <div style="overflow: auto; height:300px; padding: 20px;" class="bg-gray-300 text-se-neutral-100-n lg:mb-0 mb-9 ">
            <h2 class="font-bold font-size: 30px">Việc làm phổ biến</h2>
            <div class="mt-2">
                <?php

                    $nganhnghes2 = nganhnghes::select()
                    ->get();
                
                ?>
                @foreach($nganhnghes2 as $nganhnghes2)
                    <p>{{$nganhnghes2->tennganh}}</p>
                    @endforeach
                </div>
            </div>
        </div>


</div>
    </section>

