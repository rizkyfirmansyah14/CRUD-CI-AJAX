<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

    <title>Hello, world!</title>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>