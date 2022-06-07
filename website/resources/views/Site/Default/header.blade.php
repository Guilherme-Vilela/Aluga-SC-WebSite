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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <div class="d-flex justify-content-start align-items-center ">
                    <div>
                        <i class="fa-solid fa-map-location-dot fa-3x"></i>
                    </div>
                    <div>
                        <p style="pading:0px; margin:0px 10px;" class="h2">Aluga-SC</p>
                    </div>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ml-auto" style = "z-index: 1000;">
                    <li class="nav-item dropdown size_animate nav-item">
                        <input type="text" name="response_where"
                            class="nav-link dropdown-toggle border_radius button_header" href="#" id="navbar_where"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            placeholder=" Para onde?" />
                        <div class="dropdown-menu" id="dropdown-menu-where" aria-labelledby="navbarDropdown"
                            style="width: 500px;">
                            <div class="d-flex images_dropdown_where">

                                <div class="col-12 col-xl-6 d-block dropdown-item">
                                    <figure class = "image_where" value = "Litoral Catarinense">
                                        <img src="{{ asset('images/imagem_header_praia.jpg') }}"
                                            class="img-thumbnail" alt="">
                                        <figcaption class="text-center">Litoral Catarinese</figcaption>
                                    </figure>
                                </div>

                                <div class="col-12 col-xl-6 d-block dropdown-item">
                                    <figure class = "image_where" value = "Vaje do itajai">
                                        <img src="{{ asset('images/imagem_header_praia.jpg') }}"
                                            class="img-thumbnail" alt="">
                                        <figcaption class="text-center">Vaje do itajai</figcaption>
                                    </figure>
                                </div>
                                <div class="col-12 col-xl-6 d-block dropdown-item">
                                    <figure class = "image_where" value = "Rio dos cedros">
                                        <img src="{{ asset('images/imagem_header_praia.jpg') }}"
                                            class="img-thumbnail" alt="">
                                        <figcaption class="text-center">Rio dos cedros</figcaption>
                                    </figure>
                                </div>
                                <div class="col-12 col-xl-6 d-block dropdown-item">
                                    <figure class = "image_where" value = "Pomerode">
                                        <img src="{{ asset('images/imagem_header_praia.jpg') }}"
                                            class="img-thumbnail" alt="">
                                        <figcaption class="text-center">Pomerode</figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown size_animate nav-item">
                        <input type="text" name="response_when"
                            class="nav-link dropdown-toggle border_radius button_header" href="#" id="navbar_when"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            placeholder=" Quando?" />
                        <div class="dropdown-menu" id="dropdown-menu-where" aria-labelledby="navbarDropdown">
                        </div>
                    </li>
                    <li class="nav-item dropdown size_animate nav-item">
                        <input type="text" name="response_people"
                            class="nav-link dropdown-toggle border_radius button_header" href="#" id="navbar_people"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            placeholder=" Quantas pessoas?" />
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdown-menu-where"
                            style="width: 275px;">
                            <div class="d-flex">
                                <div class=" col-sm-6">
                                    <p class="dropdown_title_people">Adultos</p>
                                    <p class="dropdown_sub_title_people">12 anos ou mais</p>
                                </div>
                                <div class="d-flex col-sm-6 justify-content-center align-items-center">
                                    <i class="fa-solid fa-circle-minus fa-xl icon_people"></i>
                                    <p>0</p>
                                    <i class="fa-solid fa-circle-plus fa-xl icon_people"></i>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="d-flex">
                                <div class=" col-sm-6">
                                    <p class="dropdown_title_people">Crianças</p>
                                    <p class="dropdown_sub_title_people">De 2 até 12 anos </p>
                                </div>
                                <div class="d-flex col-sm-6 justify-content-center align-items-center">
                                    <i class="fa-solid fa-circle-minus fa-xl icon_people"></i>
                                    <p>0</p>
                                    <i class="fa-solid fa-circle-plus fa-xl icon_people"></i>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="d-flex">
                                <div class=" col-sm-6">
                                    <p class="dropdown_title_people">Pets</p>
                                    <p class="dropdown_sub_title_people"></p>
                                </div>
                                <div class="d-flex col-sm-6 justify-content-center align-items-center">
                                    <i class="fa-solid fa-circle-minus fa-xl icon_people"></i>
                                    <p>0</p>
                                    <i class="fa-solid fa-circle-plus fa-xl icon_people"></i>
                                </div>
                            </div>
                    </li>
                    <li>
                        <button class="btn btn-danger button_header d-none d-lg-block "
                            style="border-radius: 50%; width: 46px;">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </li>
                </ul>
                <div class="col-sm-2 d-flex justify-content-center d-none d-lg-block dropdown">
                    <div class="d-flex d-none d-lg-block border_radius text-center align-items-center"
                        style="width: 70px;height: 40px;" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false ">
                        <i class="fa-solid fa-bars fa-lg" style="margin-top: 17px;"></i>
                        <i class="fa-solid fa-circle-user fa-xl"></i>
                    </div>
                    <div class="dropdown-menu" id="dropdown-config" aria-labelledby="navbarDropdown">
                        <div class=" images_dropdown_where" >
                            <a class="dropdown_title_config dropdown-item ">   Cadastrar-se</a> 
                            <a class="dropdown_title_config dropdown-item">   Efetue login</a>
                            <div class="dropdown-divider"></div>

                            <a class="dropdown_title_config dropdown-item">   Duvidas frequentes</a>
                            <a class="dropdown_title_config dropdown-item">   Ajuda</a>   
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

</header>
