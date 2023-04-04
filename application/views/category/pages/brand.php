<main>
            <div class="single-category">
                <div class="container">
                    <div class="wrapper">
                        <div class="column">
                            <div class="holder">
                                <div class="row sidebar">
                                    <div class="filter">
                                        <div class="filter-block">
                                            <h4>Category</h4>
                                            <ul>
                                                <?php 
                                                foreach($category as $key => $cate){
                                                    ?>
                                                
                                                    <li>
                                                        <a href="<?php echo base_url('danh-muc/'.$cate->id.'/'.$cate->slug)?>">
                                                        <?php echo $cate->title ?>
                                                        </a>
                                                    </li>
                                                <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                        <div class="filter-block">
                                            <h4>Activity</h4>
                                            <ul>
                                            <?php 
                                                foreach($brand as $key => $brand){
                                                    ?>
                                                
                                                    <li>
                                                        <a href="<?php echo base_url('thuong-hieu/'.$brand->id.'/'.$brand->slug)?>">
                                                        <?php echo $brand->title ?>
                                                        </a>
                                                    </li>
                                                <?php
                                                }
                                            ?>
                                            </ul>
                                        </div>
                                        <div class="filter-block pricing">
                                            <h4>Price</h4>
                                            <div class="byprice">
                                                <div class="range-track">
                                                    <input type="range" value="25000" min="0" max="100000">
                                                </div>
                                                <div class="price-range">
                                                    <span class="price-form">$50</span>
                                                    <span class="price-to">$500</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="section">
                                    <div class="row">
                                        <div class="cat-head">
                                            <div class="breadcrumb">
                                                <ul class="flexitem">
                                                    <li><a href="">Home</a></li>
                                                    <li><?php echo $title ?></li>
                                                </ul>
                                            </div>
                                            <div class="page-title">
                                                <h1><?php echo $title ?></h1>
                                            </div>
                                            <div class="cat-navigation flexitem">
                                                <div class="item-filter desktop-hide">
                                                    <a href="#" class="filter-trigger label">
                                                        <i class="ri-menu-2-line ri-2x"></i>
                                                        <span>Filter</span>
                                                    </a>
                                                </div>
                                                <div class="item-sortir">
                                                    <div class="label">
                                                        <span class="mobile-hide">Sort by default</span>
                                                        <div class="desktop-hide">Default</div>
                                                        <i class="ri-arrow-down-s-line"></i>
                                                    </div>
                                                    <ul>
                                                        <li>Default</li>
                                                        <li>Product Name</li>
                                                        <li>Price</li>
                                                        <li>Brand</li>
                                                    </ul>
                                                </div>
                                                <div class="item-perpage mobile-hide">
                                                    <div class="label">Items 10 per page</div>
                                                    <div class="desktop-hide">10</div>
                                                </div>
                                                <div class="item-options">
                                                    <div class="label">
                                                        <span class=" mobile-hide">Show 10 per page</span>
                                                        <div class="desktop-hide">10</div>
                                                        <i class="ri-arrow-down-s-line"></i>
                                                    </div>
                                                    <ul>
                                                        <li>10</li>
                                                        <li>20</li>
                                                        <li>30</li>
                                                        <li>ALL</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="products main flexwrap">
                                        <!-- Products Category -->
                                        <?php
                                            foreach($brand_product as $pro){
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
                                    <div class="load-more flexcenter">
                                        <a href="" class="secondary-button">Load more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






            
        </main>