@include('layouts.css')

@include('admin.layouts.navigation')

<div class="flex">
@include('admin.layouts.sidebar')

<div class="mx-10">

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
                Tên quốc gia
              </th>
              <th
                
                class="border-e min-w-[500px] border-neutral-200 px-6 py-4 dark:border-white/10">
                Cờ
              </th>
              <th
                scope="col"
                class="border-e border-neutral-200 px-6 py-4 dark:border-white/10">
                Quản lý
              </th>
            </tr>
          </thead>
            @foreach ($quocgias as $quocgia)
            <tr style="height: 100px;" class="min-w-full border border-neutral-200 text-center text-sm font-light text-surface dark:border-white/10 dark:text-white" >
                <td>{{$quocgia->id_quocgia}}</td>
                <td>{{$quocgia->tenquocgia}}</td>
                <td><img src="{{asset('uploads/quocgia/'.$quocgia->flag)}}" alt=""></td>
                    <td>
                        <a href="{{ route('admin.editquocgia', $quocgia->id_quocgia) }}" type="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                        <a href="{{ route('admin.destroyquocgia',$quocgia->id_quocgia) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" style="border-radius:5px" type="submit">Delete</a>
                    </td>
                </tr>
            @endforeach
         
        </table>
      </div>
    </div>

  </div>
</div>
{{ $quocgias->links('pagination::tailwind') }}

</div>

</div>