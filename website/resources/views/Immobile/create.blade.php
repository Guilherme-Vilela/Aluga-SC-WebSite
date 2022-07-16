@extends('Default.layout')
@section('content')
    <main class="container-fluid m-0 p-0 " style="width:95%;">
        <div class="row">
            <div class="col-sm-6 right_side_create_immobile d-flex justify-content-center align-items-center m-0 p-0 ">
                <h2 class="message_create_immobile part_0" style="display:block;">Em que tipo de espaço você vai hospedar?
                </h2>
                <h2 class="message_create_immobile part_1" style="display:none;">Onde fica sua acomodação?</h2>
                <h2 class="message_create_immobile part_2" style="display:none;">Informe as pessoas o que o espaço tem a
                    oferecer?</h2>
                <h2 class="message_create_immobile part_3" style="display:none;">Informe quais são os comodos da sua
                    acomodação?</h2>
            </div>

            <div class="col-sm-6  d-flex justify-content-center align-items-center m-0 p-0">
                <div class="row">
                    <div id="carousel" class="carousel slide col-sm-12" data-ride="carousel" data-interval="false">
                        <ol class="carousel-indicators">
                            <li data-target="" style="background-color: black;" data-slide-to="0" class="active"></li>
                            <li data-target="" style="background-color: black;" data-slide-to="1"></li>
                            <li data-target="" style="background-color: black;" data-slide-to="2"></li>
                            <li data-target="" style="background-color: black;" data-slide-to="3"></li>
                            <li data-target="" style="background-color: black;" data-slide-to="4"></li>
                            <li data-target="" style="background-color: black;" data-slide-to="5"></li>
                            <li data-target="" style="background-color: black;" data-slide-to="6"></li>
                            <li data-target="" style="background-color: black;" data-slide-to="7"></li>
                        </ol>
                        <form action="{{ route('immobile.store') }}" method="POST" enctype="multipart/form-data"
                            id="form_store_immobile">
                            @csrf
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="col-12 d-flex  justify-content-center align-items-center"
                                        style="min-height:80vh;">

                                        <div class="row " style="max-height:40vh;">
                                            <div class="col-sm-12  justify-content-center m-2">
                                                <h4 class="text-center"> Selecione abaixo o tipo da sua residencia</h4>
                                            </div>
                                            <div class="col-12 d-flex justify-content-center aling-content-center m-2">
                                                <button type="button"
                                                    class="button_selection_type_immobile d-flex justify-content-between align-items-center"
                                                    value="Casa"><span><b>Casa</b></span>
                                                    <img src={{ asset('images/create_immobile/home.jpg') }}
                                                        class="image_option_create_immobile">
                                                </button>
                                            </div>
                                            <div class="col-12 d-flex justify-content-center m-2">
                                                <button type="button"
                                                    class="button_selection_type_immobile d-flex justify-content-between align-items-center"
                                                    value="Apartamento"><b>Apartamento</b></span>
                                                    <img src={{ asset('images/create_immobile/apartment.jpg') }}
                                                        class="image_option_create_immobile">
                                                </button>
                                            </div>
                                            <div class="col-12 d-flex justify-content-center m-2">
                                                <button type="button"
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
                                    <div class="col-12 d-flex align-items-center" style="min-height:80vh;">
                                        <div class="row ">
                                            <div class="col-sm-12  justify-content-center m-2">
                                                <h4 class="text-center"> Informe abaixo os dados referentes a localização da
                                                    sua
                                                    residência</h4>
                                            </div>
                                            <div class="col-sm-6  justify-content-center mt-2">
                                                <label class="control-label">CEP </label>
                                                <input id="cep" name="cep" placeholder="Apenas números"
                                                    class="form-control input-md" maxlength="8"
                                                    onkeyup="pesquisacep(value)" value="89120000">
                                            </div>
                                            <div class="col-sm-6  justify-content-center mt-1">
                                                <label>Selecione o estado</label>
                                                <select name="state" id="state" class="form-control">
                                                    <option value="">Selecione</option>
                                                    <option value="AC">AC</option>
                                                    <option value="AL">AL</option>
                                                    <option value="AP">AP</option>
                                                    <option value="AM">AM</option>
                                                    <option value="BA">BA</option>
                                                    <option value="CE">CE</option>
                                                    <option value="DF">DF</option>
                                                    <option value="ES">ES</option>
                                                    <option value="GO">GO</option>
                                                    <option value="MA">MA</option>
                                                    <option value="MT">MT</option>
                                                    <option value="MS">MS</option>
                                                    <option value="MG">MG</option>
                                                    <option value="PA">PA</option>
                                                    <option value="PB">PB</option>
                                                    <option value="PR">PR</option>
                                                    <option value="PE">PE</option>
                                                    <option value="PI">PI</option>
                                                    <option value="RJ">RJ</option>
                                                    <option value="RN">RN</option>
                                                    <option value="RS">RS</option>
                                                    <option value="RO">RO</option>
                                                    <option value="RR">RR</option>
                                                    <option value="SC" selected>SC</option>
                                                    <option value="SP">SP</option>
                                                    <option value="SE">SE</option>
                                                    <option value="TO">TO</option>
                                                </select>
                                            </div>

                                            <div class="col-sm-6  justify-content-center mt-2">
                                                <label>Cidade</label>
                                                <input type="text" class="form-control" id="city" value="Timbo"
                                                    name="city">
                                            </div>
                                            <div class="col-sm-6  justify-content-center mt-2">
                                                <label>Bairro</label>
                                                <input type="text" class="form-control" id="district"
                                                    value="Padre Martinho" name="district">
                                            </div>

                                            <div class="col-sm-6  justify-content-center mt-1">
                                                <label>Rua</label>
                                                <input type="text" class="form-control" id="road"
                                                    value="Rua Arnold Albrech" name="road">
                                            </div>
                                            <div class="col-sm-6  justify-content-center mt-1">
                                                <label>Número</label>
                                                <input type="text" class="form-control" id="number" value="512"
                                                    name="number">
                                            </div>
                                            <div class="col-sm-12   justify-content-center mt-1">
                                                <label>Complemento</label>
                                                <input type="text" class="form-control" id="complement"
                                                    value="casa 2" name="complement">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-12 d-flex align-items-center" style="min-height:80vh;">
                                        <div class="row ">
                                            <div class="col-sm-12  justify-content-center m-2">
                                                <h4 class="text-center"> Informe abaixo alguns dados da sua Residencia</h4>
                                            </div>
                                            <div class="col-sm-12 d-flex justify-content-center alin mt-2 mb-5">
                                                <div class="col-sm-4 text-center">
                                                    <img src="{{ asset('icons/solid/house-chimney-window.svg') }}"
                                                        width="30" height="24"> </object>
                                                    <br>
                                                    <label>Nome da sua residencia</label>
                                                    <input type="text" id="name_immobile" class="form-control"
                                                        value="casa da nena" name="name_immobile">
                                                </div>
                                                <div class="col-sm-4 text-center">
                                                    <img src="{{ asset('icons/solid/money-bills.svg') }}" width="30"
                                                        height="24"> </object>
                                                    <br>
                                                    <label>Valor a ser cobrado por noite</label>
                                                    <input type="text" id="value_immobile" class="form-control "
                                                        value="120" name="value_immobile">
                                                </div>
                                                <div class="col-sm-4 text-center">
                                                    <img src="{{ asset('icons/solid/person-circle-plus.svg') }}"
                                                        width="30" height="24"> </object>
                                                    <br>
                                                    <label>Capacidade de hóspedes</label>
                                                    <input type="text" id="quantity_people" class="form-control"
                                                        value="6" name="quantity_people">
                                                </div>

                                            </div>
                                            <div class="col-sm-12  justify-content-center mt-2">
                                                <h4 class="text-center">Comodos importantes</h4>
                                            </div>
                                            <div class="col-sm-12  d-flex justify-content-center mt-2">
                                                <div class="col-sm-4 text-center">
                                                    <img src="{{ asset('icons/solid/bath.svg') }}" width="30"
                                                        height="24"> </object>
                                                    <br>
                                                    <label>Quantidade de banheiros </label>
                                                    <input type="text" id="bathrooms_immobile" class="form-control"
                                                        value="1" name="bathrooms_immobile" style="width:100%;">
                                                </div>
                                                <div class="col-sm-4 text-center">
                                                    <img src="{{ asset('icons/solid/bed.svg') }}" width="30"
                                                        height="24"> </object>
                                                    <br>
                                                    <label>Quantidade de quartos </label>
                                                    <input type="text" id="bedrooms_immobile" class="form-control"
                                                        value="1" name="bedrooms_immobile">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-12 d-flex align-items-center" style="min-height:80vh;">
                                        <div class="row">
                                            <div class="col-sm-12  justify-content-center m-2">
                                                <h3 class="text-center"> Onde os hospedes irão dormir</h3>
                                            </div>

                                            <div class="col-sm-12  d-flex justify-content-center mt-2">
                                                <div class="col-sm-4  text-center justify-content-center ">
                                                    <img src={{ asset('images/create_immobile/bed.png') }} class=""
                                                        style="height: 24px;">
                                                    <br>
                                                    <label>Quantidade de Camas de casal</label>
                                                    <input type="text" id="double_bed" class="form-control"
                                                        name="double_bed" value="1">
                                                </div>
                                                <div class="col-sm-4  text-center justify-content-center ">
                                                    <img src="{{ asset('icons/solid/bed.svg') }}" width="30"
                                                        height="24"> </object>
                                                    <br>
                                                    <label>Quantidade de Camas de solteiro</label>
                                                    <input type="text" id="single_bed" class="form-control"
                                                        name="single_bed" value="1">
                                                </div>
                                                <div class="col-sm-4  text-center justify-content-center ">
                                                    <img src="{{ asset('icons/solid/couch.svg') }}" width="30"
                                                        height="24"> </object>
                                                    <br>
                                                    <label>Quantidade de sofá cama</label>
                                                    <input type="text" id="couch" class="form-control"
                                                        name="couch" value="1">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-12 d-flex align-items-center" style="min-height:80vh;">
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-center mt-2">
                                                <h4>Selecione as comodidades que estão disponiveis em sua acomodação</h4>
                                            </div>
                                            <div class="col-12 d-flex justify-content-center mt-2">
                                                <div class="row">
                                                    @foreach ($furnitures as $furniture)
                                                        <div class="col-4 d-flex justify-content-center mt-2">

                                                            <div class="text-center option_convenience cursor-pointer"
                                                                value="{{ $furniture->id }}"
                                                                style="border: 2px black solid;">
                                                                <div>
                                                                    <img src="{{ asset('icons/solid/' . $furniture->icon) }}"
                                                                        width="30" height="24"> </object>
                                                                </div>
                                                                <div>
                                                                    <span><b>{{ $furniture->name }}</b></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-12 d-flex align-items-center" style="min-height:80vh;">
                                        <div class="row">
                                            <div class="col-sm-12  justify-content-center m-2">
                                                <h4 class="text-center"> Informe abaixo as informações que os hospedes tem
                                                    que saber</h4>
                                            </div>
                                                @foreach ($rooms as $room)
                                                    <div class="col-4 d-flex justify-content-center mt-2 ">
                                                        <div class=" text-center  cursor-pointer option_rooms"
                                                            value="{{ $room->id }}" style="border: 2px black solid;">
                                                            <div>
                                                                <img src="{{ asset('icons/solid/' . $room->icon) }}"
                                                                    width="30" height="24"> </object>
                                                            </div>
                                                            <div>
                                                                <span><b>{{ $room->name }}</b></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                        </div>
                                    </div>
                                </div>

                            <div class="carousel-item">
                                <div class="col-12 d-flex align-items-center" style="min-height:80vh;">
                                    <div class="row ">
                                        <div class="col-sm-12  justify-content-center m-2">
                                            <h4 class="text-center"> Informe abaixo as informações que os hospedes tem
                                                que saber</h4>
                                        </div>
                                        <div class="col-12 justify-content-center m-2">
                                            <label>Regras da casa</label>
                                            <input type="text" class="form-control" id="rule_immobile"
                                                name="rules_immobile">
                                        </div>
                                        <div class="col-12  justify-content-center m-2">
                                            <label>Descrição</label>
                                            <textarea type="text" id="description_immobile" class="form-control" name="description_immobile"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-12 d-flex align-items-center" style="min-height:80vh;">
                                    <div class="row ">
                                        <div class="col-sm-12  justify-content-center m-2">
                                            <h4 class="text-center">Aqui você vai colocar as imagens da sua residencia
                                                para os hospedes verem</h4>
                                        </div>
                                        <div class="col-sm-12   justify-content-center m-2">
                                            <label>Adicione aqui a melhor imagem da sua residencia, essa imagem sera
                                                a sua <b>capa para os hospedes </b></label>
                                            <input type="file" id="image_main" name="image_main"
                                                class="form-control">
                                        </div>
                                        <div class="col-sm-12  justify-content-center m-2">
                                            <label>Adicione aqui todas as outras imagens que desejar da sua residencia
                                            </label>
                                            <input type="file" id="image_immobile" name="images[]"
                                                class="form-control" multiple>
                                        </div>
                                    </div>
                                    <input id="input_type_immobile" type=text name="type_immobile" class="d-none">
                                    <input id="input_coveniences_immobile" type=text name="coveniences_immobile"
                                        class="d-none">
                                    <input id="input_rooms_immobile" type=text name="rooms_immobile" class="d-none">
                                </div>
                            </div>
                    </div>
                    </form>
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

            //MASK
            $('#value_immobile').mask("#.##0,00", {
                reverse: true
            });
            $('#quantity_people').mask("000", {
                reverse: true
            });
            $('#bathrooms_immobile').mask("000", {
                reverse: true
            });
            $('#bedrooms_immobile').mask("000", {
                reverse: true
            });
            $('#single_bed').mask("000", {
                reverse: true
            });
            $('#double_bed').mask("000", {
                reverse: true
            });
            // FINISH MASK


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
                    case '7':
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
                        validate_address_immobile(value_carrosel_)
                        break;
                    case '2':
                        validate_characteristic_immobile(value_carrosel_);
                        break;
                    case '3':
                        move_carousel("next");
                        break;
                    case '4':
                        validate_convenience_immobile(value_carrosel_);
                        break;
                    case '5':
                        validate_room_immobile(value_carrosel_);
                        break;
                    case '6':
                        validate_rules_immobile(value_carrosel_);
                        break;
                    case '7':
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

        function validate_address_immobile(position) {
            let road = $("#road").val().trim();
            let city = $("#city").val().trim();
            let district = $("#district").val().trim();
            let state = $("#state").val().trim();
            let cep = $("#cep").val().trim();
            let number = $("#number").val().trim();
            let complement = $("#complement").val().trim();
            let msg = "";

            if (road == undefined || road == "" || road.length <= 0) {
                msg += "Informe o nome da rua <br>"
            }
            if (city == undefined || city == "" || city.length <= 0) {
                msg += "Informe o nome da cidade <br>"
            }
            if (district == undefined || district == "" || district.length <= 0) {
                msg += "Informe o nome do bairro <br>"
            }
            if (state == undefined || state == "" || state.length <= 0) {
                msg += "Selecione um estado <br>"
            }
            if (cep == undefined || cep == "" || cep.length <= 0) {
                msg += "Informe o CEP <br>"
            }
            if (number == undefined || number == "" || number.length <= 0) {
                msg += "Informe o número da residencia <br>"
            }
            if (msg == "") {
                move_carousel("next");
                return true;
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: msg,
                })
            }
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
            $("#input_coveniences_immobile").val(array_immobile[4].toString());
            $("#input_rooms_immobile").val(array_immobile[5].toString());
            $("#form_store_immobile").submit();
        }
    </script>
@endsection
