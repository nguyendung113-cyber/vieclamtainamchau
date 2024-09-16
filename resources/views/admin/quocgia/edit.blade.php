
@include('layouts.css')

@include('admin.layouts.navigation')
<div class="flex">


@include('admin.layouts.sidebar')

<div style="width:70%" class=" py-3 px-10 justify-center">
<div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>

<form method="POST" action="{{ route('admin.updatequocgia', ['data' => $quocgias])}}">
    @csrf
    @method('PUT')
    <div class="flex justify-center flex-col">
    <table style="border:1px solid black" class="py-4">
    <tr class="">
        <td >Tên quốc gia</td>
        <td ><input style="border: 1px solid black ;width:100%" type="text" name="tenquocgia" value="{{$quocgias->tenquocgia}}"></td>
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
    <input class=" bg-green-400 mt-3" style="border: 1px solid black; width:100%" type="submit" value="Update thông tin">

</form>



</div>
</div>

<style>
    input{
        width:100%;
        border-radius: 2px;
    }
</style>