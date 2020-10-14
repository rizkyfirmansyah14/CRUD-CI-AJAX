<!doctype html>
<html lang="en">

<head>

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

    <!-- head -->
    <?php $this->load->view("partials/head.php") ?>

    <title>Login</title>
</head>

<body style="overflow-y: hidden;">
    <div class="imgback">
        <img src="<?php echo base_url('img/bg-utama.jpg')?>" width="100%" style="position: absolute;">
    </div>
    <div class="container" style="position: absolute; margin-left: 120px;">
        <div class="shadow  bg-white rounded">
            <div class="row">
                <div class="col">
                    <img class="bg-left" src="<?php echo base_url('img/bg.jpg')?>" alt="">
                </div>
                <div class="col">
                    <img class="bg-right" src="<?php echo base_url('img/toa.png')?>" alt="">
                    <h6 style="margin-bottom: 30px;" class="aspirasi text-center mt-2">Ayo Sampaikan Aspirasimu</h6>
                    <h6 class="text-center" style="margin-bottom: 30px;">Please Login</h6>
                    <form action="<?php echo site_url('sistem/loginUser') ?>" method="POST">
                        <input class="form-login mb-3" type="username" name="username" placeholder="Email / Username ">
                        <br>
                        <input class="form-login mb-3" type="password" name="password" placeholder="Password ">

                        <br>
                        <button type="submit" class="btn btn-danger">Sign-In</button><br>
                    </form>
                    <hr>
                    <div>
                        <a class="link-form" href="<?php echo site_url('sistem/daftar');?>">
                            <p>Don't have a account ? <span class="font-weight-bold text-center">CLICK
                                    HERE</span></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

    <!-- Script -->
    <?php $this->load->view("partials/footer.php") ?>

</html>