<main>

            <div class="single-product">
                <div class="container">
                    <?php
                        foreach($product_details as $pro){
                    ?>
                    
                    <div class="wrapper">
                        <div class="breadcrumb">
                            <ul class="flexitem">
                                <li><a href="">Home</a></li>
                                <li><a href="">Shoes</a></li>
                                <li>Men Slip On Shoes Casual with Arch Support Insoles</li>
                            </ul>
                        </div>
                        <!-- breadcrumb -->
                        <div class="column">
                            <div class="products one">
                                <div class="flexwrap">
                                    <div class="row">
                                        <div class="item is-sticky">
                                            <div class="price ">
                                                <span class="discount">32%<br>OFF</span>
                                            </div>
                                            <div class="big-image">
                                                <div class="big-image-wrapper swiper-wrapper">
                                                    <div class="image-chow swiper-slide">
                                                        <a data-fslightbox href="d2020073114315712.jpg">
                                                            <img src="<?php echo base_url('uploads/product/'.$pro->image) ?>" alt="<?php echo $pro->title ?>">
                                                        </a>
                                                    </div>
                                                    <div class="image-chow swiper-slide">
                                                        <a data-fslightbox href="slider_image.jpg">
                                                            <img src="slider_image.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="image-chow swiper-slide">
                                                        <a data-fslightbox href="logo.jfif">
                                                            <img src="logo.jfif" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                            </div>
                                            <div thumbSlider="" class="small-image">
                                                <ul class="small-image-wrapper flexitem swiper-wrapper">
                                                    <li class="thumbnail-show swiper-slide">
                                                        <img src="<?php echo base_url('uploads/product/'.$pro->image) ?>" alt="">
                                                    </li>
                                                    <li class="thumbnail-show swiper-slide">
                                                        <img src="slider_image.jpg" alt="">
                                                    </li>
                                                    <li class="thumbnail-show swiper-slide">
                                                        <img src="logo.jfif" alt="">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="item">
                                            <h1><?php echo $pro->title ?></h1>
                                            <div class="content">
                                                <div class="rating">
                                                    <div class="stars"></div>
                                                    <!-- <a href="" class="mini-text">2.251 reviews</a> -->
                                                    <a href="" class="add-review mini-text">Add Your Review</a>
                                                </div>
                                                <div class="stock-sku">
                                                    <span class="available">In Stock</span>
                                                    <span class="sku mini-text"><?php echo $pro->id ?></span>
                                                </div>
                                                <div class="price">
                                                    <span class="current"><?php echo number_format($pro->price,0,',','.') ?> vnd</span>
                                                    <!-- <span class="normal">$119.90</span> -->
                                                </div>
                                                <!-- <div class="colors">
                                                    <p>Color</p>
                                                    <div class="variant">
                                                        <form action="">
                                                            <p>
                                                                <input name="color" id="cogrey" type="radio">
                                                                <label for="cogrey" class="circle"></label>
                                                            </p>
                                                            <p>
                                                                <input name="color" id="coblue" type="radio">
                                                                <label for="coblue" class="circle"></label>
                                                            </p>
                                                            <p>
                                                                <input name="color" id="cogree" type="radio">
                                                                <label for="cogree" class="circle"></label>
                                                            </p>
                                                        </form>
                                                    </div>
                                                </div> -->
                                                <form action="<?php echo base_url('add-to-cart')  ?>" method="post">
                                                    <div class="actions">
                                                        <div class="qty-control flexitem">
                                                            <input type="hidden" value="<?php echo $pro->id ?>" name="product_id">
                                                            <input type="text" min="1" value="1" name="quantity" >
                                                        </div>
                                                        <div class="button-cart">
                                                            <button type="submit" class="primary-button">Add to cart</button>
                                                        </div>
                                                        <div class="wish-share">
                                                            <ul class="flexitem second-links">
                                                                <li>
                                                                    <a href="">
                                                                        <span class="icon-large">
                                                                            <i class="ri-heart-line"></i>
                                                                        </span>
                                                                        <span>Wishlist</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="">
                                                                        <span class="icon-large">
                                                                            <i class="ri-share-line"></i>
                                                                        </span>
                                                                        <span>Share</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </form>

                                                <div class="description collapse">
                                                    <ul>
                                                        <li class="has-child expand">
                                                            <a href="" class="icon-small">Information</a>
                                                            <ul class="content">
                                                                <li><span>Brands</span> <span><?php echo $pro->tenthuonghieu ?></span></li>
                                                                <li><span>Category</span> <span><?php echo $pro->tendanhmuc ?></span></li>
                                                            </ul>
                                                        </li>
                                                        
                                                        <li class="has-child">
                                                            <a href="" class="icon-small">Product Details</a>
                                                            <div class="content">
                                                                <p><?php echo $pro->description ?></p>
                                                            </div>
                                                        </li>
                                                        
                                                        <li class="has-child expand">
                                                            <a href="" class="icon-small">Reviews
                                                                <span class="mini-text">2.2k</span>
                                                            </a>
                                                            <div class="content">
                                                                <div class="reviews">
                                                                    <h4>Customers Reviews</h4>
                                                                    <div class="reivew-block">
                                                                        <div class="review-block-head">
                                                                            <div class="flexitem">
                                                                                <span class="rate-sum">4.9</span>
                                                                                <span>2,251 Revies</span>
                                                                            </div>
                                                                            <a href="#review-form"
                                                                                class="secondary-button">Write
                                                                                review</a>
                                                                        </div>
                                                                        <div class="review-block-body">
                                                                            <ul>
                                                                                <?php
                                                                                    foreach($list_comments as $comments){
                                                                                ?>
                                                                                    <li class="item">
                                                                                        <div class="review-form">
                                                                                            <p class="person">Review by
                                                                                                <?php echo $comments->name ?></p>
                                                                                            <p class="mini-text"> <?php echo $comments->dated ?>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="review-rating rating">
                                                                                            <div class="stars"></div>
                                                                                        </div>
                                                                                        <div class="review-title">
                                                                                            <p> <?php echo $comments->summary ?></p>
                                                                                        </div>
                                                                                        <div class="review-text">
                                                                                            <p> <?php echo $comments->review ?></p>
                                                                                        </div>
                                                                                    </li>
                                                                                <?php
                                                                                    }
                                                                                ?>
                                                                                
                                                                            </ul>
                                                                            <div class="second-links">
                                                                                <a href="" class="view-all">
                                                                                    View all reviews
                                                                                    <i class="ri-arrow-right-line"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div id="review-rorm" class="review-form">
                                                                            <h4>Write a review</h4>
                                                                            <div class="rating">
                                                                                <p>Are you satsfied enough?</p>
                                                                                <div class="rate-this">
                                                                                    <input type="radio" name="rating"
                                                                                        id="star5">
                                                                                    <label for="star5" class="stars">
                                                                                </div>
                                                                            </div>
                                                                            <form action="<?php echo base_url('comment-send') ?>" method="post" >
                                                                                <p>
                                                                                    <label>Name</label>
                                                                                    <input name="name_comment" class="name_comment" type="text" require>
                                                                                    <input value="<?php echo $pro->id ?>" type="hidden" name="product_id_comment" class="name_comment" type="text" require>
                                                                                </p>
                                                                                <p>
                                                                                    <label>Summary</label>
                                                                                    <input name="summary" class="summary" type="text" require>
                                                                                </p>
                                                                                <p>
                                                                                    <label>Review</label>
                                                                                    <textarea name="comment" class="comment" cols="30" require rows="10"></textarea>
                                                                                </p>
                                                                                <p>
                                                                                    <button type="submit" class="primary-button write-comment">Submit Review</button>
                                                                                </p>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>

            <!-- -------------------------------------
            ----------------------------------------------- -->
            <div class="features">
                <div class="container">
                    <div class="wrapper">
                        <div class="column">
                            <div class="sectop flexitem">
                                <h2><span class="circle"></span><span>Related Products</span></h2>
                                <div class="second-links">
                                    <a href="#" class="view-all">
                                        View all<i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="products main flexwrap">
                                <!-- <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="">
                                                <img src="d2020073114315712.jpg" alt="">
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
                                        <h3><a href="#">Under Amour Men's Tech</a></h3>
                                        <div class="price">
                                            <span class="current">$56.50</span>
                                            <span class="normal mini-text">$75.50</span>
                                        </div>
                                    </div>
                                </div> -->
                               
                            </div>
                            <!-- feaetured product -->
                        </div>
                    </div>
                </div>
            </div>

             
        </main>