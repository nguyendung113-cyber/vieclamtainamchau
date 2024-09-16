

<nav style="  --tw-bg-opacity: 1; height:100px;width:100%; background:url('../public/images/icon//background-1.png')"  x-data="{ open: false }" class=" border-b  border-gray-100">
    <!-- Primary Navigation Menu -->


    <div class="max-w-7xl py-10 mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16" style="width:100%">
            <div style="width:100px" class="shrink-0  items-center">
                    <a href="{{ route('index') }}">
                    <div  class="flex">
                    <img src="{{ asset('/public/images/icon/logo_1.png') }}" />
                    </div>                     
                    </a>
            </div>
            <div class="flex flex-col">
            <p>Vị trí của bạn</p>
            <?php
                                function get_IP_address()
                                {
                                    foreach (array('HTTP_CLIENT_IP',
                                                'HTTP_X_FORWARDED_FOR',
                                                'HTTP_X_FORWARDED',
                                                'HTTP_X_CLUSTER_CLIENT_IP',
                                                'HTTP_FORWARDED_FOR',
                                                'HTTP_FORWARDED',
                                                'REMOTE_ADDR') as $key){
                                        if (array_key_exists($key, $_SERVER) === true){
                                            foreach (explode(',', $_SERVER[$key]) as $IPaddress){
                                                $IPaddress = trim($IPaddress); // Just to be safe

                                                if (filter_var($IPaddress,
                                                            FILTER_VALIDATE_IP,
                                                            FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)
                                                    !== false) {

                                                    return $IPaddress;
                                                }
                                            }
                                        }
                                    }
                                }


                                $ip= get_IP_address();

                                $loc = file_get_contents(filename: "http://ip-api.com/json/$ip");
                                $loc_o = json_decode($loc);
                                
                                echo "<div class='flex items-center'>".$loc_o->city." - ".$loc_o->country."</div>";
                                ?>

            </div>
       
            
            <div class="flex justify-center">
                
                    <div class=" items-center w-full h-full">
                        <div class="flex flex-col justify-center w-max">
                            <div class=" text-[14px] lg:text-xl text-center lg:font-bold">
                            VIỆC LÀM TẠI NĂM CHÂU TRÊN THẾ GIỚI <br/>
                            JOBS IN FIVE CONTAINERS OF THE WORLD </div>
                        </div>
                    </div>
                </div>
            
                @if(Route::has('login'))
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                @auth('web')
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Tài khoản') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Đăng xuất') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                                    </div>
                                    @else
                                    <div class="flex ">
                                        <div class="flex flex-col mr-4">
                                            <div class="font-bold">Người tìm việc</div>
                                            <div>
                                            <a
                                            href="{{ route('login') }}"
                                            class="rounded-md  py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Đăng nhập/
                                        </a>

                                        @if (Route::has('register'))
                                            <a
                                                href="{{ route('register') }}"
                                                class="rounded-md py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                            >
                                                Đăng ký
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                    </div>
                                    <div class="flex ">
                                        <div class="flex flex-col ">
                                            <div class="font-bold">Nhà tuyển dụng</div>
                                            <div>
                                            <a
                                            href="{{ route('HR.login') }}"
                                            class="rounded-md  py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Đăng nhập/
                                        </a>

                                        @if (Route::has('HR.register'))
                                            <a
                                                href="{{ route('HR.register') }}"
                                                class="rounded-md py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                            >
                                                Đăng ký
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                    </div>
                                @endauth
                
            @endif
                    
                  
            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>