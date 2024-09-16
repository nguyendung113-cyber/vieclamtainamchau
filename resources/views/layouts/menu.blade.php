
<div style="width: 100%; height:50px;" class=" justify-self-center flex items-center text-center bg-blue-900 my-auto w-default px-4 xl:px-[80px] text-white  ">
<div style=" width:100%" >
    <div  style="max-width: 100%;display:flex; justify-content: space-around;">
                <a href="{{route('index')}}">Trang chủ</a>
                <div class="dropdown">
                <button class="dropbtn">Việc làm</button>
             
                        <div class="dropdown-content">
    
                        <div class="dropdown1">

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          
                                      
                          <?php
                             use App\Models\quocgias;
                                        $quocgias = quocgias::select()
                                            ->where('id_chauluc', '=', 1)
                                            ->get();
                                ?>
                          <li>
                            <a class="dropdown-item cursor-pointer">Du học tại tại Châu Á</a>
                            <div class="dropdown-menu dropdown-submenu">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            @foreach ( $quocgias as  $quocgias)
                              <li>
                                <a href="{{url('vieclam',$quocgias->id_quocgia)}}" class="dropdown-item ">{{$quocgias->tenquocgia}}</a>
                              </li>
                              @endforeach

                            </ul>
                          </div>  
                          </li>
                          <?php
                                        $quocgias1 = quocgias::select()
                                            ->where('id_chauluc', '=', 2)
                                            ->get();
                                ?>
                          <li>
                          <li>
                            <a class="dropdown-item cursor-pointer">Du học tại tại Châu Âu</a>
                            <div class="dropdown-menu dropdown-submenu">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            @foreach ( $quocgias1 as  $quocgias1)
                              <li>
                                <a href="{{url('vieclam',$quocgias1->id_quocgia)}}" class="dropdown-item ">{{$quocgias1->tenquocgia}}</a>
                              </li>
                              @endforeach
                            </ul>
                          </div>  
                          </li>
                          <?php
                                        $quocgias3 = quocgias::select()
                                            ->where('id_chauluc', '=', 3)
                                            ->get();
                                ?>
                          <li>
                            <a class="dropdown-item cursor-pointer">Du học tại tại Châu Mỹ</a>
                            <div class="dropdown-menu dropdown-submenu">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            @foreach ( $quocgias3 as  $quocgias3)
                              <li>
                                <a href="{{url('vieclam',$quocgias3->id_quocgia)}}" class="dropdown-item ">{{$quocgias3->tenquocgia}}</a>
                              </li>
                              @endforeach
                            </ul>
                          </div>  
                          </li>
                          <li>
                          <?php
                                        $quocgias4 = quocgias::select()
                                            ->where('id_chauluc', '=', 4)
                                            ->get();
                                ?>
                            <a class="dropdown-item cursor-pointer">Du học tại tại Châu Phi</a>
                            <div class="dropdown-menu dropdown-submenu">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            @foreach ( $quocgias4 as  $quocgias4)
                              <li>
                                <a href="{{url('vieclam',$quocgias4->id_quocgia)}}" class="dropdown-item ">{{$quocgias4->tenquocgia}}</a>
                              </li>
                              @endforeach
                            </ul>
                          </div>  
                          </li>
                          <li>
                          <?php
                                        $quocgias5 = quocgias::select()
                                            ->where('id_chauluc', '=', 5)
                                            ->get();
                                ?>
                            <a class="dropdown-item cursor-pointer">Du học tại tại Châu Úc</a>
                            <div class="dropdown-menu dropdown-submenu">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            @foreach ( $quocgias5 as  $quocgias5)
                              <li>
                                <a href="{{url('vieclam',$quocgias5->id_quocgia)}}" class="dropdown-item ">{{$quocgias5->tenquocgia}}</a>
                              </li>
                              @endforeach
                            </ul>
                          </div>  
                          </li>
                          <li>
                          <?php
                                        $quocgias6 = quocgias::select()
                                            ->where('id_chauluc', '=', 6)
                                            ->get();
                                ?>
                            <a class="dropdown-item cursor-pointer">Du học tại tại Trung Đông</a>
                            <div class="dropdown-menu dropdown-submenu">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            @foreach ( $quocgias6 as  $quocgias6)
                              <li>
                                <a href="{{url('vieclam',$quocgias6->id_quocgia)}}" class="dropdown-item ">{{$quocgias6->tenquocgia}}</a>
                              </li>
                              @endforeach
                            </ul>
                          </div>  
                          </li>
                        </ul>

                    </div>
                        </div>
                </div> 
                
             
                <div class="dropdown">
                <button class="dropbtn">Du học nghề</button>
             
                        <div class="dropdown-content">
    
                        <div class="dropdown1">

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          
                                      
                          <?php
                                        $quocgias = quocgias::select()
                                            ->where('id_chauluc', '=', 1)
                                            ->get();
                                ?>
                          <li>
                            <a class="dropdown-item cursor-pointer">Du học tại tại Châu Á</a>
                            <div class="dropdown-menu dropdown-submenu">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            @foreach ( $quocgias as  $quocgias)
                              <li>
                                <a href="{{url('duhocnghe',$quocgias->id_quocgia)}}" class="dropdown-item ">{{$quocgias->tenquocgia}}</a>
                              </li>
                              @endforeach

                            </ul>
                          </div>  
                          </li>
                          <?php
                                        $quocgias1 = quocgias::select()
                                            ->where('id_chauluc', '=', 2)
                                            ->get();
                                ?>
                          <li>
                          <li>
                            <a class="dropdown-item cursor-pointer">Du học tại tại Châu Âu</a>
                            <div class="dropdown-menu dropdown-submenu">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            @foreach ( $quocgias1 as  $quocgias1)
                              <li>
                                <a href="{{url('duhocnghe',$quocgias1->id_quocgia)}}" class="dropdown-item ">{{$quocgias1->tenquocgia}}</a>
                              </li>
                              @endforeach
                            </ul>
                          </div>  
                          </li>
                          <?php
                                        $quocgias3 = quocgias::select()
                                            ->where('id_chauluc', '=', 3)
                                            ->get();
                                ?>
                          <li>
                            <a class="dropdown-item cursor-pointer">Du học tại tại Châu Mỹ</a>
                            <div class="dropdown-menu dropdown-submenu">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            @foreach ( $quocgias3 as  $quocgias3)
                              <li>
                                <a href="{{url('duhocnghe',$quocgias3->id_quocgia)}}" class="dropdown-item ">{{$quocgias3->tenquocgia}}</a>
                              </li>
                              @endforeach
                            </ul>
                          </div>  
                          </li>
                          <li>
                          <?php
                                        $quocgias4 = quocgias::select()
                                            ->where('id_chauluc', '=', 4)
                                            ->get();
                                ?>
                            <a class="dropdown-item cursor-pointer">Du học tại tại Châu Phi</a>
                            <div class="dropdown-menu dropdown-submenu">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            @foreach ( $quocgias4 as  $quocgias4)
                              <li>
                                <a href="{{url('duhocnghe',$quocgias4->id_quocgia)}}" class="dropdown-item ">{{$quocgias4->tenquocgia}}</a>
                              </li>
                              @endforeach
                            </ul>
                          </div>  
                          </li>
                          <li>
                          <?php
                                        $quocgias5 = quocgias::select()
                                            ->where('id_chauluc', '=', 5)
                                            ->get();
                                ?>
                            <a class="dropdown-item cursor-pointer">Du học tại tại Châu Úc</a>
                            <div class="dropdown-menu dropdown-submenu">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            @foreach ( $quocgias5 as  $quocgias5)
                              <li>
                                <a href="{{url('duhocnghe',$quocgias5->id_quocgia)}}" class="dropdown-item ">{{$quocgias5->tenquocgia}}</a>
                              </li>
                              @endforeach
                            </ul>
                          </div>  
                          </li>
                          <li>
                          <?php
                                        $quocgias6 = quocgias::select()
                                            ->where('id_chauluc', '=', 6)
                                            ->get();
                                ?>
                            <a class="dropdown-item cursor-pointer">Du học tại tại Trung Đông</a>
                            <div class="dropdown-menu dropdown-submenu">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            @foreach ( $quocgias6 as  $quocgias6)
                              <li>
                                <a href="" class="dropdown-item ">{{$quocgias5->tenquocgia}}</a>
                              </li>
                              @endforeach
                            </ul>
                          </div>  
                          </li>
                        </ul>

                    </div>
                        </div>
                </div> 
                <div class="dropdown">
                <button class="dropbtn">Xuất khẩu lao động</button>
             
                        <div class="dropdown-content">
    
                        <div class="dropdown1">

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          
                                      
                          <?php
                                        $quocgias = quocgias::select()
                                            ->where('id_chauluc', '=', 1)
                                            ->get();
                                ?>
                          <li>
                            <a class="dropdown-item cursor-pointer">Du học tại tại Châu Á</a>
                            <div class="dropdown-menu dropdown-submenu">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            @foreach ( $quocgias as  $quocgias)
                              <li>
                                <a href="{{url('xuatkhaulaodong',$quocgias->id_quocgia)}}" class="dropdown-item ">{{$quocgias->tenquocgia}}</a>
                              </li>
                              @endforeach

                            </ul>
                          </div>  
                          </li>
                          <?php
                                        $quocgias1 = quocgias::select()
                                            ->where('id_chauluc', '=', 2)
                                            ->get();
                                ?>
                          <li>
                          <li>
                            <a class="dropdown-item cursor-pointer">Du học tại tại Châu Âu</a>
                            <div class="dropdown-menu dropdown-submenu">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            @foreach ( $quocgias1 as  $quocgias1)
                              <li>
                                <a href="{{url('xuatkhaulaodong',$quocgias1->id_quocgia)}}" class="dropdown-item ">{{$quocgias1->tenquocgia}}</a>
                              </li>
                              @endforeach
                            </ul>
                          </div>  
                          </li>
                          <?php
                                        $quocgias3 = quocgias::select()
                                            ->where('id_chauluc', '=', 3)
                                            ->get();
                                ?>
                          <li>
                            <a class="dropdown-item cursor-pointer">Du học tại tại Châu Mỹ</a>
                            <div class="dropdown-menu dropdown-submenu">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            @foreach ( $quocgias3 as  $quocgias3)
                              <li>
                                <a href="{{url('xuatkhaulaodong',$quocgias3->id_quocgia)}}" class="dropdown-item ">{{$quocgias3->tenquocgia}}</a>
                              </li>
                              @endforeach
                            </ul>
                          </div>  
                          </li>
                          <li>
                          <?php
                                        $quocgias4 = quocgias::select()
                                            ->where('id_chauluc', '=', 4)
                                            ->get();
                                ?>
                            <a class="dropdown-item cursor-pointer">Du học tại tại Châu Phi</a>
                            <div class="dropdown-menu dropdown-submenu">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            @foreach ( $quocgias4 as  $quocgias4)
                              <li>
                                <a href="{{url('xuatkhaulaodong',$quocgias4->id_quocgia)}}" class="dropdown-item ">{{$quocgias4->tenquocgia}}</a>
                              </li>
                              @endforeach
                            </ul>
                          </div>  
                          </li>
                          <li>
                          <?php
                                        $quocgias5 = quocgias::select()
                                            ->where('id_chauluc', '=', 5)
                                            ->get();
                                ?>
                            <a class="dropdown-item cursor-pointer">Du học tại tại Châu Úc</a>
                            <div class="dropdown-menu dropdown-submenu">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            @foreach ( $quocgias5 as  $quocgias5)
                              <li>
                                <a href="{{url('xuatkhaulaodong',$quocgias5->id_quocgia)}}" class="dropdown-item ">{{$quocgias5->tenquocgia}}</a>
                              </li>
                              @endforeach
                            </ul>
                          </div>  
                          </li>
                          <li>
                          <?php
                                        $quocgias6 = quocgias::select()
                                            ->where('id_chauluc', '=', 6)
                                            ->get();
                                ?>
                            <a class="dropdown-item cursor-pointer">Du học tại tại Trung Đông</a>
                            <div class="dropdown-menu dropdown-submenu">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            <ul class="grid sm:grid-cols-1 lg:grid-cols-2 bg-white" style="width: 500px">
                            @foreach ( $quocgias6 as  $quocgias6)
                              <li>
                                <a href="{{url('xuatkhaulaodong',$quocgias6->id_quocgia)}}" class="dropdown-item ">{{$quocgias5->tenquocgia}}</a>
                              </li>
                              @endforeach
                            </ul>
                          </div>  
                          </li>
                        </ul>

                    </div>
                        </div>
                </div> 
                    <div class="dropdown">
                <button class="dropbtn">Dịch vụ</button>
             
                    <div class="dropdown-content">
                      <div class="dropdown1">
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <li>
                            <a href="{{route('dichvu')}}" class="dropdown-item ">Dịch vụ Visa và thẻ Apex</a>
                            <a href="{{route('dichvu')}}" class="dropdown-item ">Dịch vụ Tư vấn Luật Lao Động Quốc Tế</a>
                            <a href="{{route('dichvu')}}" class="dropdown-item ">Dịch vụ Đào tạo ngoại ngữ</a>
                            <a href="{{route('dichvu')}}" class="dropdown-item ">Dịch vụ Logitics</a>

                          </li>
                        </ul>
                      </div>
                    </div>

                </div> 
                <div class="dropdown">
                <button class="dropbtn">Tin tức</button>
             
                    <div class="dropdown-content">
                      <div class="dropdown1">
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <li>
                            <a href="{{route('tintuc')}}" class="dropdown-item ">Tin tức Việc làm</a>
                            <a href="{{route('tintuc')}}" class="dropdown-item ">Tin tức xuất khẩu lao động</a>
                            <a href="{{route('tintuc')}}" class="dropdown-item ">Tin tức du học nghề</a>
                          </li>
                        </ul>
                      </div>
                    </div>

                </div> 
                    <a href="{{route('lienhe')}}">Liên hệ</a>

                    </div> 


                </div> 
              
        </div>
        
    </div>
    
</div>

<style>
    .dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}


                          .dropdown-menu li {
                            position: relative;
                            }
                            .dropdown-menu .dropdown-submenu {
                            display: none;
                            width: 400px;
                            position: absolute;
                            left: 100%;
                            top: -7px;
                            }
                            .dropdown-menu .dropdown-submenu-left {
                            right: 100%;
                            left: auto;
                            }
                            .dropdown-menu > li:hover > .dropdown-submenu {
                            display: block;
                            }
</style>
