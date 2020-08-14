<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<style>
    body {
        background-image: url(img/23481.jpg);
        background-size: 100%;
        background-repeat: no-repeat;
    }

    .shadow {
        margin-top: 20%;
        margin-left: 13%;
        width: 70%;
        border: solid 1px rgb(255, 255, 255);
    }

    .navbar-brand img {
        width: 100px;
    }

    .navbar a {
        color: white;
        font-size: 15px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .custom-control {
        margin-left: 85px;
        margin-bottom: 10px;
    }

    .form-control {
        width: 80%;
        margin-bottom: 20px;
    }

    .custom-file {
        width: 80%;
        margin-bottom: 20px;

        margin-left: 77px;
    }

    .form-group {
        margin-left: 85px;
        margin-bottom: 10px;
    }

    hr.new4 {
        border: 1px solid rgb(255, 174, 0);
        width: 700px;
        margin-bottom: 30px;
    }

    p {
        margin-top: 10px;
        margin-left: 50px;
        color: azure;
    }

    .tombol {
        margin-left: 83%;
        margin-bottom: 20px;
    }

    h2 {
        text-align: center;
        color: white;
        margin-top: 10%;
    }

    h4 {
        text-align: center;
        color: white;
        margin-bottom: -90px;
    }

    hr.garis {
        color: white;
    }
</style>

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <a class="navbar-brand ml-5"><img src="img/toa.png" alt="">LAPOR !</a>
        <form class="form-inline">
            <button type="button" class="btn btn-light mr-3">Masuk</button>
            <button class="btn btn-outline-light my-1 my-sm-0 mr-5" type="submit">Daftar</button>
        </form>
    </nav>
    <!-- end navbar -->

    <!-- Form -->


    <div class="container">
        <h2>Layanan Aspirasi dan Pengaduan Online Rakyat</h2>
        <hr class="garis">
        <h4>Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</h4>
        <div class="shadow  mb-5 bg-white rounded">

            <nav class="navbar mb-4 navbar-dark bg-dark">
                <p> Untuk laporan terkait COVID-19, gunakan hashtag #CORONA dan pilih kategori CORONA</p>
            </nav>

            <form action="">

                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline1">Pengaduan</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline2">Aspirasi</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline3">Permintaan Informasi</label>
                </div>

                <hr class="new4">

                <input class="form-control mx-auto" type="text" placeholder="Ketikan Judul Laporan">

                <textarea class="form-control mx-auto" id="exampleFormControlTextarea1" rows="5"
                    placeholder="Ketikan Isi Laporan"></textarea>

                <input class="form-control mx-auto" type="text" placeholder="Ketikan Tanggal Kejadian">

                <select class="form-control mx-auto">
                    <option>Pilih Lokasi Kejadian</option>
                </select>

                <select class="form-control mx-auto">
                    <option>Pilih Instansi Kejadian</option>
                </select>

                <select class="form-control mx-auto">
                    <option>Pilih Kategori</option>
                </select>

                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>

                <div class="container">
                    <button type="button" class="tombol btn btn-danger">Lapor</button>
                </div>

            </form>


        </div>

    </div>

    <div class="jumbotron jumbotron-fluid mb-0 bg-danger">
        <div class="container">

        </div>
    </div>
</body>

</html>