<?= $this->extend('base'); ?>

<?= $this->section('content'); ?>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
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
            <img src="<?= base_url(); ?>/public/assets/images/slider/votive-candles.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block position-absolute bottom-0 start-0">
                <h5>Votive Candales</h5>
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
            <div class="col-md-10">
                <div id="contact" class="pt-5 pb-5">
                    <section>
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="custom-margin">
                                        <h2>Maya's Aromatics</h2>
                                        <address class="my-3">
                                            <i class="fas fa-home "> </i> No.304, 5th A Main, 2nd Block, <br>
                                            HRBR Layout, Kalyan Nagar,<br>
                                            Bangalore-560043 <br><br>
                                        </address>
                                        <a class="text-dark text-decoration-none" href="tel:09448928942"><i class="fas fa-phone-volume"></i> +91 94489 28942</a>
                                        <br>

                                        <a class="text-dark text-decoration-none" href="mailto:mayasaromatics@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> mayasaromatics@gmail.com
                                        </a></br>

                                        <a class="text-dark text-decoration-none" href="https://www.facebook.com/MayaAromatics" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i> facebook.com/Maya's Aromatics
                                        </a></br>
                                        <a class="text-dark text-decoration-none" href="https://www.instagram.com/mayasaromatics/"><i class="fab fa-instagram" aria-hidden="true"></i> instagram.com/@mayasaromatics
                                        </a></br>
                                        <a class="text-dark text-decoration-none" href=""><i class="fab fa-whatsapp" aria-hidden="true"></i> +91 94489 28942
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- <div id="map">
        <div class="conainer">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.9441497186763!2d77.55101731482338!3d13.102724690769978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae23162d3aed77%3A0x3162aa23d4ce2c7d!2sCafe%20Ranch!5e0!3m2!1sen!2sin!4v1615904455559!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div> -->



<?= $this->endSection(); ?>