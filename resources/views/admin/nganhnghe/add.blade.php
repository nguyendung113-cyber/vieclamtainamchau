
@include('layouts.css')

@include('admin.layouts.navigation')
<div class="flex">


@include('admin.layouts.sidebar')

<div style="width:70%" class=" py-3 px-10 justify-center">


<form method="POST" action="{{url('admin/insert-nganhnghe')}}" enctype="multipart/form-data">
    @csrf
    <div class="flex justify-center flex-col ">
    <table style="border:1px solid black" class="gap-4">
    <tr >
        <td >Tên ngành</td>
        <td ><input style="border: 1px solid black ;width:100%" type="text" name="tennganh"></td>
    </tr>    
    <tr>
        <td >Thứ tự</td>
        <td ><input style="border: 1px solid black ;width:100%" type="text" name="thutu"></td>
    </tr>  
    <tr>
        <td >Hình ảnh</td>
        <td ><input style="border: 1px solid black" type="file" name="hinhanh"></td>
    </tr>  
    <tr>
        <td >Số lượng</td>
        <td ><input style="border: 1px solid black ;width:100%" type="text" name="soluong"></td>
    </tr>  


    </div>
    </table>
    <input class=" bg-green-400 mt-3" style="border: 1px solid black; width:100%" type="submit" value="Thêm ngành nghề">

</form>



</div>
</div>

<style>
    input{
        width:100%;
        border-radius: 2px;
    }
</style>