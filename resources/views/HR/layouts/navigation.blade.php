


@if( Route::has('login'))
@auth('HR')

<div class="flex px-5 justify-between py-5">

<img style="width: 400px; height:auto" src="{{asset('images/icon/logo_1.png')}}" alt="">

<div class=" flex " style="align-items:end; left:0%; ">

<div style="border-radius:20px; width:auto; height: 40px;" class="h-max flex items-center bg-blue-400">
    <p>Giỏ hàng</p>
</div>


<div style="border-radius:20px;" class="h-max flex bg-blue-400">


<i style="font-size:40px" class="fa-solid fa-circle-user"></i>
<x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                <div class="ms-1">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </button>
        </x-slot>

        <x-slot name="content">
            <x-dropdown-link :href="route('HR.profile.edit')">
                {{ __('Profile') }}
            </x-dropdown-link>

            <!-- Authentication -->
            <form method="POST" action="{{ route('HR.logout') }}">
                @csrf

                <x-dropdown-link :href="route('HR.logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>

        </x-slot>
    </x-dropdown> 
    </div>
    </div>
</div>
@endauth
@endif