<!-- ***** Header Area Start ***** -->

<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.5s" data-wow-delay="0s">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('home') }}">
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
                @csrf
                <ul class="navbar-nav mr-auto ml-auto" style="z-index: 1000;">

                    <li class="nav-item dropdown  nav-item">
                        <input type="text" name="response_where"
                            class="nav-link dropdown-toggle border_radius button_header size_animate" href="#"
                            id="navbar_where" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" placeholder=" Para onde?"
                            value="@if (!empty($where)) {{ $where }} @endif" />
                        <div class="dropdown-menu dropdown-menu-center" id="dropdown-menu-where"
                            aria-labelledby="navbarDropdown" style="width: 500px;">
                            <div class="d-flex images_dropdown_where">

                                <div class="col-12 col-xl-6 d-block dropdown-item">
                                    <figure class="image_where" data-target="Litoral Catarinense">
                                        <img src="{{ asset('images/header/imagem_01.jpg') }}" class="img-thumbnail"
                                            alt="">
                                        <figcaption class="text-center">Litoral Catarinese</figcaption>
                                    </figure>
                                </div>

                                <div class="col-12 col-xl-6 d-block dropdown-item">
                                    <figure class="image_where" data-target="Vale do itajai">
                                        <img src="{{ asset('images/header/imagem_02.jpg') }}" class="img-thumbnail"
                                            alt="">
                                        <figcaption class="text-center">Vaje do itajai</figcaption>
                                    </figure>
                                </div>
                                <div class="col-12 col-xl-6 d-block dropdown-item">
                                    <figure class="image_where" data-target="Rio dos cedros">
                                        <img src="{{ asset('images/header/imagem_03.jpg') }}" class="img-thumbnail"
                                            alt="">
                                        <figcaption class="text-center">Rio dos cedros</figcaption>
                                    </figure>
                                </div>
                                <div class="col-12 col-xl-6 d-block dropdown-item">
                                    <figure class="image_where" data-target="Pomerode">
                                        <img src="{{ asset('images/header/imagem_04.jpg') }}" class="img-thumbnail"
                                            alt="">
                                        <figcaption class="text-center">Pomerode</figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown  nav-item">
                        <input type="text" name="daterange" value="12/07/2022 - 12/07/2022"
                            class="nav-link dropdown-toggle border_radius button_header size_animate" href="#"
                            id="navbar_when" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" placeholder=" Quando?" />
                    </li>
                    <li class="nav-item dropdown size_animate nav-item">
                        <input type="text" name="response_people"
                            class="nav-link dropdown-toggle border_radius button_header" href="#"
                            id="navbar_people" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" placeholder=" Quantas pessoas?" />
                        <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown"
                            id="dropdown-menu-people" style="width: 275px;">
                            <div class="d-flex">
                                <div class=" col-sm-6">
                                    <p class="dropdown_title_people">Adultos</p>
                                    {{-- <p class="dropdown_sub_title_people">12 anos ou mais</p> --}}
                                </div>
                                <div class="d-flex col-sm-6 justify-content-center align-items-center">
                                    <i class="fa-solid fa-circle-minus fa-xl icon_people button_decrease"
                                        data-target="number_adults"></i>
                                    <p id="number_adults">
                                        @if (!empty($adults))
                                            {{ $adults }}
                                        @else
                                            0
                                        @endif
                                    </p>
                                    <i class="fa-solid fa-circle-plus fa-xl icon_people button_add"
                                        data-target="number_adults"></i>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>

                    </li>
                    <li>
                        <button class="btn btn-danger button_header d-none d-lg-block button-search text-center"
                            style="border-radius: 50%; width: 53px;">
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
                        <div class=" images_dropdown_where">
                            @if (empty(auth()->user()->name))
                                <a class="dropdown_title_config dropdown-item "data-toggle="modal"
                                    data-target="#modal_register"> Cadastrar-se</a>
                                <a class="dropdown_title_config dropdown-item "data-toggle="modal"
                                    data-target="#modal_login"> Efetue login</a>
                            @else
                                <a class="dropdown_title_config dropdown-item "data-toggle="modal"
                                    data-target="#modal_cadastro">Bem vindo {{ auth()->user()->name }}</a>
                            @endif
                            <div class="dropdown-divider"></div>

                            {{-- <a class="dropdown_title_config dropdown-item"> Duvidas frequentes</a>
                            <a class="dropdown_title_config dropdown-item" href=""> Ajuda</a> --}}
                            @if (!empty(auth()->user()->name))
                                <a class="dropdown_title_config dropdown-item" href="{{ route('user.index') }}">
                                    Meus dados</a>
                                <a class="dropdown_title_config dropdown-item" href="{{ route('immobile.my') }}">
                                    Meus Imoveis</a>
                                <a class="dropdown_title_config dropdown-item" href="{{ route('logout') }}">
                                    Logout</a>
                            @endif
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div><a href="{{ route('immobile.create') }}" class="btn btn-danger">Cadastre seu imovel</a></div>
        </nav>
    </div>

    @if (session()->has('mensage') && session()->get('mensage.function') == 'login')
        <script>
            $(document).ready(function() {
                let text = "{{ session()->get('mensage.title') }}".trim();
                $("#mensage_login").text(text);
                $("#modal_login").modal('show');

            })
        </script>
    @endif
    @if (session()->has('mensage') && session()->get('mensage.function') == 'alert')
        <script>
            $(document).ready(function() {
                Swal.fire({
                    title: '{{ session()->get('mensage.title') }}',
                    text: '{{ session()->get('mensage.text') }}',
                    icon: '{{ session()->get('mensage.icon') }}',
                }).then((result) => {
                    if (result.isConfirmed) {}
                })
            })
        </script>
        {{ session()->forget('mensage') }}
    @endif

</header>
