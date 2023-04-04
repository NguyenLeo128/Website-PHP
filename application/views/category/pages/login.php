<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo base_url('front-end/css/login_style.css') ?> ">
    <title>Login $ Register</title>
</head>

<body>
    <div class="container" id="container">
    
        <div class="form-container sign-up-container">
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
            <form action="<?php echo base_url('dang-ky') ?>" method="post">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="" class="social">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="" class="social">
                        <i class="fa-brands fa-google"></i>
                    </a>
                    <!-- <a href="" class="social">
                        <i class="fa-brands fa-facebook"></i>
                    </a> -->
                </div>
                <span>or use your email for registrantion</span>
                <input type="text" name="name" placeholder="Name">
                
                <input type="email" name="email" placeholder="Email">
                
                <input type="text" name="phone" placeholder="Phone">
                
                <input type="text" name="address" placeholder="Address">
                 
                <input type="password" name="password" placeholder="Password">
                 
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="<?php echo base_url('login-customer') ?>" method="post">
                <h1>Sign In</h1>
                <div class="social-container">
                    <a href="" class="social">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="" class="social">
                        <i class="fa-brands fa-google"></i>
                    </a>
                    <!-- <a href="" class="social">
                        <i class="fa-brands fa-facebook"></i>
                    </a> -->
                </div>
                <span>or use your account</span>
                <input type="email" name="email" placeholder="Email">
                <?php echo form_error('email');?> 
                <input type="password" name="password" placeholder="Password">
                <?php echo form_error('password');?> 
                <button>Sign Up</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome To FF!</h1>
                    <p>Please Subs asdfas</p>
                    <button class="press" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Welcome To FF!</h1>
                    <p>Please Subs asdfas</p>
                    <button class="press" id="signUp">Sign In</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        //front login
        const signUpButton = document.getElementById("signUp");
        const signInButton = document.getElementById("signIn");
        const container = document.getElementById("container");

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });
        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>
</body>

</html>