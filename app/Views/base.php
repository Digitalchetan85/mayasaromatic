<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_URL(); ?>/public/assets/main.css">

    <link rel="stylesheet" href="<?= base_URL(); ?>/public/assets/t-slider/css/jquery.bxslider.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_URL(); ?>/public/assets/spot-light/style.css" />
    <link rel="stylesheet" href="<?= base_URL(); ?>/public/assets/spot-light/theme.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" href="./images/fav.png" />

    <title>Mayas Aromatic</title>
</head>

<body>
    <div id="main-body" class="bg-transparent">
        <div id="top-header">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4" class="d-none d-md-block custom-bg"></div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="<?= base_url(); ?>/public/assets/images/top-logo.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md-4" class="d-none d-md-block custom-bg"></div>
                </div>
            </div>
        </div>
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
                <div class="container">
                    <a class="navbar-brand d-block d-md-none" href="<?= base_url(); ?>/"><img src="<?= base_url(); ?>/public/assets/images/logo.png" alt="" class="img-fluid"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>/about-us">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>/products">Products</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>/gallery">Gallery</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>/enquiry-form">Enquiry</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link border-end-0" href="<?= base_url(); ?>/contact-us">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> -->

        <?= $this->renderSection("content"); ?>


        <div id="footer">
            <!-- <div class="container py-3">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <ul class="nav justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="<?= base_url(); ?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url(); ?>/about-us">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url(); ?>/products">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url(); ?>/gallery">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url(); ?>/enquiry-form">Enquiry</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link border-end-0" href="<?= base_url(); ?>/contact-us">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            <div class="container py-2">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="text-center">
                            <small class="text-center text-white">Copyright &copy; 2022 MAYAS AROMATICS. Design and Developed by <a href="https://logodesignerbangalore.com/" target="_blank" class="text-white text-decoration-none">LDCB</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js" integrity="sha512-cyAbuGborsD25bhT/uz++wPqrh5cqPh1ULJz4NSpN9ktWcA6Hnh9g+CWKeNx2R0fgQt+ybRXdabSBgYXkQTTmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script type="text/javascript" src="<?= base_URL(); ?>/public/assets/t-slider/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_URL(); ?>/public/assets/t-slider/js/jquery.bxslider.js"></script>
    <script src="<?= base_URL(); ?>/public/assets/spot-light/spotlight.bundle.js"></script>
</body>

</html>