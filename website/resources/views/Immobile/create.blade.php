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
                <h2 class="message_create_immobile part_3" style="display:none;">Informe quais são os comodos da sua
                    acomodação?</h2>
            </div>
            <div class="col d-flex justify-content-center align-items-center m-0 p-0">
                <div class="row">
                    <div id="carousel" class="carousel slide col-12" data-ride="carousel" data-interval="false">
                        <ol class="carousel-indicators">
                            <li data-target="" style="background-color: black;" data-slide-to="0" class="active"></li>
                            <li data-target="" style="background-color: black;" data-slide-to="1"></li>
                            <li data-target="" style="background-color: black;" data-slide-to="2"></li>
                            <li data-target="" style="background-color: black;" data-slide-to="3"></li>
                            <li data-target="" style="background-color: black;" data-slide-to="4"></li>
                            <li data-target="" style="background-color: black;" data-slide-to="5"></li>
                            <li data-target="" style="background-color: black;" data-slide-to="6"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="col-12 d-flex align-items-center" style="height:70vh;">
                                    <div class="row ">
                                        <div class="col-12 d-flex justify-content-center aling-content-center m-2">
                                            <button
                                                class="button_selection_type_immobile d-flex justify-content-between align-items-center"
                                                value="Casa"><span><b>Casa</b></span>
                                                <img src={{ asset('images/create_immobile/home.jpg') }}
                                                    class="image_option_create_immobile">
                                            </button>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center m-2">
                                            <button
                                                class="button_selection_type_immobile d-flex justify-content-between align-items-center"
                                                value="Apartamento"><b>Apartamento</b></span>
                                                <img src={{ asset('images/create_immobile/apartment.jpg') }}
                                                    class="image_option_create_immobile">
                                            </button>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center m-2">
                                            <button
                                                class="button_selection_type_immobile d-flex justify-content-between align-items-center"
                                                value="Pousada"><span><b>Pousada</b></span>
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
                                            <label>Aonde se localiza a sua acomodação</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-12 d-flex align-items-center" style="height:70vh;">
                                    <div class="row ">
                                        <div class="col-12 d-flex justify-content-center m-2">
                                            <label>Nome da sua residencia</label>
                                            <input type="text" id="name_immobile" class="form-control">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center m-2">
                                            <label>Valor cobrado por noite</label>
                                            <input type="text" id="value_immobile" class="form-control">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center m-2">
                                            <label>Quantidade de quartos</label>
                                            <input type="text" id="bedrooms_immobile" class="form-control">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center m-2">
                                            <label>Quantidade de banheiros</label>
                                            <input type="text" id="bathrooms_immobile" class="form-control">
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
                                                @foreach($furnitures as $furniture)
                                                <div class="col-4 d-flex justify-content-center mt-2">
                                                    <button
                                                        class=" d-flex justify-content-between align-items-center option_convenience"
                                                        value="{{$furniture->id}}">
                                                        <span><b>{{$furniture->name}}</b></span>
                                                    </button>
                                                </div>
                                                @endforeach
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
                                                @foreach($rooms as $room)
                                                <div class="col-4 d-flex justify-content-center mt-2">
                                                    <button
                                                        class=" d-flex justify-content-between align-items-center option_rooms"
                                                        value="{{$room->id}}">
                                                        <span><b>{{$room->name}}</b></span>
                                                    </button>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="col-12 d-flex align-items-center" style="height:70vh;">
                                    <div class="row ">
                                        <div class="col-12 d-flex justify-content-center m-2">
                                            <label>Regras da casa</label>
                                            <input type="text" class="form-control" id="rule_immobile">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center m-2">
                                            <label>Descrição</label>
                                            <textarea type="text" id="description_immobile" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-12 d-flex align-items-center" style="height:70vh;">
                                    <div class="row ">
                                        <form action="{{ route('immobile.store') }}" method="POST"
                                            enctype="multipart/form-data" id="form_store_immobile">
                                            @csrf
                                            <div class="col-12 d-flex justify-content-center m-2">
                                                <label>Imagens da sua residencia </label>
                                                <input type="file" id="image_immobile" name = "images[]" class="form-control" multiple>
                                            </div>
                                            <input id="input_type_immobile" type=text name="type_immobile"
                                                class="d-none">
                                            <input id="input_address_immobile" type=text name="address_immobile"
                                                class="d-none">
                                            <input id="input_name_immobile" type=text name="name_immobile"
                                                class="d-none">
                                            <input id="input_value_immobile" type=text name="value_immobile"
                                                class="d-none">
                                            <input id="input_bedrooms_immobile" type=text name="bedrooms_immobile"
                                                class="d-none">
                                            <input id="input_bathrooms_immobile" type=text name="bathrooms_immobile"
                                                class="d-none">
                                            <input id="input_coveniences_immobile" type=text name="coveniences_immobile"
                                                class="d-none">
                                            <input id="input_rooms_immobile" type=text name="rooms_immobile"
                                                class="d-none">
                                            <input id="input_rules_immobile" type=text name="rules_immobile"
                                                class="d-none">
                                            <input id="input_description_immobile" type=text name="description_immobile"
                                                class="d-none">
                                        </form>
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
        var array_immobile = [];
        $(document).ready(function() {

            $(".button_selection_type_immobile").click(function() {
                $(".button_selection_type_immobile").css("background", "white");
                $(this).css("background", "#ccc");

                let type_immobile = ['type', $(this).attr("value")];
                array_immobile[0] = (type_immobile);
            })

            $(".carousel-control-prev-create").click(function() {
                let value_carrosel_position_current = ($("ol.carousel-indicators li.active").attr(
                    "data-slide-to"));
                switch (value_carrosel_position_current) {
                    case '0':
                        break;
                    case '1':
                        move_carousel("back");
                        break;
                    case '2':
                        move_carousel("back");
                        break;
                    case '3':
                        move_carousel("back");
                        break;
                    case '4':
                        move_carousel("back");
                        break;
                    case '5':
                        move_carousel("back");
                        break;
                    case '6':
                        move_carousel("back");
                        break;
                    default:
                }
            })
            $(".carousel-control-next-create").click(function() {
                //pega o valor da posiçãoa atual do carrosel a posição
                let value_carrosel_ = ($("ol.carousel-indicators li.active").attr("data-slide-to"));
                switch (value_carrosel_) {
                    case '0':
                        validate_type_immobile(value_carrosel_);
                        break;
                    case '1':
                        move_carousel("next");
                        break;
                    case '2':
                        validate_characteristic_immobile(value_carrosel_);
                        break;
                    case '3':
                        validate_convenience_immobile(value_carrosel_);
                        break;
                    case '4':
                        validate_room_immobile(value_carrosel_);
                        break;
                    case '5':
                        validate_rules_immobile(value_carrosel_);
                        break;
                    case '6':
                        request_create_immobile(array_immobile);
                        break;


                    default:
                }
            })
            $(".option_convenience").click(function() {
                if ($(this).attr('select') == "selected") {
                    $(this).attr('select', "");
                    $(this).css("background", "white");
                } else {
                    $(this).attr('select', "selected");
                    $(this).css("background", "#ccc");
                }
            })
            $(".option_rooms").click(function() {
                if ($(this).attr('select') == "selected") {
                    $(this).attr('select', "");
                    $(this).css("background", "white");
                } else {
                    $(this).attr('select', "selected");
                    $(this).css("background", "#ccc");
                }


            })
        })


        function move_carousel(move) {
            if (move == "next" || move == "back") {
                if (move == "next") {
                    $("#carousel").carousel('next');
                    $("#carousel").carousel('pause');

                } else if (move == "back") {
                    $("#carousel").carousel('prev');
                    $("#carousel").carousel('pause');

                }
                //troca o texto que esta sendo exibido do lado esquerdo da tela
                let position_carousel = ($("ol.carousel-indicators li.active").attr("data-slide-to"));
                for (var i = 0; i < 10; i++) {
                    $(".part_" + i).css("display", "none");
                    if (i == position_carousel) {
                        $(".part_" + i).css("display", "block");
                    }
                }
            }
        }

        function validate_type_immobile(position) {
            if (array_immobile[position] != undefined) {
                if (array_immobile[position][position].length > 0) {
                    move_carousel("next");
                    return true;
                }
            }
            Swal.fire({
                icon: 'warning',
                title: 'Selecione o tipo de espaço que você vai hospedar',
            })
        }

        function validate_characteristic_immobile(position) {
            let msg = "";
            let name = $("#name_immobile").val().trim();
            let value = $("#value_immobile").val().trim();
            let bedrooms = $("#bedrooms_immobile").val().trim();
            let bathrooms = $("#bathrooms_immobile").val().trim();
            if (name == undefined || name == "" || name.length <= 0) {
                msg += "Informe o nome do seu imóvel <br>"
            }
            if (value <= 0 || value == undefined) {
                msg += "Informe o valor da hospedagem do imovel <br>"
            }
            if (msg == "") {
                let name_immobile = ['name', name];
                let value_immobile = ['value', value];
                let bedromms_immobile = ['bedrooms', bedrooms];
                let bathrooms_immobile = ['bathrooms', bathrooms];
                let validate_characteristic_immobile = [name_immobile, value_immobile, bedromms_immobile,
                    bathrooms_immobile
                ];

                array_immobile[position] = (validate_characteristic_immobile);
                move_carousel("next");
                return true;
            }
            Swal.fire({
                icon: 'warning',
                title: msg,
            })
        }

        function validate_convenience_immobile(position) {
            let coveniences = [
                ["covenience"]
            ];
            $(".option_convenience").each(function(index) {
                if ($(this).attr("select") == "selected") {
                    let convenience = [$(this).attr("value")];
                    coveniences.push(convenience);
                }
            });
            array_immobile[position] = (coveniences);
            move_carousel("next");
        }

        function validate_room_immobile(position) {
            let rooms = [
                ["room"]
            ];
            $(".option_rooms").each(function(index) {
                if ($(this).attr("select") == "selected") {
                    let room = [$(this).attr("value")];
                    rooms.push(room);
                }
            });
            array_immobile[position] = (rooms);
            move_carousel("next");

        }

        function validate_rules_immobile(position) {
            let msg = "";
            let rules = $("#rule_immobile").val().trim();
            let description = $("#description_immobile").val().trim();

            let rules_immobile = ['rules', rules];
            let description_immobile = ['description', description];

            let validate_rules_immobile = ['rules', rules_immobile, description_immobile];
            array_immobile[position] = (validate_rules_immobile);
            move_carousel("next");
        }

        function request_create_immobile(position) {
            $("#input_type_immobile").val(array_immobile[0][1]);
            $("#input_name_immobile").val(array_immobile[2][0][1]);
            $("#input_value_immobile").val(array_immobile[2][1][1]);
            $("#input_bedrooms_immobile").val(array_immobile[2][2][1]);
            $("#input_bathrooms_immobile").val(array_immobile[2][3][1]);
            $("#input_coveniences_immobile").val(array_immobile[3].toString());
            $("#input_rooms_immobile").val(array_immobile[4].toString());
            $("#input_rules_immobile").val(array_immobile[5][1][1]);
            $("#input_description_immobile").val(array_immobile[5][2][1]);
            $("#form_store_immobile").submit();
        }

        function transform_array_string() {}
    </script>
@endsection
