<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('front-end/css/style.css') ?> ">
    <!-- CSS về giá trị mặt định -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    
    <title><?= $this->config->config['pageTitle']?></title>
</head>

<body>
    <div id="page" class="site page-single">
        <header>
            <aside class="site-off desktop-hide">
                <div class="off-canvas">
                    <div class="canvas-head flexitem">
                        <div class="logo"><a href="/"><span class="circle"></span>.NN</a></div>
                        <a href="#" class="t-close flexcenter"><i class="ri-close-line"></i></a>
                    </div>
                    <div class="departments"></div>
                    <nav></nav>
                    <div class="thetop-nav"></div>
                </div>
            </aside>
            <div class="header-top mobile-hide">
                <div class="container">
                    <div class="wrapper flexitem">
                        <div class="left">
                            <ul class="flexitem main-links">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Featured Products</a></li>
                                <li><a href="#">Wishlist</a></li>
                                
                                
                            </ul>
                        </div>
                        <div class="right">
                            <ul class="flexitem main-links">
                                <?php
                                    if($this->session->userdata('loggedInCustomer')){
                                ?>
                                <li><a href="">Account: <?php echo $this->session->userdata('loggedInCustomer')['username'] ?></a></li>
                                <li><a href="<?php echo base_url('gio-hang') ?>">Order Tracking</a></li>
                                <li><a href="<?php echo base_url('checkout') ?>">Checkout</a></li>
                                <li><a href="<?php echo base_url('dang-xuat') ?>">Logout</a></li>
                                <?php
                                    }else{
                                ?>
                                <li><a href="<?php echo base_url('gio-hang') ?>">Order Tracking</a></li>
                                <li><a href="<?php echo base_url('dang-nhap') ?>">Sign Up</a></li>
                                <?php
                                    }
                                ?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top -->
            <div class="header-nav">
                <div class="container">
                    <div class="wrapper flexitem">
                        <a href="#" class="trigger desktop-hide"><span class="i ri-menu-2-line"></span></a>
                        <div class="left flexitem">
                            <div class="logo"><a href="/"><span class="circle"></span>.Store</a></div>
                            <nav class="mobile-hide">
                                <ul class="flexitem second-links">
                                    <li><a href="<?php echo base_url('/') ?>">Home</a></li>  
                                    <!-- <li>
                                        <a href="#">Sports
                                            <div class="fly-item"><span>New!</span></div>
                                        </a>
                                    </li> -->
                                </ul>
                            </nav>
                        </div>
                        <div class="right">
                            <ul class="flexitem second-links">
                                <li><a href="#">
                                        <div class="icon-large"><i class="ri-heart-line"></i></div>
                                        <div class="fly-item"><span class="item-number">0</span></div>
                                    </a></li>
                                    <li class="iscart">
                                    <a href="#">
                                        <div class="icon-large">
                                            <i class="ri-shopping-cart-line"></i>
                                            <!-- <div class="fly-item"><span class="item-number">0</span></div> -->
                                        </div>
                                        <div class="icon-text">
                                            <div class="mini-text">Total</div>
                                            <div class="cart-total"><?php echo $this->cart->format_number($this->cart->total(),0,',','.'); ?>vnd</div>
                                        </div>
                                    </a>
                                    
                                    <div class="mini-cart">
                                        <div class="content">
                                            <div class="cart-head">
                                                5 item in cart
                                            </div>
                                            <div class="cart-body">
                                            <?php
                                                if($this->cart->contents()){
                                            ?>
                                                <ul class="products mini">
                                                    <?php 
                                                    $subtotal = 0;
                                                    $total = 0;
                                                    foreach ($this->cart->contents() as $items){ 
                                                        $subtotal = $items['qty'] * $items['price'];
                                                        $total+=$subtotal;
                                                    ?>
                                                    <li class="item">
                                                        <div class="thumbnail object-cover">
                                                            <a href=""><img src="<?php echo base_url('uploads/product/'.$items['options']['image']) ?>" alt=""></a>
                                                        </div>
                                                        <div class="item-content">
                                                            <p><a href=""><?php echo $items['name'] ?></a></p>
                                                            <span class="price">
                                                                <span><?php echo number_format($items['price'],0,',','.') ?> vnd</span>
                                                                <span class="fly-item"><span><?php echo $items['qty'] ?></span></span>
                                                            </span>
                                                        </div>
                                                        <a href="" class="item-remove"><i class="ri-close-line"></i></a>
                                                    </li>
                                                    <?php
                                                        }
                                                    ?>
                                                    
                                                </ul>
                                            <?php
                                                }else{
                                                    ?>
                                                    <span>Bạn chưa có sản phẩm nào</span>
                                                    <?php
                                                }
                                            ?>
                                            </div>
                                            <div class="cart-footer">
                                                <div class="subtotal">
                                                    <p>Subtotal</p>
                                                    <p><strong><?php echo $this->cart->format_number($this->cart->total(),0,',','.'); ?>vnd</strong></p>
                                                </div>
                                                <div class="actions">
                                                    <a href="checkout" class="primary-button">Checkout</a>
                                                    <a href="gio-hang" class="secondary-button">View Cart</a>
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
            <!-- header nav -->
            <div class="header-main mobile-hide">
                <div class="container">
                    <div class="wrapper flexitem">
                        <div class="left">
                            <div class="dpt-cat">
                                <div class="dpt-head">
                                    <div class="main-text">All Departments</div>
                                    <div class="mini-text mobile-hide">Total 1059 Products</div>
                                    <span class="dpt-trigger mobile-hide">
                                        <i class="ri-menu-3-line ri-xl"></i>
                                    </span>
                                </div>
                                <div class="dpt-menu">
                                    <ul class="second-links">
                                            <?php 
                                            foreach($category as $key => $cate){
                                                ?>
                                            <li class="has-child beauty">
                                                <a href="<?php echo base_url('danh-muc/'.$cate->id.'/'.$cate->slug)?>">
                                                    <div class="icon-large"><i class="ri-bear-smile-line"></i></div>
                                                    <?php echo $cate->title ?>
                                                    <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                                </a>
                                                
                                            </li>
                                            <?php
                                            }
                                            ?>
                                            
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="search-box">
                                <form action="<?php echo base_url('tim-kiem') ?>" method="GET" class="search" >
                                    <span class="icon-large"><i class="ri-search-line"></i></span>
                                    <input type="search" name="keyword" placeholder="Search for products">
                                    <button type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-main -->
        </header>