@include('admin.layouts.css')

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
                Tên nghề
              </th>
              <th
                scope="col"
                class="border-e border-neutral-200 px-6 py-4 dark:border-white/10">
                Lương
              </th>
              <th
                scope="col"
                class="border-e border-neutral-200 px-6 py-4 dark:border-white/10">
                Nơi làm việc
              </th>
              <th
                scope="col"
                class="border-e border-neutral-200 px-6 py-4 dark:border-white/10">
                Logo công ty
              </th>
              <th
                scope="col"
                class="border-e border-neutral-200 px-6 py-4 dark:border-white/10">
                Trạng thái
              </th>
              <th
                scope="col"
                class="border-e border-neutral-200 px-6 py-4 dark:border-white/10">
                Quản lý
              </th>
              <th
                scope="col"
                class="border-e border-neutral-200 px-6 py-4 dark:border-white/10">
                Trạng thái
              </th>
            </tr>
          </thead>
            @foreach ($nghes as $nghes)
            <tr style="height: 100px;" class="min-w-full border border-neutral-200 text-center text-sm font-light text-surface dark:border-white/10 dark:text-white" >
                <td>{{$nghes->id}}</td>
                <td>{{$nghes->tennghe}}</td>
                <td>{{$nghes->Luong}}</td>
                <td>{{$nghes->tencongty}}</td>
                <td>{{$nghes->post_status}}</td>
                <td><img style="padding:20px" src="{{asset('/public/uploads/congty/'.$nghes->logo_congty)}}"></td>
                <td class="flex flex-col gap-3">
                <a href="{{ route('admin.accept_status',$nghes->id) }}"
                  class="px-4 py-2 text-blue-100 no-underline bg-green-500 rounded hover:bg-blue-600 hover:underline hover:text-blue-200">
                  Chấp nhận</a>
                  <a href="{{ route('admin.reject_status',$nghes->id) }}"
                  class="px-4 py-2 text-blue-100 no-underline bg-red-500 rounded hover:bg-blue-600 hover:underline hover:text-blue-200">
                  Từ chối</a>
                </td>
                </tr>
            @endforeach
         
        </table>
      </div>
      {{ $nghes->links('pagination::tailwind') }}

    </div>
  </div>
</div>

</div>
</div>