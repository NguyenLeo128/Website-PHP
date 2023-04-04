<footer>
            <div class="newsletter">
                <div class="container">
                    <div class="wrapper">
                        <div class="box">
                            <div class="content">
                                <h3>Join Our Newsletter</h3>
                                <p>Get E-mail updates about our latest shop and <strong>special offers</strong></p>
                            </div>
                            <form action="" class="search">
                                <span class="icon-large"><i class="ri-mail-line"></i></span>
                                <input type="mail" placeholder="Your email address" required>
                                <button type="submit">Sign up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- newsletter -->
            <div class="widgets">
                <div class="container">
                    <div class="wrapper">
                        <div class="flexwrap">
                            
                            <div class="row">
                                <div class="item mini-links">
                                    <h4>Mục sản phẩm</h4>
                                    <ul class="flexcol">
                                        <li><a href="">Thông tin sản phẩm</a></li>
                                        <li><a href="">Thông tin danh mục</a></li>
                                        <li><a href="">Tìm hiểu về mua trả góp</a></li>
                                        <li><a href="">Chính sách bảo hành</a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="item mini-links">
                                    <h4>Thông tin thanh toán</h4>
                                    <ul class="flexcol">
                                        <li><a href="">Giới thiệu công ty (MWG.vn)</a></li>
                                        <li><a href="">Tuyển dụng</a></li>
                                        <li><a href="">Gửi góp ý, khiếu nại</a></li>
                                        <li><a href="">Tìm siêu thị (3.383 shop)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="item mini-links">
                                    <h4>About us</h4>
                                    <ul class="flexcol">
                                        <li><a href="">Gọi mua:  1800.1060 (7:30 - 22:00)</a></li>
                                        <li><a href="">Khiếu nại: 1800.1062 (8:00 - 21:30)</a></li>
                                        <li><a href="">Bảo hành: 1800.1064 (8:00 - 21:00)</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- widgets -->
            <div class="footer-info">
                <div class="container">
                    <div class="wrapper">
                        <div class="flexcol">
                            <div class="logo">
                                <a href=""><span class="circle"></span>.Store</a>
                            </div>
                            <div class="socials">
                                <ul class="flexitem">
                                    <li><a href=""><i class="ri-twitter-line"></i></a></li>
                                    <li><a href=""><i class="ri-facebook-line"></i></a></li>
                                    <li><a href=""><i class="ri-instagram-line"></i></a></li>
                                    <li><a href=""><i class="ri-linkedin-line"></i></a></li>
                                    <li><a href=""><i class="ri-youtube-line"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <p class="mini-text">Copyright 2022 .Store. All right reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <div class="menu-bottom desktop-hide">
            <div class="container">
                <div class="wrapper">
                    <nav>
                        <ul class="flexitem">
                            <li>
                                <a href="">
                                    <i class="ri-bar-chart-line"></i>
                                    <span>Trending</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="ri-user-6-line"></i>
                                    <span>Account</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="ri-heart-line"></i>
                                    <span>Wishlist</span>
                                </a>
                            </li>
                            <li>
                                <a href="#0" class="t-search">
                                    <i class="ri-search-line"></i>
                                    <span>Search</span>
                                </a>
                            </li>
                            <li>
                                <a href="#0" class="cart-trigger">
                                    <i class="ri-shopping-cart-line"></i>
                                    <span>Cart</span>
                                    <div class="fly-item">
                                        <span class="item-number">0</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="search-bottom desktop-hide">
            <div class="container">
                <div class="wrapper">
                    <form action="" class="search">
                        <a href="" class="t-close search-close flexcenter"><i class="ri-close-line"></i></a>
                        <span class="icon-large"><i class="ri-search-line"></i></span>
                        <input type="search" placeholder="Your email address" required>
                        <button type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </div>


    <script>
        $('.select-filter').change(function(){
            var value = $(this).find(':selected').val();
            // alert(value);
            if(value != 0){
                var url = value;
                window.location.replace(url);
            }else{
                alert('Hảy lọc sản phẩm');
            }
        });
    </script>
        
    <script>
        $('.write-comment').click(function(){
            var name_comment = $('.name_comment').val();
            var summary = $('.summary').val();
            var comment = $('.comment').val();
            if(name_comment == '' || summary == '' || comment == ''){
                alert('Vui lòng điền đủ thông tin');
            }else{
                $.ajax({
                    method: 'POST',
                    url: '/comment/send',
                    data: {name_comment: name_comment, summary: summary, comment: comment},
                    success:function(){
                        alert('Đã đánh giá sản phẩm');
                    }
                })
            }
        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url('front-end/js/script.js') ?>"></script>
    
</body>

</html>
