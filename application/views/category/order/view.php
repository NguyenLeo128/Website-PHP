<div class="container">
    <div class="card">
      <div class="card-header">
        List Order
      </div>
      <?php
            if($this->session->flashdata('success')){
                ?>
                <div class="alert alert-success"><?php echo $this->session->flashdata('success') ?></div>
                <?php
            }elseif($this->session->flashdata('error')){  
                ?>
                <div class="alert alert-danger"><?php echo $this->session->flashdata('error') ?></div>
                
                <?php
            }
        ?>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Order code</th>
                        <th scope="col">product Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($order_details as $key => $order){
                    ?>
                    <tr>
                        <th scope="row"><?php echo $key ?></th>
                        <td><?php echo $order->order_code ?></td>
                        <td><?php echo $order->title ?></td>
                        <td><?php echo $order->qty ?></td>
                        <td><?php echo number_format($order->price,0,',','.'); ?> vnd</td>
                        <td>
                            <?php 
                               echo number_format($order->qty * $order->price,0,',','.');
                            ?>
                        </td>
                        <td>
                            <img src="<?php echo base_url('uploads/product/'.$order->image) ?>" width="150px" height="150px" alt="">
                        </td>
                        
                    </tr>
                    <?php
                        }
                    ?>
                    <tr >
                        <select name="xulydonhang" id="" class="xulydonhang form-select">
                            <?php
                                if($order->order_status == 1){
                            ?>
                                <option selected id="<?php echo $order->order_code ?>" value="1">------Đã xử lý đơn hàng------</option>
                                <option id="<?php echo $order->order_code ?>" value="2">Đơn hàng đã được sử lý - đang giao hàng</option>
                                <option id="<?php echo $order->order_code ?>" value="3">Hủy đơn</option>
                            <?php
                                }elseif($order->order_status == 2){
                            ?>
                                <option id="<?php echo $order->order_code ?>" value="1">------Đã xử lý đơn hàng------</option>
                                <option selected id="<?php echo $order->order_code ?>" value="2">Đơn hàng đã được sử lý - đang giao hàng</option>
                                <option id="<?php echo $order->order_code ?>" value="3">Hủy đơn</option>
                            <?php
                                }else{
                            ?>
                                <option id="<?php echo $order->order_code ?>" value="1">------Đã xử lý đơn hàng------</option>
                                <option id="<?php echo $order->order_code ?>" value="2">Đơn hàng đã được sử lý - đang giao hàng</option>
                                <option selected id="<?php echo $order->order_code ?>" value="3">Hủy đơn</option>
                            <?php
                                }
                            ?>
                            
                        </select>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>