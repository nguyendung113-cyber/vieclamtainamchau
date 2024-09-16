@include('layouts.css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@include('HR.layouts.navigation')
<div class="w-full" style="border:1px solid blue"></div>
@include('HR.layouts.sidebar')
<div class="px-5 py-5" style=" width:1300px">
    <h1 class="text-blue-700 text-4xl font-bold " style="height: 100px; background:white">THÔNG TIN THANH TOÁN</h1>
    <div style=" max-width:1280px; height:auto; width:100%"  class="gap-3  h-7 flex justify-center text-start flex-col">
                        <p class="font-bold text-4xl text-center">Thông tin thanh toán chuyển khoản</p>
                        <p class="text-xl text-center">Quý khách có thể thanh toán bằng cách chuyển tiền tới tài khoản công ty Vieclamnamchau chúng tôi theo 2 hình thức sau:</p>
                        <div  class="grid grid-cols-2">                             
                            <p class="font-bold text-xl mb-3">Chuyển khoản trực tiếp</p>
                        </div>
                        <div class="grid">
                        <p class=" text-xl  mb-3">Thông tin ngân hàng</p>
                                <select style="border: 1px solid; width:30%" name="#" id="#">
                                    <option  value="1">VietCombank(Khu Vực miền Bắc)</option>
                                </select>
                        </div>
                        <div class=" mt-4 gap-4 mb-4 ">
                            <div class=" flex border">
                                <div class="  pb-3">
                                    <div>
                                        <div >
                                            <img class="h-full w-full" src="{{asset('/public/images/QR.png')}}">
                                        </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=" mt-2 mb-4">
                                            <p class="font-bold">Tên tài khoản nhận</p>
                                            <p>Ngân hàng TMCP Ngoại thương Việt Nam - Chi nhánh Thành Công</p>
                                        </div>
                                        <div class=" mt-2  mb-4">
                                            <p class="font-bold">Chi nhánh</p>
                                            <p>Chi nhánh TMCP Ngoại thương Việt Nam - Chi nhánh Thành Công</p>
                                        </div>
                                        <div class=" mt-2  mb-4">
                                        <p class="font-bold">Số tài khoản</p>
                                        <p>0451000123456</p>
                                    </div>
                                    <div class=" mt-2  mb-4">
                                        <p class="font-bold">Nội dung</p>
                                        <p>Nội dung chuyển khoản ghi rõ tên công ty và số hợp đồng hoặc phiếu đăng ký</p>
                                    </div>
                                    </div>
                               
                            </div>
                                
                            <div class="flex flex-col">
                            <p class="font-bold text-xl mb-3">Thanh toán trực tiếp tại văn phòng</p>
                            <div class="flex border justify-center items-center">
                                <div class=" mr-5">
                                    <img class="h-full" src="{{asset('/public/images/logo/HiJ.png')}}">
                                </div>
                                <div>
                                <div class=" mt-2">
                                    <p class="font-bold">Hồ Chí Minh - Địa chỉ văn phòng</p>
                                    <p>Tầng 6, Tòa nhà CMC Creative Space, Lô Vb.27b-28-29, Đường 19 khu chế xuất Tân Thuận, Phường Tân Thuận Đông, Quận 7, TP. Hồ Chí MInh</p>
                                </div>
                                <div class=" mt-2">
                                    <p class="font-bold">Hà Nội - Địa chỉ văn phòng</p>
                                    <p>Tầng 4, tòa nhà Times Tower, 35 Lê Văn Lương, Thanh Xuân, Hà Nội</p>
                                </div>
                                </div>
                                
                            </div>
                            </div>
                       
                        </div>  
                        <div>
                            <div><p class=" text-red-600">Lưu ý<span class=" text-black">: Khi thanh toán dịch vụ, Quý khách lưu ý các vấn đề sau:</span></p></div>
                            <div>- Nội dung chuyển khoản ghi rõ tên công ty, số hợp đồng hoặc phiếu đăng ký</div>
                            <div>- Không chuyển tiền tới tài khoản cá nhân của nhân viên kinh doanh, chỉ chuyển khoản vào tài khoản Công ty Cổ Phần Việc Làm Tại Năm Châu</div>
                            <div>- Việc Làm Tại Năm Châu không có hình thức thu tiền mặt tại Quý Công ty, vui lòng từ chối thanh toán nếu có người đến thu tiền và báo cho Việc làm tại năm châu biết để xử lý</div>
                        </div>                      
                    </div>
</div>
