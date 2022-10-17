<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web data mahasiswa</title>

    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>


<body>
    <!-- Image and text -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="../img/header/logo.png" width="3%" height="8%" class="d-inline-block" alt="">
            POLITEKNIK NEGERI BANDUNG
        </a>
    </nav>



    <div class="container">
        <?php echo view($content_view)?>
    </div>

    <footer class="jumbotron jumbotron-fluid mt-5 mb-0 text-light bg-dark">
        <div class="container text-center">Copyright &copy <?= Date('Y') ?> Tegar Faris Nurhakim</div>
    </footer>

    <!-- Jquery dan Bootsrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>