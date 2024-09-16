@include('admin.layouts.css')
@include('admin.layouts.navigation')


<div class="flex">

@include('admin.layouts.sidebar')

<div class="mx-10 py-10">

@if(session('success'))
  <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
    {{session('success')}}
  </div>
@endif
<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table
          class="min-w-full border border-neutral-200 text-center text-sm font-light text-surface dark:border-white/10 dark:text-white">
          <thead
            class="border-b border-neutral-200 font-medium dark:border-white/10">
            <tr>
              <th
                scope="col"
                class="border-e border-neutral-200 px-6 py-4 dark:border-white/10">
                ID
              </th>
              <th
                scope="col"
                class="border-e border-neutral-200 px-6 py-4 dark:border-white/10">
                Tên nghề
              </th>
              <th
                scope="col"
                class="border-e border-neutral-200 px-6 py-4 dark:border-white/10">
                Logo công ty
              </th>
              <th
                scope="col"
                class="border-e border-neutral-200 px-6 py-4 dark:border-white/10">
                Nơi làm việc
              </th>
           
              <th
                scope="col"
                class="border-e border-neutral-200 px-6 py-4 dark:border-white/10">
                Quản lý
              </th>
              <th scope="col" class="px-6 py-4"></th>
            </tr>
          </thead>
            @foreach ($congty as $congtys)
            <tr style="height: 100px;" class="min-w-full border border-neutral-200 text-center text-sm font-light text-surface dark:border-white/10 dark:text-white" >
                <td>{{$congtys->id_congty}}</td>
                <td>{{$congtys->tencongty}}</td>
                <td><img src="{{asset('/public/uploads/congty/'.$congtys->logo_congty)}}" alt=""></td>
                <td>{{$congtys->Location}}</td>
                <td>{{$congtys->soluong_nhanvien}}</td>
                <td>
                <form action="{{ route('admin.destroycongty',$congtys->id_congty) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
        </table>
      </div>
            {{ $congty->links('pagination::tailwind') }}
    </div>
  </div>
</div>

</div>

 
</div>