<div class="container">
    <div class="card">
      <div class="card-header">
        Edit category
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

            <form action="<?php echo base_url('category/update/'.$category->id) ?>" method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input value="<?php echo $category->title ?>" type="text" name="title" class="form-control" id="slug" onkeyup="ChangeToSlug();">
                    <?php echo '<span class="text text-danger">' .form_error('title').'</span>' ?>  
                </div>
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Slug</label>
                    <input value="<?php echo $category->slug ?>" type="text" name="slug" class="form-control" id="convert_slug">
                    <?php echo '<span class="text text-danger">' .form_error('slug').'</span>'?>  
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <input value="<?php echo $category->description ?>" type="text" name="description" class="form-control" id="exampleInputPassword1">
                    <?php echo '<span class="text text-danger">' .form_error('description').'</span>'?>  
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control-file" id="exampleInputPassword1">
                    <img src="<?php echo base_url('uploads/category/'.$category->image) ?>" width="100px" height="100px" alt="">
                    <small><?php if(isset($error)){echo $error;} ?></small>
                </div>
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Status</label>
                    <select id="disabledSelect" name="status" class="form-select">
                        <?php
                            if($category->status == 1){
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