
@include('layouts.css')


@include('layouts.navigation')

@include('layouts.menu')


<div class="w-full grid justify-center  bg-gray-100">
<form class=" bg-white px-10 py-10 mb-4" style="border-radius:4px">
<div style="margin-top:20px;max-width:1280px; grid-template-columns: repeat(3, 1fr)" class=" gap-5 grid grid-cols-3">
        <div>
            <p>Châu lục</p>
            <select style="width: 250px; height: 30px;border-width:1px" name="QuocGia" id="QuocGia">
                <option  value="#">Chọn</option>
            </select>
        </div>
        <div>
            <label>Quốc gia</label>
            <div>
            <select style="width: 250px; height: 30px;border-width:1px" name="QuocGia" id="QuocGia">
                <option  value="#">Chọn</option>
            </select>
            </div>

        </div>
        <div>
            <p>Thành phố</p>
            <select style="width: 250px; height: 30px; border-width:1px" name="QuocGia" id="QuocGia">
                <option  value="#">Chọn</option>
            </select>
        </div>
    </div>
    <div style="margin-bottom: 10px;margin-top:20px;max-width:1280px; grid-template-columns: repeat(3, 1fr);" class=" gap-5 grid grid-cols-3">
        <div>
            <div>
                <input style="border-radius: 5px; width: 250px " class="border h-8" type="text" placeholder="     Tên *">
            </div>
        </div>
        <div>
            <div>
            <input style="border-radius: 5px; width: 250px " class="border h-8" type="text" placeholder="     Số điện thoại *">
            </div>
        </div>
        <div>
            <div>
            <input style="border-radius: 5px; width: 250px "  class="border h-8" type="text" placeholder="    Email *">
            </div>
        </div>
    </div>

    <div style="margin-bottom: 10px;margin-top:20px;max-width:1280px" class=" gap-5 grid grid-cols-2">
        <div>
            <div>
                <input style="border-radius: 5px; width: 400px " class="border h-8" type="text" placeholder="     Tên *">
            </div>
        </div>
        <div>
            <select style="width: 250px; height: 30px; border-width:1px; width: 390px; border-width:1px; height:32px; border-radius: 5px" name="QuocGia" id="QuocGia">
                <option  value="#">Chuyên mục câu hỏi</option>
            </select>
        </div>
    </div>
    <div>
        <div style="width: 99%;" class=" h-28">
            <textarea style="width:100%; height:90%; border-width:1px; padding-top:10px"  name="" id="" placeholder="   Hãy cho chúng tôi biết về doanh nghiệp của bạn"></textarea>
        </div>
    </div>
    <div>
        <div style="width: 99%;" class=" h-28">
            <textarea style="width:100%; height:90%; border-width:1px; padding-top:10px"  name="" id="" placeholder="   Nhập nội dung cần liên hệ, đề xuất, góp y*"></textarea>
        </div>
    </div>

    <div style="margin-bottom: 10px;max-width:1280px; grid-template-columns: repeat(3, 1fr);" class=" gap-5 grid grid-cols-3">
        <div>
            <div>
            <input style="border-radius: 5px; width: 250px "  class="border h-8" type="text" placeholder="    Nhập mã xác nhận *">
            </div>
        </div>
        
    </div>
    <div style="margin-top: 20px; color:#fff; font-size:20px;">
            <button style="background-color: rgb(30,58,138); padding:10px; width:300px ; border-radius:10px">Gửi câu hỏi</button>
    </div>
    

    </form>
</div>




@include('layouts.footer')