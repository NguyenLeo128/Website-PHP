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
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Status</th>
                        <th scope="col">Manage</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($order as $key => $order){
                    ?>
                    <tr>
                        <th scope="row"><?php echo $key ?></th>
                        <td><?php echo $order->order_code ?></td>
                        <td><?php echo $order->name ?></td>
                        <td><?php echo $order->phone ?></td>
                        <td><?php echo $order->address ?></td>
                        
                        <td>
                            <?php 
                                if($order->status == 1){
                                    echo '<span class="text-warning">Đang chờ xử lý</span>';
                                }elseif($order->status == 2){
                                    echo '<span class="text-success">Đã giao hàng</span>';
                                }else{
                                    echo '<span class="text-danger">Đã hủy</span>';
                                }
                            ?>
                        </td>
                        <td>
                            <a onclick="return confirm('Are you sure?')" href="<?php echo base_url('order/detele_order/'.$order->order_code); ?>" class="btn btn-danger">Delete</a>
                            <a href="<?php echo base_url('order/view/'.$order->order_code); ?>" class="btn btn-warning">Views</a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>