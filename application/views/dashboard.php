<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
        .gradien-bg {
            background: linear-gradient(to right, #4998f1, #2c5d93);
            transition: 5s;
        }

        .gradien-bg:hover {
            background: linear-gradient(to right, #2c5d93, #4998f1);
        }
    </style>

    <title><?= $title ?></title>
</head>

<body>
    <div class="container">
        <div class="jumbotron mt-2 text-center text-white gradien-bg">
            <h1>Selamat datang di</h1>
            <h1>EOPS SMK PGRI PESANGGARAN</h1>
            <h3>Silahkan pilih anda ingin login sebagai apa,</h3>
            <h3>Anda akan di alihkan ke menu login sesuai pilihan anda</h3>
        </div>
        <div class="card-deck">
            <div class="card">
                <img src="https://ldtschool.in/images/contacts.jpg" class="card-img-top" alt="https://ldtschool.in/images/contacts.jpg">
                <div class="card-body">
                    <h5 class="card-title">Admin</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, animi officiis asperiores fugiat eveniet nemo commodi, adipisci, similique nostrum expedita.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">
                        <a href="<?= base_url('auth/admin') ?>" class="btn btn-primary btn-block">Admin</a>
                    </small>
                </div>
            </div>
            <div class="card">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/002/184/665/small_2x/teacher-s-day-concept-design-free-vector.jpg" class="card-img-top" alt="https://static.vecteezy.com/system/resources/thumbnails/002/184/665/small_2x/teacher-s-day-concept-design-free-vector.jpg">
                <div class="card-body">
                    <h5 class="card-title">Wali Kelas</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, animi officiis asperiores fugiat eveniet nemo commodi, adipisci, similique nostrum expedita.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">
                        <a href="<?= base_url('auth/wali_kelas') ?>" class="btn btn-primary btn-block">Wali Kelas</a>
                    </small>
                </div>
            </div>
            <div class="card">
                <img src="https://www.kibrispdr.org/dwn/8/siswa-sma-vector.jpg" class="card-img-top" alt="https://www.kibrispdr.org/dwn/8/siswa-sma-vector.jpg">
                <div class="card-body">
                    <h5 class="card-title">Siswa</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, animi officiis asperiores fugiat eveniet nemo commodi, adipisci, similique nostrum expedita.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">
                        <a href="<?= base_url('auth/siswa') ?>" class="btn btn-primary btn-block">Siswa</a>
                    </small>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>