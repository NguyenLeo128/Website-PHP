        <main>
            <div class="slider">
                <div class="container">
                    <div class="wrapper">
                        <div class="myslider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="image object-cover">
                                            <img src="<?php echo base_url('front-end/images/slider-1.webp') ?>" alt="">
                                        </div>
                                        <div class="text-content flexcol">
                                            <a href="#" class="primary-button">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="image object-cover">
                                            <img src="<?php echo base_url('front-end/images/slider-2.jpg') ?>" alt="">
                                        </div>
                                        <div class="text-content flexcol">
                                            <a href="#" class="primary-button">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="image object-cover">
                                            <img src="<?php echo base_url('front-end/images/slider-3.png') ?>" alt="">
                                        </div>
                                        <div class="text-content flexcol">
                                            <a href="#" class="primary-button">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider -->
            <div class="brands">
                <div class="container">
                    <div class="wrapper flexitem">
                        <?php
                            foreach($brand as $key => $brand){
                                        
                        ?>
                        <div class="item">
                            <a href="<?php echo base_url('thuong-hieu/'.$brand->id.'/'.$brand->slug)?>">
                                <img src="<?php echo base_url('uploads/brand/'.$brand->image) ?>" alt="">
                            </a>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Brands -->
            
            <!-- Trending -->
            <div class="features">
                <div class="container">
                    <div class="wrapper">
                        <div class="column">
                            <div class="sectop flexitem">
                                <h2><span class="circle"></span><span>Featured Products</span></h2>
                                <div class="second-links">
                                    <a href="#" class="view-all">
                                        View all<i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="products main flexwrap">
                                <?php
                                    foreach($allproduct_pagination as $pro){
                                        
                                ?>
                                <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="<?php echo base_url('san-pham/'.$pro->id.'/'.$pro->slug) ?>">
                                                <img src="<?php echo base_url('uploads/product/'.$pro->image) ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="hoverable">
                                            <ul>
                                                <li class="active">
                                                    <a href="#"><i class="ri-heart-line"></i></a></i>
                                                </li>
                                                <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="discount circle flexcenter"><span>31%</span></div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <div class="stars"></div>
                                            <span class="mini-text">(1,955)</span>
                                        </div>
                                        <h3><a href="<?php echo base_url('san-pham/'.$pro->id.'/'.$pro->slug) ?>"><?php echo $pro->title ?></a></h3>
                                        <div class="price">
                                            <span class="current"><?php echo number_format($pro->price,0,',','.') ?> vnd</span>
                                            <span class="normal mini-text">$75.50</span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    
                                }
                                ?>
                            </div>
                            <!-- feaetured product -->
                            
                        </div>
                        <?php echo $links; ?>
                    </div>
                </div>
            </div>
            <!-- <div class="banners">
                <div class="container">
                    <div class="column">
                        <div class="banner flexwrap">
                            <div class="row">
                                <div class="item">
                                    <div class="image">
                                        <img src="th (4).jfif" alt="">
                                    </div>
                                    <div class="text-content flexcol">
                                        <h4>Brutal Sale!</h4>
                                        <h3><span>Get the deal in here<br>Living Room Chair</span></h3>
                                        <a href="#" class="primary-button">Show Now</a>
                                    </div>
                                    <a href="#" class="over-link"></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="item get-gray">
                                    <div class="image ">
                                        <img src="th (4).jfif" alt="">
                                    </div>
                                    <div class="text-content flexcol">
                                        <h4>Brutal Sale!</h4>
                                        <h3><span>Get the deal in here<br>Living Room Chair</span></h3>
                                        <a href="#" class="primary-button">Show Now</a>
                                    </div>
                                    <a href="#" class="over-link"></a>
                                </div>
                            </div>
                        </div>

                        <div class="product-categories flexwrap">
                            <div class="row">
                                <div class="item">
                                    <div class="image">
                                        <img src="banenr.jfif" alt="">
                                    </div>
                                    <div class="content mini-links">
                                        <div class="h4">Beauty</div>
                                        <ul class="flexcol">
                                            <li><a href="#">asdfasfd</a></li>
                                            <li><a href="#">asdfasfd</a></li>
                                            <li><a href="#">asdfasfd</a></li>
                                            <li><a href="#">asdfasfd</a></li>
                                            <li><a href="#">asdfasfd</a></li>
                                        </ul>
                                        <div class="second-links">
                                            <a href="" class="view-all">
                                                View all
                                                <i class="ri-arrow-right-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="item">
                                    <div class="image">
                                        <img src="banenr.jfif" alt="">
                                    </div>
                                    <div class="content mini-links">
                                        <div class="h4">Beauty</div>
                                        <ul class="flexcol">
                                            <li><a href="#">asdfasfd</a></li>
                                            <li><a href="#">asdfasfd</a></li>
                                            <li><a href="#">asdfasfd</a></li>
                                            <li><a href="#">asdfasfd</a></li>
                                            <li><a href="#">asdfasfd</a></li>
                                        </ul>
                                        <div class="second-links">
                                            <a href="" class="view-all">
                                                View all
                                                <i class="ri-arrow-right-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="item">
                                    <div class="image">
                                        <img src="banenr.jfif" alt="">
                                    </div>
                                    <div class="content mini-links">
                                        <div class="h4">Beauty</div>
                                        <ul class="flexcol">
                                            <li><a href="#">asdfasfd</a></li>
                                            <li><a href="#">asdfasfd</a></li>
                                            <li><a href="#">asdfasfd</a></li>
                                            <li><a href="#">asdfasfd</a></li>
                                            <li><a href="#">asdfasfd</a></li>
                                        </ul>
                                        <div class="second-links">
                                            <a href="" class="view-all">
                                                View all
                                                <i class="ri-arrow-right-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </main>
        