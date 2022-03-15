<?= $this->extend('base'); ?>

<?= $this->section('content'); ?>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url(); ?>/public/assets/images/slider/votive-candles.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block position-absolute bottom-0 start-0">
                <h5>Votive Candales</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url(); ?>/public/assets/images/slider/floating-candles.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block position-absolute bottom-0 start-0">
                <h5>Floating Candales</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url(); ?>/public/assets/images/slider/tea-light-candles.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block position-absolute bottom-0 start-0">
                <h5>Tea Light Candales</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url(); ?>/public/assets/images/slider/pillar-candles.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block position-absolute bottom-0 start-0">
                <h5>Piler Candales</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url(); ?>/public/assets/images/slider/jar-candles.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block position-absolute bottom-0 start-0">
                <h5>Jar Candales</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url(); ?>/public/assets/images/slider/gel-wax-candles.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block position-absolute bottom-0 start-0">
                <h5>Jar Candales</h5>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div id="divide">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <ul class="nav flex-column sticky-top">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>/about-us">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>/products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>/enquiry-form">Enquiry</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>/contact-us">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="my-3">
                    <form method="post" action="<?= base_url(); ?>/contact" class="p-3 bg-light shadow-sm">
                        <div class="form-group mb-3">
                            <!-- <label for="pwd">Name</label> -->
                            <input type="text" class="form-control" name="name" placeholder="Enter name" id="name">
                        </div>
                        <div class="form-group mb-3">
                            <!-- <label for="pwd">Country</label> -->
                            <input type="text" class="form-control" name="name" placeholder="Country" id="name">
                        </div>
                        <div class="form-group mb-3">
                            <!-- <label for="pwd">Address</label> -->
                            <input type="text" class="form-control" name="name" placeholder="Address" id="name">
                        </div>
                        <div class="form-group mb-3">
                            <!-- <label for="email">Email address:</label> -->
                            <input type="text" class="form-control" name="email" placeholder="Enter email" id="email">
                        </div>
                        <div class="form-group mb-3">
                            <!-- <label for="email">Mobile</label> -->
                            <input type="tel" class="form-control" name="phone" placeholder="Enter Phone No." id="mobile">
                        </div>

                        <div class="form-group mb-3">
                            <!-- <label for="email">Description</label> -->
                            <textarea class="form-control" id="msg" rows="4" placeholder="Enter Description"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary form-control">Submit</button>

                        <?= form_close(); ?>
                        <div class='pb-5'></div>
                </div>
            </div>
            <!-- <div class="col-md-3 align-self-end">
                <div class="text-center my-3">
                    <h2>Also Shop at </h2>
                    <div class="">
                        <a href="" class="text-decoration-none px-1"><img src="<?= base_url(); ?>/public/assets/images/amazon.png" alt="" class="img-fluid"></a>
                        <a href="" class="text-decoration-none px-1"><img src="<?= base_url(); ?>/public/assets/images/flipkart.png" alt="" class="img-fluid"></a>
                        <a href="" class="text-decoration-none px-1"><img src="<?= base_url(); ?>/public/assets/images/snapdeal.png" alt="" class="img-fluid"></a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<?= $this->endSection(); ?>