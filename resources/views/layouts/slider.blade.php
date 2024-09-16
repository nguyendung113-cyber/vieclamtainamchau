
        <div class="image-slider">
            <div class="images-items">
                <div class="image">
                    <img src="/public/images/slide_1.png" >
                </div>
            </div>
            <div class="images-items">
                <div class="image">
                    <img src="/public/images/slider_4.png" >
                </div>
            </div>
            <div class="images-items">
                <div class="image">
                    <img src="/public/images/slider_5.png" >
                </div>
            </div>
        </div>



        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.4.1/jquery-migrate.min.js" integrity="sha512-KgffulL3mxrOsDicgQWA11O6q6oKeWcV00VxgfJw4TcM8XRQT8Df9EsrYxDf7tpVpfl3qcYD96BpyPvA4d1FDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){ 
                $('.image-slider').slick(
                    {
                        slideToShow: 1,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        infinite: true,   
                        arrows: true,                    
                        draggable: false,
                        prevArrow: `<button type='button' class='slick-prev slick-arrow'><ion-icon name="chevron-back-outline"></ion-icon></button>`,
                        nextArrow: `<button type='button' class='slick-next slick-arrow'><ion-icon name="chevron-forward-outline"></ion-icon></button>`,            }
                );
            });
        </script>

    <style>
            .image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            }
            .slick-initialized .slick-slide {
            margin: 0 10px;
            }
            .slick-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 5;
            transition: all 0.2s linear;
            border-radius: 50%;
            font-size: 30px;
            border-radius: 50%;
            background-color: #FAF5F5;
            }
            .slick-prev {
            left: 20px;
            }
            .slick-next {
            right: 20px;
            }
    </style>
