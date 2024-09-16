
@include('layouts.css')

@include('admin.layouts.navigation')
<div class="flex">


@include('admin.layouts.sidebar')

<div style="width:70%" class=" py-3 px-10 justify-center">


<form method="POST" action="{{url('admin/insert-quocgia')}}" enctype="multipart/form-data">
    @csrf
    <div class="flex justify-center flex-col ">
    <table style="border:1px solid black" class="gap-4">
    <tr >
        <td >Tên quốc gia</td>
        <td ><input style="border: 1px solid black ;width:100%" type="text" name="tenquocgia"></td>
    </tr>    
    <tr>
        <td >Quốc kỳ </td>
        <td ><input style="border: 1px solid black" type="file" name="flag"></td>
    </tr>  
    <tr >
        <td >Châu lục</td>
        <td >
            <select name="id_chauluc" id="">
            @foreach ($chaulucs as $chaulucs)
                <option value="{{$chaulucs->id_chauluc}}">{{$chaulucs->tenchauluc}}</option>
            @endforeach            
        </select>
           
        </td>
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