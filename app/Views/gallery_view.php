<?= $this->extend('base'); ?>

<?= $this->section('content'); ?>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url(); ?>/public/assets/images/slider/gel-wax-candles.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block position-absolute bottom-0 start-0">
                <h5>Jar Candales</h5>
            </div>
        </div>
        <div class="carousel-item">
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
    <div class="container">
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
            <div class="col-md-10">
                <div id="gallery" class="py-3 py-md-5">
                    <div class="container">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <div class="spotlight-group text-center m-1">
                                    <a class="spotlight" href="<?= base_url(); ?>/public/assets/images/products/image-1.png"><img src="<?= base_url(); ?>/public/assets/images/products/image-1.png" alt="Location Map" class="thumb-1 rounded img-fluid" /></a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="spotlight-group text-center m-1">
                                    <a class="spotlight" href="<?= base_url(); ?>/public/assets/images/products/image--2.png"><img src="<?= base_url(); ?>/public/assets/images/products/image--2.png" alt="Location Map" class="thumb-1 rounded img-fluid" /></a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="spotlight-group text-center m-1">
                                    <a class="spotlight" href="<?= base_url(); ?>/public/assets/images/products/image-3.png"><img src="<?= base_url(); ?>/public/assets/images/products/image-3.png" alt="Location Map" class="thumb-1 rounded img-fluid" /></a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="spotlight-group text-center m-1">
                                    <a class="spotlight" href="<?= base_url(); ?>/public/assets/images/products/image-4.png"><img src="<?= base_url(); ?>/public/assets/images/products/image-4.png" alt="Location Map" class="thumb-1 rounded img-fluid" /></a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="spotlight-group text-center m-1">
                                    <a class="spotlight" href="<?= base_url(); ?>/public/assets/images/products/image-5.png"><img src="<?= base_url(); ?>/public/assets/images/products/image-5.png" alt="Location Map" class="thumb-1 rounded img-fluid" /></a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="spotlight-group text-center m-1">
                                    <a class="spotlight" href="<?= base_url(); ?>/public/assets/images/products/image-6.png"><img src="<?= base_url(); ?>/public/assets/images/products/image-6.png" alt="Location Map" class="thumb-1 rounded img-fluid" /></a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="spotlight-group text-center m-1">
                                    <a class="spotlight" href="<?= base_url(); ?>/public/assets/images/products/image-7.png"><img src="<?= base_url(); ?>/public/assets/images/products/image-7.png" alt="Location Map" class="thumb-1 rounded img-fluid" /></a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="spotlight-group text-center m-1">
                                    <a class="spotlight" href="<?= base_url(); ?>/public/assets/images/products/image-8.png"><img src="<?= base_url(); ?>/public/assets/images/products/image-8.png" alt="Location Map" class="thumb-1 rounded img-fluid" /></a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="spotlight-group text-center m-1">
                                    <a class="spotlight" href="<?= base_url(); ?>/public/assets/images/products/image-9.png"><img src="<?= base_url(); ?>/public/assets/images/products/image-9.png" alt="Location Map" class="thumb-1 rounded img-fluid" /></a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="spotlight-group text-center m-1">
                                    <a class="spotlight" href="<?= base_url(); ?>/public/assets/images/products/image-10.png"><img src="<?= base_url(); ?>/public/assets/images/products/image-10.png" alt="Location Map" class="thumb-1 rounded img-fluid" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>