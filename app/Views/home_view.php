<?= $this->extend('base'); ?>

<?= $this->section('content'); ?>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url(); ?>/public/assets/images/slider/pillar-candles.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block position-absolute bottom-0 start-0">
                <h5>Piler Candales</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url(); ?>/public/assets/images/slider/votive-candles.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block position-absolute bottom-0 start-0">
                <h5>Votive Candales</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url(); ?>/public/assets/images/slider/tea-light-candles.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block position-absolute bottom-0 start-0">
                <h5>Tea Light Candales</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url(); ?>/public/assets/images/slider/floating-candles.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block position-absolute bottom-0 start-0">
                <h5>Floating Candales</h5>
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
        <div class="row pl-0">
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
                <div id="about-section" class="py-3 py-md-5">
                    <div class="container">
                        <h2 class="text-center py-2">Welcome to Maya's Aromatics</h2>

                        <p>
                            We specialize in making eco-friendly, hand-made and scented soy wax candles, beeswax candles, aromatherapy candles, pillar candles, jar candles, votive candles, gel candles, hurricane candles and tealight candles.
                        </p>

                        <p>
                            We also make customised designer and artisanal candles as per your likes and preferences. So, if you have any particular candle on your mind, do let us know!
                        </p>
                        <p>
                            Be it to create a cosy and intimate ambience or keeping away bugs and eliminating odours, our wide range of aromatic candles offer a choice for all. They make perfect gifts for yourself and your loved ones too!
                        </p>
                    </div>
                </div>

                <!-- <div id="home-products" class="py-3 py-md-5 bg-light">
                    <div class="container">
                        <h2 class="text-center py-3">Our Porducts</h2>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="text-center">
                                    <img src="<?= base_url(); ?>/public/assets/images/products/image-1.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center">
                                    <img src="<?= base_url(); ?>/public/assets/images/products/image--2.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center">
                                    <img src="<?= base_url(); ?>/public/assets/images/products/image-3.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center">
                                    <img src="<?= base_url(); ?>/public/assets/images/products/image-4.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center">
                                    <img src="<?= base_url(); ?>/public/assets/images/products/image-5.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center">
                                    <img src="<?= base_url(); ?>/public/assets/images/products/image-6.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>