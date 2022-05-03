<!DOCTYPE html>
<html lang="en">

<head>
    @include('include.inc-header')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>

<body>


    <div class="fixed-top">
        <div class=" bg-main ">
            <div class="container ">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Toggler" aria-controls="Toggler" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="Toggler">
                        <a class="navbar-brand" href="#">
                            <img src="/img/HOME/PNG/logo.png" width="90%" />
                        </a>
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link font-weight-bold text-mainblue " href="#">หน้าหลัก </span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold text-mainblue" href="">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold text-mainblue" href="#">OUR PRODUCTS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold text-mainblue" href="#">NEWS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold text-mainblue" href="#">CONTACT US</a>
                            </li>
                           
                                <a class="nav-link font-weight-bold text-mainblue" href="https://www.duckhams.com/"><img src="/img/HOME/PNG/icon 5.png" width="15px" /> GLOBAL</a>
                          
                        </ul>
                    </div>

                </nav>
            </div>
        </div>

        <div class="bg-mainblue">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-mainblue text-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarToggler">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                          
                               <a href="https://www.facebook.com/duckhamsoils/" style="margin-top:5px"><i class="fab fa-facebook" style="font-size: 30px;margin: 0 10px 0 10px;color:#ffffff;"></i></a> 
                          
                           
                               <a href="https://www.instagram.com/accounts/login/?next=/duckhamsoils/"> <i class="fab fa-instagram" style="font-size: 35px;margin: 0 10px 0 10px;color:#ffffff;"></i></a>
                           
                            <li class="nav-item">
                                <i class="fab fa-line" style="font-size: 35px;margin: 0 10px 0 10px;"></i>
                            </li>
                            <li class="nav-item">
                                <i class="fab fa-youtube" style="font-size: 35px;margin: 0 10px 0 10px;"></i>
                            </li>

                        </ul>
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <form class="form-inline">
                                <input class="form-control mr-sm-2" style="width: 450px;" type="search" placeholder="SEARCH YOUR OIL" aria-label="Search">

                            </form>

                            <a href="{{ url('/') }}">
                                <img src="/img/HOME/PNG/icon7.png" width="50px" class="p-2" />
                            </a>



                            <a href="{{ url('/th') }}">
                                <img src="/img/HOME/PNG/icon6.png" width="50px" class="p-2" />
                            </a>

                        </ul>
                    </div>

                </nav>
            </div>
        </div>
    </div>

    <div class="image-banner" style="margin-top: 110px;">
    <img src="/img/HOME/JPEG/BG.1.jpg" width="100%" />
        <!-- <img src="/public/img/HOME/JPEG/BG.1.jpg" class="w-100" /> -->
        <!-- <img src="/img/HOME/JPEG/BGbg.png" class="w-100" /> -->
        <div class="centered">
            <button class="bg-main border-0 bbb">
                <a class="text-mainblue font-weight-bold" style="font-size: 20px;">READ MORE</a>
            </button>
        </div>
    </div>

    <!-- <section>
            <img src="/img/Home/PNG/Mask Group 131.png" class="img-scroll" alt="" id="img">
            </section> -->

    <div>
        <div class="bg-main "> </div>
        <h5 class="text-center font-weight-bold text-mainblue big-border " style="font-size: 7vw;margin-top:100px;">KEEP YOU MOVING</h5>
        <h5 class="text-center font-weight-bold text-mainblue bg-main" style="font-size: 2vw;margin-bottom:100px;">WE ARE DUCKHAMS. WE KEEP YOU MOCING.</h5>
        <div class="bg-main "> </div>
    </div>


    <div class="image-banner">
    <img src="/img/HOME/JPEG/BG.png" width="100%" />
        <!-- <img src="/public/img/HOME/JPEG/BG.png" class="w-100" /> -->
        <!-- <img src="/img/Home/JPEG/BG.jpg" class="w-100" /> -->
        <div class="lefted">
            <h1 class="font-weight-bold text-main" style="font-size: 5vw;line-height: 1;">WE AER</h1>
            <h1 class="font-weight-bold text-main" style="font-size: 5vw;line-height: 1;">DUCKHAMS.</h1>
            <h1 class="font-weight-bold" style="font-size: 5vw;line-height: 1;">A BLEND OF</h1>
            <h1 class="font-weight-bold" style="font-size: 5vw;line-height: 1;">INNOVATION</h1>
            <h1 class="font-weight-bold" style="font-size: 5vw;line-height: 1;">& QUALITY.</h1>
        </div>
        <div class="righted">
            <span class="mobile-xs-ver mobile-ver" style="font-size: 1vw;">We have drivers of innovation in the lubricants industry since 1899. <br />
                we are never standing still and put prople's needs first & create products<br />
                that give them freedom. We're friictionless, agile, and compulsive problem<br />
                solvers. The future we create is fuelled by passion.
            </span>
            <button class="bg-main border-0 bbb">
                    <a class="text-mainblue font-weight-bold" style="font-size: 1vw;">READ MORE</a>
                </button>
        </div>
    </div>
    <img src="/img/HOME/PNG/pattern.png" width="100%" />
    <!-- <img src="/img/Home/PNG/pattern.png" class="w-100" /> -->
    <div class="" style="margin: 80px;">
        <div class="row">
            <div class="col"></div>
            <div class="col-3" style="font-size: 3vw;">
                <div class="row">
                    <div class="col"><span class="text-mainblue font-weight-bold">OUR</span></div>
                    <div class="col bg-main"></div>
                </div>

            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-3" style="font-size: 3vw;">
                <div class="row">
                    <div class="col bg-main"></div>
                    <div class="col "><span class="text-mainblue font-weight-bold">PRODUCTS</span></div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <div style="background-color: #ebebeb;">
        <div class="bg-mainblue py-4">
            <ul class="nav d-flex justify-content-center" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active aaa" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">DIESEL ENGINE OIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link aaa" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">PASSENGER CAR MOTOR OIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link aaa" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">MOTORCYCLE OIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link aaa" id="gaer-tab" data-toggle="tab" href="#gaer" role="tab" aria-controls="gaer" aria-selected="false">GEAR OIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link aaa" id="specialty-tab" data-toggle="tab" href="#specialty" role="tab" aria-controls="specialty" aria-selected="false">SPECIALTY PRODUCT & INDUSTRIAL</a>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="myTabContent" style="background-color: #ebebeb;">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="container my-5 text-center">
                    <div class="owl-carousel">
                        <div><img src="/img/Product/DEO/img_main/DEO_Gardcommonrail10w-30.png" style="width: 100%" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">DEO_Gardcommonrail10w-30</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/DEO/img_main/DEO-Gard15w-40.png" style="width: 100%;" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">DEO-Gard15w-40</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/DEO/img_main/DEO-Gard20w-50.png" style="width: 100%;" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">DEO-Gard20w-50</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/DEO/img_main/DEO-Offrailcommonrail10w-30.png" style="width: 100%;" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">DEO-Offrailcommonrail10w-30</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/DEO/img_main/DEO-Supersyncommonrail5w-30.png" style="width: 100%;" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">DEO-Supersyncommonrail5w</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/DEO/img_main/DEO-Speed15w-40.png" style="width: 100%;" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">DEO-Speed15w-40</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/DEO/img_main/DEO-Fleetol.png" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">DEO-Fleetol</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/DEO/img_main/DEO-Gardcommonrail10w-30-1L.png" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">DEO-Gardcommonrail10w-30-1L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/DEO/img_main/DEO-Offrailcommonrail10w-30-1L.png" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">DEO-Offrailcommonrail10w-30-1L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/DEO/img_main/DEO-Gardcommonrail10w-30-200L.png" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">DEO-Gardcommonrail10w-30-200L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container my-5 text-center">
                    <div class="owl-carousel">
                        <div><img src="/img/Product/PCMO/img_main/PCMO-Hypergradeplus.png" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">PCMO-Hypergradeplus</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/PCMO/img_main/PCMO-Qmotoroil15w-40.png" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">PCMO-Qmotoroil15w-40</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/PCMO/img_main/PCMO-Qmotoroil20w-50.png" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">PCMO-Qmotoroil20w-50</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/PCMO/img_main/PCMO-QS5w-30.png" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">PCMO-QS5w-30</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/PCMO/img_main/PCMO-QS5w-40.png" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">PCMO-QS5w-40</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/PCMO/img_main/PCMO-QXR10w-40.png" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">PCMO-QXR10w-40</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="container my-5 text-center">
                    <div class="owl-carousel">
                        <div><img src="/img/Product/MO/img_main/MO-Qtplus10w-30-0.8L.png" style="width: 100%" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">MO-Qtplus10w-30-0.8L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/MO/img_main/MO-Qtplus10w-30-1L.png" style="width: 100%;" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">MO-Qtplus10w-30-1L.</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/MO/img_main/MO-Qtplus-scooter.png" style="width: 100%;" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">MO-Qtplus-scooter</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/MO/img_main/MO-Qtracing10w-50.png" style="width: 100%;" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">MO-Qtracing10w-50</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="gaer" role="tabpanel" aria-labelledby="gaer-tab">
                <div class="container my-5 text-center">
                    <div class="owl-carousel">
                        <div><img src="/img/Product/GO/img_main/GO-D-Matic ATF DEXRON IIIH-1L.png" style="width: 100%" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">GO-D-Matic ATF DEXRON IIIH-1L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/GO/img_main/GO-D-Matic ATF DEXRON IIIH-5L.png" style="width: 100%;" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">GO-D-Matic ATF DEXRON IIIH-5L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/GO/img_main/GO-D-Matic ATF DEXRON VI.png" style="width: 100%;" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">GO-D-Matic ATF DEXRON VI</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/GO/img_main/GO-HYPOID SAE 80W-90 GL-5 (Limited Slip).png" style="width: 100%;" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">GO-HYPOID SAE 80W-90 GL-5 (Limited Slip)</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/GO/img_main/GO-HYPOID SAE 85W-140 GL-5 (Limited Slip).png" style="width: 100%;" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">GO-HYPOID SAE 85W-140 GL-5 (Limited Slip)</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/GO/img_main/GO-HYPOID SAE 90 GL-4-5L.png" style="width: 100%;" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">GO-HYPOID SAE 90 GL-4-5L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/GO/img_main/GO-HYPOID SAE 90 GL-4-18L.png" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">GO-HYPOID SAE 90 GL-4-18L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/GO/img_main/GO-HYPOID SAE 90 GL-4-200L.png" style="width: 100%" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">GO-HYPOID SAE 90 GL-4-200L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/GO/img_main/GO-HYPOID-S SAE 80W-90 GL-5-5L.png" style="width: 100%;" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">GO-HYPOID-S SAE 80W-90 GL-5-5L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/GO/img_main/GO-HYPOID-S SAE 80W-90 GL-5-18L.png" style="width: 100%;" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">GO-HYPOID-S SAE 80W-90 GL-5-18L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/GO/img_main/GO-HYPOID-S SAE 80W-90 GL-5-200L.png" style="width: 100%;" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">GO-HYPOID-S SAE 80W-90 GL-5-200L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/GO/img_main/GO-HYPOID-S SAE 85W-140 GL-5-5L.png" style="width: 100%;" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">GO-HYPOID-S SAE 85W-140 GL-5-5L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/GO/img_main/GO-HYPOID-S SAE 85W-140 GL-5-18L.png" style="width: 100%;" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">GO-HYPOID-S SAE 85W-140 GL-5-18L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/GO/img_main/GO-HYPOID-S SAE 85W-140 GL-5-200L.png" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">GO-HYPOID-S SAE 85W-140 GL-5-200L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/GO/img_main/GO-SYNCVT.png" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">GO-SYNCVT</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="specialty" role="tabpanel" aria-labelledby="specialty-tab">
                <div class="container my-5 text-center">
                    <div class="owl-carousel">
                        <div><img src="/img/Product/SPI/img_main/SPI-Brake Fluid DOT3.png" style="width: 100%" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">SPI-Brake Fluid DOT3</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/SPI/img_main/SPI-Brake Fluid DOT3-1L.png" style="width: 100%;" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">SPI-Brake Fluid DOT3-1L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/SPI/img_main/SPI-Brake Fluid DOT4.png" style="width: 100%;" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">SPI-Brake Fluid DOT4</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/SPI/img_main/SPI-Hydrolube Torque 7884.png" style="width: 100%;" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">SPI-Hydrolube Torque 7884</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/SPI/img_main/SPI-Radiator Coolant-Green.png" style="width: 100%;" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">SPI-Radiator Coolant-Gree</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/SPI/img_main/SPI-Radiator Coolant-Pink.png" style="width: 100%;" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">SPI-Radiator Coolant-Pink</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/SPI/img_main/SPI-Zircon Z32 Anti-Wear-18L.png" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">SPI-Zircon Z32 Anti-Wear-18L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/SPI/img_main/SPI-Zircon Z32 Anti-Wear-200L.png" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">SPI-Zircon Z32 Anti-Wear-200L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/SPI/img_main/SPI-Zircon Z46 Anti-Wear-18L.png" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">SPI-Zircon Z46 Anti-Wear-18L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/SPI/img_main/SPI-Zircon Z46 Anti-Wear-200L.png" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">SPI-Zircon Z46 Anti-Wear-200L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/SPI/img_main/SPI-Zircon Z68 Anti-Wear-18L.png" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">SPI-Zircon Z68 Anti-Wear-18L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/SPI/img_main/SPI-Zircon Z68 Anti-Wear-200L.png" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">SPI-Zircon Z68 Anti-Wear-200L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/SPI/img_main/SPI-Zircon Z100 Anti-Wear-18L.png" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">SPI-Zircon Z100 Anti-Wear-18L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                        <div><img src="/img/Product/SPI/img_main/SPI-Zircon Z100 Anti-Wear-200L.png" alt="">
                        <div class="card" style="margin-top: -20px;z-index:-1">
                                <div class="card-header bg-main">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-mainbule" style="font-size: 1vw;">SPI-Zircon Z100 Anti-Wear-200L</h5>
                                    
                                    <a href="#" class="btn bg-main text-mainbule" style="font-size: 10px;">VIEW PRODUCT</a>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="color:#ebebeb">margin bottom</div>
    </div>

    <!-- <img src="/public/img/Home/PNG/pattern.png" class="w-100" /> -->
    <img src="/img/HOME/PNG/pattern.png" width="100%" />
    <!-- <img src="/img/Home/PNG/pattern.png" class="w-100" /> -->
    <div class="" style="margin: 80px;">
        <div class="row">
            <div class="col"></div>
            <div class="col-3" style="font-size: 3vw;">
                <div class="row">
                    <div class="col"><span class="text-mainblue font-weight-bold">CONTACT</span></div>
                    <div class="col bg-main"></div>
                </div>

            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-3" style="font-size: 3vw;">
                <div class="row">
                    <div class="col bg-main"></div>
                    <div class="col d-flex justify-content-end"><span class="text-mainblue font-weight-bold">US</span></div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-7">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1937.3662848186168!2d100.54305270262505!3d13.794988499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29d110455a51f%3A0x163b900279f3ed69!2sDuckhams%20Energy%20Co.%2C%20Ltd.!5e0!3m2!1sth!2sth!4v1651067652824!5m2!1sth!2sth" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-5 p-5 bg-main">
            <div class="row">
                <div class="col">
                    <div class="mb-4">
                        <h5 class="text-mainblue font-weight-bold" style="font-size: 2vw;">HEAD OFFICE</h5>
                        <h5 class="text-mainblue " style="font-size: 1vw;">55, 33 Space Tower B, Floor 6, Room 601 Soi Pradiphat 17, Phadiphat Rpad, Phyathai, Phyathai, Bangkok 10400</h5>
                    </div>
                    <div class="mb-4">
                        <h5 class="text-mainblue font-weight-bold" style="font-size: 2vw">CALL US</h5>
                        <h5 class="text-mainblue " style="font-size: 1vw;">Sales: 097-926-3855</h5>
                        <h5 class="text-mainblue " style="font-size: 1vw;">Marketing:098-748-9460</h5>
                        <h5 class="text-mainblue " style="font-size: 1vw;">Accounting:065-989-1269</h5>
                    </div>
                    <div>
                        <h5 class="text-mainblue font-weight-bold" style="font-size: 2vw;">EMAIL US</h5>
                        <h5 class="text-mainblue " style="font-size: 1vw;">admin@duckhams.co.th</h5>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>

    <!-- <section >
       <img src="/img/Home/PNG/car-home.png" class="img-scroll2" id="car" />
    </section> -->

    <div class="box c">
        <img src="/img/HOME/PNG/car-home.png"  />
    </div>
    <img src="/img/HOME/PNG/pattern.png" width="100%" />

    <div class="bg-mainblue" style="padding: 100px 0 100px 0;">
        <footer class="container ">
            <div class="row pb-5">
                <div class="col-5">
                    <h5 class="text-main font-weight-bold" style="font-size: 15px;">STAY IN THE LOOP</h5>
                    <h5 class="text-light text-lowercase" style="font-size: 1vw;">STAY UP TO DATE ON NEW PRODUCTS, PROMOTIONS AND HELPFUL INFO.</h5>
                    <form class="form-inline ">
                        <div class="input-group w-100">
                            <input class=" form-control " type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-main text-dark border-0" id="basic-addon1">>></span>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col">
                    <h5 class="text-main font-weight-bold" style="font-size: 15px;">ABOUT US</h5>
                    <h5 class="text-light text-lowercase" style="font-size: 1vw;">DUCKHAMS TIMELINE</h5>
                    <h5 class="text-light text-lowercase" style="font-size: 1vw;">DUCKHAMS VALUES</h5>
                    <h5 class="text-light text-lowercase" style="font-size: 1vw;">DUCKHAMS FULL STORY</h5>
                </div>
                <div class="col">
                    <h5 class="text-main font-weight-bold" style="font-size: 15px;">OUR PRODUCTS</h5>
                    <h5 class="text-light text-lowercase" style="font-size: 1vw;">DISEL ENGINE OIL</h5>
                    <h5 class="text-light text-lowercase" style="font-size: 1vw;">PASSENGER CAR MOTOR OIL</h5>
                    <h5 class="text-light text-lowercase" style="font-size: 1vw;">MOTORCYCLE OIL</h5>
                    <h5 class="text-light text-lowercase" style="font-size: 1vw;">GRAR OIL</h5>
                    <h5 class="text-light text-lowercase" style="font-size: 1vw;">SPECIALTY PRODUCTS & INDUSTRY</h5>
                </div>
                <div class="col">
                    <h5 class="text-main font-weight-bold" style="font-size: 15px;">NEWS</h5>
                    <h5 class="text-light text-lowercase" style="font-size: 1vw;">NEW</h5>
                </div>
                <div class="col">
                    <h5 class="text-main font-weight-bold" style="font-size: 15px;">CONTACT US</h5>
                    <h5 class="text-light text-lowercase" style="font-size: 1vw;">CONTACT US</h5>
                    <h5 class="text-light text-lowercase" style="font-size: 1vw;">WORK WIRH US</h5>
                    <h5 class="text-light text-lowercase" style="font-size: 1vw;">Q & A</h5>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col">
                    <small class="text-light text-lowercase" style="font-size: 1vw;">© 2022 ALEXANDER DUCKHAM & CO.ALL RIGHTS RESERVED. | SITE BY AVERY&CO.</small>
                </div>
                <div class="col-5">
                    <div class="row">
                        <div class="col">
                            <small class="text-light text-lowercase" style="font-size: 1vw;">SITE MAPS</small>
                        </div>
                        <div class="col">
                            <small class="text-light text-lowercase" style="font-size: 1vw;">TERMS & CONDITIONS</small>
                        </div>
                        <div class="col">
                            <small class="text-light text-lowercase" style="font-size: 1vw;">PRIVACY POLICY</small>
                        </div>
                        <div class="col">
                            <small class="text-light text-lowercase" style="font-size: 1vw;">COOKIE POLICY</small>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
    </div>



    <script>
        $("li").click(
            function(event) {
                $('li').removeClass('active');
                $(this).addClass('active');
                event.preventDefault()
            }
        );
    </script>
    <script>
        var $owl = $('.owl-carousel');

        $owl.children().each(function(index) {
            $(this).attr('data-position', index); // NB: .attr() instead of .data()
        });

        $owl.owlCarousel({
            center: true,
            loop: true,
            responsive: {
                0: {
                    items: 2
                },

                600: {
                    items: 3
                },

                1024: {
                    items: 4
                },

                1366: {
                    items: 7
                }
            }
        });

        $(document).on('click', '.owl-item>div', function() {
            $owl.trigger('to.owl.carousel', $(this).data('position'));
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
<script>
    gsap.from("#img", {
        scrollTrigger : {
            scrub:0.9,
        },
        x: 500,
        y:-500,
    })

    gsap.to("#car", {
        scrollTrigger : {
            scrub:0.5,
        },
        x: "40vw",
        
    })

    // Or you can attach a tween or timeline to a ScrollTrigger later
const anim = gsap.to(".c", {
  x: 200,
  
  duration: 3
});

ScrollTrigger.create({
  trigger: ".c",
  animation: anim,
  // Uncomment these to see how they affect the ScrollTrigger
  // markers: true,
  // start: "top center",
  // end: "top 100px",
  // toggleClass: "active",
  // pin: true,
  // scrub: 1,
  // onUpdate: self => {
  //   console.log("progress:", self.progress.toFixed(3), "direction:", self.direction, "velocity", self.getVelocity());
  // }
});
</script>
</body>

</html>