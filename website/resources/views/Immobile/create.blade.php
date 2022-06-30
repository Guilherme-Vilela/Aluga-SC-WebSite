@extends('Default.layout')
@section('content')
    <main class="container-fluid m-0 p-0 " style="width:95%;">
        <div class="row">
            <div class="col  right_side_create_immobile d-flex justify-content-center align-items-center m-0 p-0 ">
                <h2 class="message_create_immobile part_0" style="display:block;">Em que tipo de espaço você vai hospedar?
                </h2>
                <h2 class="message_create_immobile part_1" style="display:none;">Onde fica sua acomodação?</h2>
                <h2 class="message_create_immobile part_2" style="display:none;">Informe as pessoas o que o espaço tem a
                    oferecer?</h2>
                <h2 class="message_create_immobile part_3" style="display:none;">Informe quais são os comodos da sua acomodação?</h2>
            </div>
            <div class="col d-flex justify-content-center align-items-center m-0 p-0">
                <div class="row">
                    <div id="carousel" class="carousel slide col-12" data-ride="carousel" data-interval="false">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel" style="background-color: black;" data-slide-to="0" class="active">
                            </li>
                            <li data-target="#carousel" style="background-color: black;" data-slide-to="1"></li>
                            <li data-target="#carousel" style="background-color: black;" data-slide-to="2"></li>
                            <li data-target="#carousel" style="background-color: black;" data-slide-to="3"></li>
                            <li data-target="#carousel" style="background-color: black;" data-slide-to="4"></li>
                            <li data-target="#carousel" style="background-color: black;" data-slide-to="5"></li>
                            <li data-target="#carousel" style="background-color: black;" data-slide-to="6"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="col-12 d-flex align-items-center" style="height:70vh;">
                                    <div class="row ">
                                        <div class="col-12 d-flex justify-content-center aling-content-center m-2">
                                            <button
                                                class="button_selection_create_immobile d-flex justify-content-between align-items-center"><span><b>Casa</b></span>
                                                <img src={{ asset('images/create_immobile/home.jpg') }}
                                                    class="image_option_create_immobile">
                                            </button>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center m-2">
                                            <button
                                                class="button_selection_create_immobile d-flex justify-content-between align-items-center"><b>Apartamento</b></span>
                                                <img src={{ asset('images/create_immobile/apartment.jpg') }}
                                                    class="image_option_create_immobile">
                                            </button>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center m-2">
                                            <button
                                                class="button_selection_create_immobile d-flex justify-content-between align-items-center"><span><b>Pousada</b></span>
                                                <img src={{ asset('images/create_immobile/inn.jpg') }}
                                                    class="image_option_create_immobile">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-12 d-flex align-items-center" style="height:70vh;">
                                    <div class="row ">
                                        <div class="col-12 d-flex justify-content-center m-2">
                                            <label >Aonde se localiza a sua acomodação</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-12 d-flex align-items-center" style="height:70vh;">
                                    <div class="row ">
                                        <div class="col-12 d-flex justify-content-center m-2">
                                            <label >Nome da sua residencia</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center m-2">
                                            <label >Quantidade de quartos</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center m-2">
                                            <label >Quantidade de banheiros</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-12 d-flex align-items-center" style="height:70vh;">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center mt-2">
                                            <p>Quais comodidades sua acomodação ofecere?</p>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center mt-2">
                                            <div class="row">
                                                <div class="col-4 d-flex justify-content-center mt-2">
                                                    <button class=" d-flex justify-content-between align-items-center">
                                                        <span><b>Espaços de jogos</b><i class="fa-solid fa-chess-board"></i></span>
                                                    </button>
                                                </div>
                                                <div class="col-4 d-flex justify-content-center mt-2">
                                                    <button class=" d-flex justify-content-between align-items-center">
                                                        <span><b>Piscina</b><i class="fa-solid fa-water-ladder"></i></span>
                                                    </button>
                                                </div>
                                                <div class="col-4 d-flex justify-content-center mt-2">
                                                    <button class=" d-flex justify-content-between align-items-center">
                                                        <span><b>Churrasqueira</b><i class="fa-solid fa-fire-burner"></i></span>
                                                    </button>
                                                </div>
                                                <div class="col-4 d-flex justify-content-center mt-2">
                                                    <button class=" d-flex justify-content-between align-items-center">
                                                        <span><b>Jardim</b><i class="fa-solid fa-tree"></i></span>
                                                    </button>
                                                </div>
                                                <div class="col-4 d-flex justify-content-center mt-2">
                                                    <button class=" d-flex justify-content-between align-items-center">
                                                        <span><b>Banheira</b><i class="fa-solid fa-bath"></i></span>
                                                    </button>
                                                </div>
                                                <div class="col-4 d-flex justify-content-center mt-2">
                                                    <button class=" d-flex justify-content-between align-items-center">
                                                        <span><b>Wi-fi</b><i class="fa-solid fa-wifi"></i></span>
                                                    </button>
                                                </div>
                                                <div class="col-4 d-flex justify-content-center mt-2">
                                                    <button class=" d-flex justify-content-between align-items-center">
                                                        <span><b>TV</b><i class="fa-solid fa-tv"></i></span>
                                                    </button>
                                                </div>
                                                <div class="col-4 d-flex justify-content-center mt-2">
                                                    <button class=" d-flex justify-content-between align-items-center">
                                                        <span><b>Garagem</b><i class="fa-solid fa-warehouse"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-12 d-flex align-items-center" style="height:70vh;">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center mt-2">
                                            <p>Quais comodidos acomodação ofecere?</p>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center mt-2">
                                            <div class="row">
                                                <div class="col-4 d-flex justify-content-center mt-2">
                                                    <button class=" d-flex justify-content-between align-items-center">
                                                        <span><b>Sala de estar</b></span>
                                                    </button>
                                                </div>
                                                <div class="col-4 d-flex justify-content-center mt-2">
                                                    <button class=" d-flex justify-content-between align-items-center">
                                                        <span><b>Cozinha</b></span>
                                                    </button>
                                                </div>
                                                <div class="col-4 d-flex justify-content-center mt-2">
                                                    <button class=" d-flex justify-content-between align-items-center">
                                                        <span><b>Área externa</b></span>
                                                    </button>
                                                </div>
                                                <div class="col-4 d-flex justify-content-center mt-2">
                                                    <button class=" d-flex justify-content-between align-items-center">
                                                        <span><b>Garagem</b></span>
                                                    </button>
                                                </div>
                                                <div class="col-4 d-flex justify-content-center mt-2">
                                                    <button class=" d-flex justify-content-between align-items-center">
                                                        <span><b>Área para churrasco</b></i></span>
                                                    </button>
                                                </div>
                                                <div class="col-4 d-flex justify-content-center mt-2">
                                                    <button class=" d-flex justify-content-between align-items-center">
                                                        <span><b>Lavanderia</b></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="carousel-item">
                                <div class="col-12 d-flex align-items-center" style="height:70vh;">
                                    <div class="row ">
                                        <div class="col-12 d-flex justify-content-center m-2">
                                            <label >Regras da casa</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center m-2">
                                            <label >Descrição</label>
                                            <textarea type="text" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-12 d-flex align-items-center" style="height:70vh;">
                                    <div class="row ">
                                        <div class="col-12 d-flex justify-content-center m-2">
                                            <label >Imagens da sua residencia </label>
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-around " style="height:5vh;">
                        <a class="h5 cursor-pointer carousel-control-prev-create"
                            style="color: black !important;height: 25px;" data-slide="prev">
                            <b>Voltar</b>
                        </a>
                        <a class="h5 cursor-pointer carousel-control-next-create"
                            style="color: black !important;height: 25px;" data-slide="next">
                            <b>Continuar</b>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        $(document).ready(function() {

            $(".button_selection_create_immobile").click(function() {
                $(".button_selection_create_immobile").css("background", "white");
                $(this).css("background", "#ccc");
            })
            $(".carousel-control-prev-create").click(function() {
                $("#carousel").carousel('prev');
                $("#carousel").carousel('pause');
                let value = ($("ol.carousel-indicators li.active").attr("data-slide-to"));
                for (var i = 0; i < 4; i++) {
                    $(".part_" + i).css("display", "none");
                    if (i == value) {
                        $(".part_" + i).css("display", "block");
                    }
                }
            })
            $(".carousel-control-next-create").click(function() {
                $("#carousel").carousel('next');
                $("#carousel").carousel('pause');
                let value = ($("ol.carousel-indicators li.active").attr("data-slide-to"));
                for (var i = 0; i < 4; i++) {
                    $(".part_" + i).css("display", "none");
                    if (i == value) {
                        $(".part_" + i).css("display", "block");
                    }
                }
            })
        })
    </script>
@endsection
