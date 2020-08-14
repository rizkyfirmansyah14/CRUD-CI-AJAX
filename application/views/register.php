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
    <div class="container" style="position: absolute">
        <div class=shadows>

            <div>
                <img class="bg-right" src="img/toa.png" alt="">
                <h6 style="margin-bottom: 30px;" class="aspirasi text-center mt-2">Ayo Sampaikan Aspirasimu</h6>
                <h6 class="text-center" style="margin-bottom: 30px;">Please Login</h6>
                <form action="<?php echo site_url('sistem/simpan_data')?>" method="POST" enctype="multipart/form-data">
                    <input class="form-login mb-3" type="text" name="nama" placeholder="Nama lengkap "> <br>
                    <input class="form-login mb-3" type="email" name="email" placeholder="Email"> <br>
                    <input class="form-login mb-3" type="text" name="telp" placeholder="No. Telp"> <br>
                    <input class="form-login mb-3" type="text" name="username" placeholder="Username "> <br>
                    <input class="form-login mb-3" type="password" name="password" placeholder="Password "><br>
                    <button type="submit" class="btn btn-danger" data-toggle="modal"
                        data-target="#exampleModal">Daftar</button>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Attention</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Pendaftaran kamu Berhasil
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
