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
              
            </tr>
          </thead>
            @foreach ($nghes as $nghe)
            <tr style="height: 100px;" class="min-w-full border border-neutral-200 text-center text-sm font-light text-surface dark:border-white/10 dark:text-white" >
                <td>{{$nghe->id}}</td>
                <td>{{$nghe->tennghe}}</td>
                <td>{{$nghe->Luong}}</td>
                <td>{{$nghe->Location}}</td>
                <td>{{$nghe->post_status}}</td>
                <td><img style="padding:20px" src="{{asset('/public/uploads/congty/'.$nghe->logo_congty)}}"></td>
                <td>
                 <form action="{{ route('admin.destroynghe',$nghe->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                  </form>
                </td>
                </tr>
            @endforeach
         
        </table>
      </div>s
      {{ $nghes->links('pagination::tailwind') }}
    </div>
  </div>
</div>

</div>
</div>