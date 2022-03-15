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
                <div id="products" class="">
                    <div class="container">
                        <div class="row py-3 g-3 py-md-4 justify-content-center">
                            <div class="col-md-6 align-self-center">
                                <div class="bg-light p-3 shadow-sm">
                                    <h3 class="py-3 text-center text-uppercase fw-bold">Tea light candles</h3>
                                    <div class="text-center">
                                        <img src="<?= base_url() ?>/public/assets/images/products/tea-light.png" alt="" class="img-fluid">
                                    </div>
                                    <p class="py-2">Tealight candles are a popular choice for accent lighting, perfect for providing that cosy, fairy-tale aesthetics to your space. <span id="dots">...</span><span id="more">They come in thin metal containers to ensure your candle doesn’t drip when lit. A totally inexpensive way to livening up your spaces!</span></p>

                                    <button onclick="myFunction()" id="myBtn" class="btn btn-outline-primary my-2">Read more</button>
                                    <a href="<?= base_url() ?>/order-form" class="btn btn-primary custom-button my-2 float-end">Order Now</a>
                                </div>
                            </div>
                            <div class="col-md-6 align-self-center">
                                <div class="bg-light p-3 shadow-sm">
                                    <h3 class="py-3 text-center text-uppercase fw-bold">Votive candles</h3>
                                    <div class="text-center">
                                        <img src="<?= base_url() ?>/public/assets/images/products/voltive.png" alt="" class="img-fluid">
                                    </div>
                                    <p class="py-2">Fancy a touch of classic and elegance? Votive candles are just what you need! These candles are available in different scents and colours, <span id="dots1">...</span><span id="more1">and generally require votive containers to enable them to burn safely. Votive candles are your best friends when you desire a cozy spa-like ambience or want to add a soft glow to that romantic dinner.</span></p>

                                    <button onclick="myFunction1()" id="myBtn1" class="btn btn-outline-primary my-2">Read more</button>
                                    <a href="<?= base_url() ?>/order-form" class="btn btn-primary custom-button my-2 float-end">Order Now</a>
                                </div>
                            </div>
                            <div class="col-md-6 align-self-center">
                                <div class="bg-light p-3 shadow-sm">
                                    <h3 class="py-3 text-center text-uppercase fw-bold">Jar candles</h3>
                                    <div class="text-center">
                                        <img src="<?= base_url() ?>/public/assets/images/products/jar.png" alt="" class="img-fluid">
                                    </div>
                                    <p class="py-2">Available in different sizes and scents, jar candles make for the best mood enhancers with a lasting burn time. <span id="dots2">...</span><span id="more2">They are hand poured using organic beeswax and soy wax.</span></p>

                                    <button onclick="myFunction2()" id="myBtn2" class="btn btn-outline-primary my-2">Read more</button>
                                    <a href="<?= base_url() ?>/order-form" class="btn btn-primary custom-button my-2 float-end">Order Now</a>
                                </div>
                            </div>
                            <!-- <div class="col-md-6 align-self-center">
                                <div class="bg-light p-3 shadow-sm">
                                    <h3 class="py-3 text-center text-uppercase fw-bold">Pillar candles</h3>
                                    <div class="text-center">
                                        <img src="<?= base_url() ?>/public/assets/images/products/pillar.png" alt="" class="img-fluid">
                                    </div>
                                    <p class="py-2">These candles float on water, making them such a magical sight! Go ahead and place them in your bathtubs, vases,  <span id="dots3">...</span><span id="more3">urulis and water containers designed for aesthetic purposes and create that beautiful calming aura. It is a meditative sight!</span></p>

                                    <button onclick="myFunction3()" id="myBtn3" class="btn btn-outline-primary my-2">Read more</button>
                                    <a href="<?= base_url() ?>/order-form" class="btn btn-primary custom-button my-2 float-end">Order Now</a>
                                </div>
                            </div> -->
                            <div class="col-md-6 align-self-center">
                                <div class="bg-light p-3 shadow-sm">
                                    <h3 class="py-3 text-center text-uppercase fw-bold">Pillar candles</h3>
                                    <div class="text-center">
                                        <img src="<?= base_url() ?>/public/assets/images/products/pillar.png" alt="" class="img-fluid">
                                    </div>
                                    <p class="py-2">Large and scented, pillar candles don’t require any containers because they don’t drip and have long burn <span id="dots4">...</span><span id="more4">time of over 40 to 90 hours! From brightening homes to staying aglow at weddings, pillar candles will never disappoint you.</span></p>

                                    <button onclick="myFunction4()" id="myBtn4" class="btn btn-outline-primary">Read more</button>
                                    <a href="<?= base_url() ?>/order-form" class="btn btn-primary custom-button my-2 float-end">Order Now</a>
                                </div>
                            </div>
                            <div class="col-md-6 align-self-center">
                                <div class="bg-light p-3 shadow-sm">
                                    <h3 class="py-3 text-center text-uppercase fw-bold">Gel-wax candles</h3>
                                    <div class="text-center">
                                        <img src="<?= base_url() ?>/public/assets/images/products/gel-wax.png" alt="" class="img-fluid">
                                    </div>
                                    <p class="py-2">Gel-wax candles are transparent or translucent and available in any colour and are used to make candles <span id="dots5">...</span><span id="more5">that can be considered ‘works of art’. They are available in so many beautiful and intricate designs, it can get hard to choose!</span></p>

                                    <button onclick="myFunction5()" id="myBtn5" class="btn btn-outline-primary">Read more</button>
                                    <a href="<?= base_url() ?>/order-form" class="btn btn-primary custom-button my-2 float-end">Order Now</a>
                                </div>
                            </div>
                            <div class="col-md-6 align-self-center">
                                <div class="bg-light p-3 shadow-sm">
                                    <h3 class="py-3 text-center text-uppercase fw-bold">Custom candles</h3>
                                    <div class="text-center">
                                        <img src="<?= base_url() ?>/public/assets/images/products/custom.png" alt="" class="img-fluid">
                                    </div>
                                    <p class="py-2">These candles bear a balance of various exquisite scents, and are <span id="dots6">...</span><span id="more6">made with 100% natural waxes like beeswax and soy wax. Luxury and Designer candles come with elegant containers, made of high quality materials and distinguished packaging. Just perfect for indulging in a luxurious experience!</span></p>

                                    <button onclick="myFunction6()" id="myBtn6" class="btn btn-outline-primary my-2">Read more</button>
                                    <a href="<?= base_url() ?>/order-form" class="btn btn-primary custom-button my-2 float-end">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Close";
            moreText.style.display = "inline";
        }
    }

    function myFunction1() {
        var dots = document.getElementById("dots1");
        var moreText = document.getElementById("more1");
        var btnText = document.getElementById("myBtn1");

        if (dots.style.display == "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read More";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Close";
            moreText.style.display = "inline";
        }
    }

    function myFunction2() {
        var dots = document.getElementById("dots2");
        var moreText = document.getElementById("more2");
        var btnText = document.getElementById("myBtn2");

        if (dots.style.display == "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read More";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Close";
            moreText.style.display = "inline";
        }
    }

    function myFunction3() {
        var dots = document.getElementById("dots3");
        var moreText = document.getElementById("more3");
        var btnText = document.getElementById("myBtn3");

        if (dots.style.display == "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read More";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Close";
            moreText.style.display = "inline";
        }
    }

    function myFunction4() {
        var dots = document.getElementById("dots4");
        var moreText = document.getElementById("more4");
        var btnText = document.getElementById("myBtn4");

        if (dots.style.display == "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read More";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Close";
            moreText.style.display = "inline";
        }
    }

    function myFunction5() {
        var dots = document.getElementById("dots5");
        var moreText = document.getElementById("more5");
        var btnText = document.getElementById("myBtn5");

        if (dots.style.display == "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read More";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Close";
            moreText.style.display = "inline";
        }
    }

    function myFunction6() {
        var dots = document.getElementById("dots6");
        var moreText = document.getElementById("more6");
        var btnText = document.getElementById("myBtn6");

        if (dots.style.display == "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read More";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Close";
            moreText.style.display = "inline";
        }
    }
</script>

<?= $this->endSection(); ?>