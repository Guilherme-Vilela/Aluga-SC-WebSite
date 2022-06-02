<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.5s" data-wow-delay="0s">
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-space-around" style="width:100%;">
                <div class="col-sm-1 "></div>
                <div class="col-sm-1 ">
                    <a class="navbar-brand" href="#">
                        <div class="d-flex justify-content-start align-items-center ">
                            <div>
                                <i class="fa-solid fa-map-location-dot fa-3x"></i>
                            </div>
                            <div>
                                <p style = "pading:0px; margin:0px 10px;" class = "h2">Aluga-SC</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="col-sm-6 col-lg-10 d-flex justify-content-center">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown size_animate">
                                <input type="text" name="response_where"
                                    class="nav-link dropdown-toggle border_radius button_header" href="#"
                                    id="navbar_where" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" placeholder=" Para onde?" />
                                <div class="dropdown-menu" id="dropdown-menu-where" aria-labelledby="navbarDropdown"
                                    style="width: 500px;">
                                    <div class="d-flex ">

                                        <div class="col-lg-6 d-block dropdown-item">
                                            <figure>
                                                <img src="{{ asset('images/imagem_header_praia.jpg') }}"
                                                    class="img-thumbnail" alt="">
                                                <figcaption class="text-center">Litoral Catarinese</figcaption>
                                            </figure>
                                        </div>

                                        <div class="col-lg-6 d-block dropdown-item">
                                            <figure>
                                                <img src="{{ asset('images/imagem_header_praia.jpg') }}"
                                                    class="img-thumbnail" alt="">
                                                <figcaption class="text-center">Vaje do itajai</figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="col-lg-6 dropdown-item">
                                            <figure>
                                                <img src="{{ asset('images/imagem_header_praia.jpg') }}"
                                                    class="img-thumbnail" alt="">
                                                <figcaption class="text-center">Rio dos cedros</figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-lg-6 dropdown-item">
                                            <figure>
                                                <img src="{{ asset('images/imagem_header_praia.jpg') }}"
                                                    class="img-thumbnail" alt="">
                                                <figcaption class="text-center">Pomerode</figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown size_animate">
                                <input type="text" name="response_when"
                                    class="nav-link dropdown-toggle border_radius button_header" href="#"
                                    id="navbar_when" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" placeholder=" Quando ?" />
                                <div class="dropdown-menu" id="dropdown-menu-where" aria-labelledby="navbarDropdown">
                                </div>
                            </li>

                            <li class="nav-item dropdown size_animate">
                                <input type="text" name="response_people"
                                    class="nav-link dropdown-toggle border_radius button_header" href="#"
                                    id="navbar_people" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" placeholder=" Quantas pessoas?" />

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdown-menu-where">

                                </div>
                            </li>
                            <button class="btn btn-danger button_header " style="border-radius: 50%; width: 46px;">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </ul>
                    </div>
                    <div class="col-sm-2 d-flex justify-content-center">
                        <i class="fa-solid fa-user"></i>
                    </div>
                </div>
                <div class="col-sm-1 "></div>
            </nav>

        </div>
    </div>

</header>
