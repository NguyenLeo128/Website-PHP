<div class="container">
    <div class="card">
      <div class="card-header">
        Create Brand
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
            <a href="<?php echo base_url('brand/list') ?>" class="btn btn-primary">List brand</a>
            <form action="<?php echo base_url('brand/store') ?>" method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="slug" onkeyup="ChangeToSlug();">
                    <?php echo '<span class="text text-danger">' .form_error('title').'</span>' ?>  
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Slug</label>
                    <input type="text" name="slug" class="form-control" id="convert_slug">
                    <?php echo '<span class="text text-danger">' .form_error('slug').'</span>'?>  
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputPassword1">
                    <?php echo '<span class="text text-danger">' .form_error('description').'</span>'?>  
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control-file" id="exampleInputPassword1">
                    <small><?php if(isset($error)){echo $error;} ?></small>
                </div>
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Status</label>
                    <select id="disabledSelect" name="status" class="form-select">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>