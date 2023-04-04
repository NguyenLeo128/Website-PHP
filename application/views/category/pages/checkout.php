<main>
            <div class="single-checkout">
                <div class="container">
                    <div class="wrapper">
                        <div class="checkout flexwrap">
                            <div class="item left styled">
                                <h1>Shipping Address</h1>
                                <form onsubmit="return confirm('Xác nhật đặc hàng')" action="<?php echo base_url('confirm-checkout') ?>" method="post">
                                    <p>
                                        <label for="email">Email Address <span></span></label>
                                        <input type="email" name="email" id="email" required>
                                    </p>
                                    <p>
                                        <label for="lname">Full Name <span></span></label>
                                        <input type="text" name="name" id="lname" required>
                                    </p>
                                    <p>
                                        <label for="address">Street Address <span></span></label>
                                        <input type="text" name="address" id="address" required>
                                    </p>
                                    <p>
                                        <label for="phone">phone number<span></span></label>
                                        <input type="text" name="phone" id="phone" required>
                                    </p>
                                    <p>

                                        <label for="shipping_method">Payments</label>
                                        <select name="shipping_method" id="shipping_method">
                                            <option value="cod">COD</option>
                                            <option value="vnpay">VNPAY</option>
                                        </select>
                                    </p>
                                    <p>
                                        <label>Order Notes (optional)</label>
                                        <textarea name="note" id="note" cols="30" rows="10"></textarea>
                                    </p>
                                    <!-- <p class="checkset">
                                        <input type="checkbox" id="anaccount">
                                        <label for="anaccount">Create an account</label>
                                    </p> -->
                                    <div class="primary-checkout">
                                        <!-- <div class="shipping-methods">
                                            <h2>Shipping Methods</h2>
                                            <p class="checkset">
                                                <input type="radio" checked>
                                                <label>$5.00 Flate Rate</label>
                                            </p>
                                        </div> -->
                                        <button type="submit" class="button primary-button">Place Oder</button>
                                    </div>
                                </form>
                                
                                
                            </div>
                            <div class="item right">
                                <h2>Oder Summary</h2>
                                
                                <div class="summary-oder is_sticky">
                                
                                    <div class="summary-totals">
                                        <ul>
                                            <li>
                                                <span>Subtotal</span>
                                                <strong><?php echo $this->cart->format_number($this->cart->total(),0,',','.'); ?></strong>
                                            </li>
                                            
                                                <span>ToTal</span>
                                                <strong><?php echo $this->cart->format_number($this->cart->total(),0,',','.'); ?></strong>
                                            </li>
                                        </ul>
                                    </div>
                                <?php
                                    if($this->cart->contents()){
                                ?>
                                <?php 
                                    $subtotal = 0;
                                    $total = 0;
                                    foreach ($this->cart->contents() as $items){ 
                                        $subtotal = $items['qty'] * $items['price'];
                                        $total+=$subtotal;
                                ?>
                                    <ul class="products mini">
                                        <li class="item">
                                            <div class="thumbnail object-cover">
                                                <img src="<?php echo base_url('uploads/product/'.$items['options']['image']) ?>" alt="">
                                            </div>
                                            <div class="item-content">
                                                <p><?php echo $items['name'] ?></p>
                                                <span class="price">
                                                    <strong><?php echo number_format($subtotal,0,',','.') ?> vnd</strong>
                                                    <span><?php echo $items['qty'] ?></span>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                <?php
                                    }
                                ?>
                                </div>
                                <?php
                                        }else{
                                            ?>
                                            <span>Bạn chưa có sản phẩm nào</span>
                                            <?php
                                        }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>