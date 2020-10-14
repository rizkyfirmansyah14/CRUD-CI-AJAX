<!doctype html>
<html lang="en">

<head>

     <!-- css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

    <!-- head -->
    <?php $this->load->view("partials/head.php") ?>

    <title>Register</title>

</head>


<body style="overflow-y: hidden;">
    <div class="imgback">
        <img src="<?php echo base_url('img/bg-utama.jpg')?>" width="100%" style="position: absolute;">
    </div>
    <div class="container" style="position: absolute">
        <div class=shadows>

            <div>
                <img class="bg-right" src="<?php echo base_url('img/toa.png')?>" alt="">
                <h6 style="margin-bottom: 30px;" class="aspirasi text-center mt-2">Ayo Sampaikan Aspirasimu</h6>
                <h6 class="text-center" style="margin-bottom: 30px;">Please Login</h6>
                <form id="formtambahdata">
                    <input class="form-login mb-3" type="text" name="nama" id="nama" placeholder="Nama lengkap "> <br>
                    <input class="form-login mb-3" type="email" name="email" id="email" placeholder="Email"> <br>
                    <input class="form-login mb-3" type="text" name="telp" id="telp" placeholder="No. Telp"> <br>
                    <input class="form-login mb-3" type="text" name="username" id="username" placeholder="Username "> <br>
                    <input class="form-login mb-3" type="password" name="password" id="password" placeholder="Password "><br>
                    <input type="hidden" name="action" class="btn btn-success" value="Add" />
                    <button type="submit" class="btn btn-danger" value="Add">Daftar</button>
                </form>
                <br>
                <hr>
                <div>
                    <a class="link-form" href="<?php echo site_url('sistem/index');?>">
                        <p>You have a account ? <span class="font-weight-bold text-center">CLUCK HERE</span></p>
                    </a>
                </div>
            </div>
        </div>
    </div>



   
</body>

    <!-- Script -->
    <?php $this->load->view("partials/footer.php") ?>

    <!-- Ajax -->
    <?php $this->load->view("partials/ajax.php") ?>

</html>
