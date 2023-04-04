<div class="container">
    <div class="card">
      <div class="card-header">
        Edit Product
        </div>
        <div class="card-body">
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
            <a href="<?php echo base_url('product/list') ?>" class="btn btn-primary">List product</a>
            <form action="<?php echo base_url('product/update/'.$product->id) ?>" method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input value="<?php echo $product->title ?>" type="text" name="title" class="form-control" id="slug" onkeyup="ChangeToSlug();">
                    <?php echo '<span class="text text-danger">' .form_error('title').'</span>' ?>  
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Slug</label>
                    <input value="<?php echo $product->slug ?>" type="text" name="slug" class="form-control" id="convert_slug">
                    <?php echo '<span class="text text-danger">' .form_error('slug').'</span>'?>  
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <input value="<?php echo $product->description ?>" type="text" name="description" class="form-control" id="exampleInputPassword1">
                    <?php echo '<span class="text text-danger">' .form_error('description').'</span>'?>  
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Price</label>
                    <input value="<?php echo $product->price ?>" type="text" name="price" class="form-control" id="exampleInputPassword1">
                    <?php echo '<span class="text text-danger">' .form_error('price').'</span>'?>  
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Quantity</label>
                    <input value="<?php echo $product->quantity ?>" type="text" name="quantity" class="form-control" id="exampleInputPassword1">
                    <?php echo '<span class="text text-danger">' .form_error('quantity').'</span>'?>  
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control-file" id="exampleInputPassword1">
                    <img src="<?php echo base_url('uploads/product/'.$product->image) ?>" width="150px" height="150px" alt="">
                    <small><?php if(isset($error)){echo $error;} ?></small>
                </div>

                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Category</label>
                    <select id="disabledSelect" name="category_id" class="form-select">
                        <?php
                            foreach($category as $cate){
                        ?>
                        <option <?php echo $cate->id==$product->category_id ? 'selected' : '' ?> value="<?php echo $cate->id ?>"><?php echo $cate->title ?></option>

                        <?php
                            }
                        ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Brand</label>
                    <select id="disabledSelect" name="brand_id" class="form-select">
                        <?php
                            foreach($brand as $bra){
                        ?>
                        <option <?php echo $bra->id==$product->brand_id ? 'selected' : '' ?> value="<?php echo $bra->id ?>"><?php echo $bra->title ?></option>

                        <?php
                            }
                        ?>
                        
                    </select>
                </div>
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Status</label>
                    <select id="disabledSelect" name="status" class="form-select">
                        <?php
                            if($product->status == 1){
                        ?>
                            <option selected value="1">Active</option>
                            <option value="0">Inactive</option>
                        <?php   
                            }else{
                        ?>
                            <option value="1">Active</option>
                            <option selected value="0">Inactive</option>
                        <?php
                            }
                        ?>
                        
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>