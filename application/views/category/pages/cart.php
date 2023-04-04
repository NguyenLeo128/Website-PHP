<main>
            <div class="single-cart">
                <div class="container">
                    <div class="wrapper">
                        <div class="breadcrumb">
                            <ul class="flexitem">
                                <li><a href="">Home</a></li>
                                <li>Cart</li>
                            </ul>
                        </div>
                        <div class="page-title">
                            <h1>Shopping Cart</h1>
                        </div>
                        <div class="products one cart">
                            <div class="flexwrap">
                                <div action="" class="form-cart">
                                    <?php
                                        if($this->cart->contents()){
                                    ?>
                                           
                                    <div class="item">
                                        <table id="cart-table">
                                            <thead>
                                                <tr>
                                                    <th>Item</th>
                                                    <th>Price</th>
                                                    <th>Oty</th>
                                                    <th>Subtotal</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $subtotal = 0;
                                                $total = 0;
                                                foreach ($this->cart->contents() as $items){ 
                                                    $subtotal = $items['qty'] * $items['price'];
                                                    $total+=$subtotal;
                                                ?>
                                                    <tr>
                                                        <td class="flexitem">
                                                            <div class="thumbnail object-cover">
                                                                <a href="">
                                                                    <img src="<?php echo base_url('uploads/product/'.$items['options']['image']) ?>" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="content">
                                                                <strong><a href=""><?php echo $items['name'] ?></a></strong>
                                                                <p>Color: Gold</p>
                                                            </div>
                                                        </td>
                                                        <td><?php echo number_format($items['price'],0,',','.') ?> vnd</td>
                                                        <td>
                                                            <form action="<?php echo base_url('update-cart-item') ?>" method="post" >
                                                                <div class="qty-control flexitem">
                                                                    <input type="hidden" value="<?php echo $items['rowid'] ?>" name="rowid">
                                                                    <input type="number" min="1"  name="quantity" value="<?php echo $items['qty'] ?>" min="1">
                                                                    <input type="submit"  name="capnhap" style="width: 70px; background-color: #0dcaf0;" value="Update">
                                                                </div>
                                                            </form>
                                                        </td>
                                                        <td><?php echo number_format($subtotal,0,',','.') ?> vnd</td>
                                                        <td><a href="<?php echo base_url('delete-item/'.$items['rowid']) ?>" class="item-remove"><i class="ri-close-line"></i></a>
                                                        </td>
                                                    </tr>
                                                    
                                                <?php
                                                    }
                                                ?>
                                                
                                            </tbody>
                                            
                                        </table>
                                        <table>
                                            <tbody style="justify-content: center;">
                                                <tr>
                                                    <a href="<?php echo base_url('delete-all-cart') ?> " class="secondary-button">Delete all cart</a>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php
                                        }else{
                                            ?>
                                            <span>Bạn chưa có sản phẩm nào</span>
                                            <?php
                                        }
                                    ?>
                                </div>
                                <div class="cart-summary styled">
                                    <div class="item">
                                        <div class="coupon">
                                            <input type="text" placeholder="Enter coupon">
                                            <button>Apply</button>
                                        </div>
                                        
                                        <div class="cart-total">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th>Subtotal</th>
                                                        <td>
                                                        <?php echo $this->cart->format_number($this->cart->total(),0,',','.'); ?>vnd
                                                            
                                                        </td>
                                                    </tr>
                                                    <!-- <tr>
                                                        <th>Discount</th>
                                                        <td>-$100.00</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Shipping <span class="mini-text">(Flat)</span></th>
                                                        <td>$10.00</td>
                                                    </tr> -->
                                                    <tr class="grand-total">
                                                        <th>ToTal</th>
                                                        <td><strong><?php echo $this->cart->format_number($this->cart->total(),0,',','.'); ?>vnd
                                                            
                                                            </td></strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <a href="checkout" class="secondary-button">Checkout</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>