@extends('Default.layout')
@section('content')
<noscript>
    <iframe 
      style="width: 100px; height: 100px; border: 0; position:absolute; top: -5000px;" 
      src="https://h.online-metrix.net/fp/tags?org_id={1snn5n9w} &session_id={{"{".$seller_id."}"}}">
    </iframe>
  </noscript>
    <main class="container">
        <div class="row justify-content-center  align-content-center align-items-center" style="height: 90vh;">
            <div id="carousel" class="carousel slide col-sm-12 " data-ride="carousel" data-interval="false">

                <form action="{{ route('payment.store') }}" method="POST" enctype="multipart/form-data" id="form_payment">
                    @csrf
                    <input style = "display:none" type = "text" value = "{{$seller_id}}" name = "session">
                    <input style = "display:none" type = "text" value = "{{$immobile->id}}" name = "immobile">
                    <input style = "display:none" type = "text" value = "{{$amount}}" name = "amount">
                    <div class="container" style="width: 90%;">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-sm-8 mt-5">
                                        <h2>Privacidade e Termos</h2>
                                        <ul>
                                            <li>
                                                <p class="mt-2 " style="font-size: 20px"> Para realizar uma reserva, você
                                                    precisa concordar com
                                                    os Termos do contrato abaixo.
                                                    Fique tranquilo, caso não tenha tempo agora para ler enviaremos uma
                                                    copia
                                                    para seu email
                                                    assim que
                                                    o pagamento for realziado</p>
                                                <a href="{{ asset('contrato.pdf') }}" target="_blank"
                                                    style="color : blue;">Clique aqui para
                                                    visualizar o contrato de locação</a>
                                            </li>
                                            <br>
                                            <li>
                                                <p class="mt-2" style="font-size: 20px">Os dados do seu cartão serão
                                                    utizados
                                                    somente para
                                                    realizar o pagamento e manter historico de
                                                    reservas, o historico sera mantido em nosso
                                                    banco de dados de maneira criptografada</p>
                                            </li>
                                        </ul>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="accept_terms">
                                            <label class="form-check-label" for="flexCheckDefault" style="font-size: 20px">
                                                Concordo com os termos do contrato
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4"><img src="{{ asset('icons/solid/privacy.svg') }}"></div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="form-row">
                                    <div class=" col-md-12">
                                        <h3>Dados de usuario</h3>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Nome</label>
                                        <input type="text" class="form-control" id="name_people" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">CPF</label>
                                        <input type="text" class="form-control" id="cpf" placeholder=""
                                            onkeyup="validarCPF(value)">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Telefone</label>
                                        <input type="text" class="form-control" id="cell" placeholder="">
                                    </div>
                                    <div class=" col-md-12">
                                        <h3>Dados de endereço</h3>
                                    </div>
                                    <div class="col-md-6  justify-content-center ">
                                        <label class="control-label">CEP </label>
                                        <input id="cep" name="cep" placeholder="Apenas números"
                                            class="form-control input-md" maxlength="8" onkeyup="pesquisacep(value)"
                                            value="89120000">
                                    </div>
                                    <div class="col-sm-6  justify-content-center ">
                                        <label>Selecione o estado</label>
                                        <select name="state" id="state" class="form-control">
                                        </select>
                                    </div>

                                    <div class="col-sm-6  justify-content-center ">
                                        <label>Cidade</label>
                                        <select name="city" id="city" class="form-control">

                                        </select>
                                    </div>
                                    <div class="col-sm-6  justify-content-center mt-2">
                                        <label>Bairro</label>
                                        <input type="text" class="form-control" id="district" value="Padre Martinho"
                                            name="district">
                                    </div>

                                    <div class="col-sm-6  justify-content-center mt-1">
                                        <label>Rua</label>
                                        <input type="text" class="form-control" id="road" value="Rua Arnold Albrech"
                                            name="road">
                                    </div>
                                    <div class="col-sm-6  justify-content-center mt-1">
                                        <label>Número</label>
                                        <input type="text" class="form-control" id="number" value="512"
                                            name="number">
                                    </div>
                                    <div class="col-sm-12   justify-content-center mt-1">
                                        <label>Complemento</label>
                                        <input type="text" class="form-control" id="complement" value=""
                                            name="complement">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-12 ">
                                        <h3>Confirmação do pagamento</h3>
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-around immobile_info mt-5 mb-5">
                                        <div class="col-sm-6">
                                            <p class="text_confirmation">Você ira alugar o imovel :
                                                <b>{{ $immobile->name }}</b>
                                            </p>
                                            <p class="">Pelo valor por noite de :
                                                <b>{{ number_format($immobile->value, 2, ',', '.') }}</b>
                                            </p>
                                            <p>Valor total a ser pago: <b>R${{ number_format($amount, 2, ',', '.') }}</b>
                                            <p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="">Data de entrada no imovel : <b>{{ $check_in }}</b></p>
                                            <p class="">Data de saida do imovel : <b>{{ $check_out }}</b></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="num_cartao">Número</label>
                                            <input type="text" class="form-control" id="card_number"
                                                name="card_number" value="" maxlength="16">
                                        </div>
                                        <div class="form-group">
                                            <label for="validade_cartao">Nome inserido no cartão </label>
                                            <input type="text" class="form-control " id="card_name" name="card_name"
                                                value="" placeholder="" data-requerido-min="6">
                                        </div>
                                        <div class="form-group">
                                            <label for="validade_cartao">Validade (Mes/Ano)</label>
                                            <input type="text" class="form-control " id="card_date" name="card_date"
                                                value="" placeholder="" data-requerido-min="6" maxlength="5">
                                        </div>
                                        <div class="form-group">
                                            <label for="cod_cartao">Código verificador</label>
                                            <input type="text" class="form-control" name="card_cod" id="card_cod"
                                                value="" data-requerido-min="3" maxlength="4">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 row justify-content-center align-items-center">
                                        <div class="col-sm-12">
                                            <h4>Metodo de pagamento: Credito avista</h4>
                                        </div>
                                        <div class="modelo-card-frente-example">
                                            <span class="ex-card-number"></span>
                                            <span class="ex-card-name"></span>
                                            <span class="ex-card-expiration"></span>
                                            <div class="card-img-brand"></div>
                                            <img src="{{ asset('images/frente.png') }}">
                                        </div>
                                        <div class="modelo-card-verso-example" style="display: none;">
                                            <span class="ex-card-cvv"></span>
                                            <img src=" {{ asset('images/verso.png') }}">

                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-12 text-right mt-3">
                                    <h4 style="color:black">Valor total a ser pago:
                                        R${{ number_format($amount, 2, ',', '.') }}</h4>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-sm-12" style="margin-top: 4rem !important">
                        <ol class="carousel-indicators">
                            <li data-target="" style="background-color: black;" data-slide-to="0" class="active">
                            </li>
                            <li data-target="" style="background-color: black;" data-slide-to="1"></li>
                            <li data-target="" style="background-color: black;" data-slide-to="2"></li>
                        </ol>
                    </div>
            </div>

            <div class="col-12 d-flex justify-content-around " style="height:5vh;">

                <a class="h5 cursor-pointer carousel-control-prev-create" style="color: black !important;height: 25px;"
                    data-slide="prev">
                    <b>Voltar</b>
                </a>
                <a class="h5 cursor-pointer carousel-control-next-create" style="color: black !important;height: 25px;"
                    data-slide="next">
                    <b>Continuar</b>
                </a>
            </div>
            </form>
        </div>
    </main>
    <script>
        $(document).ready(function() {
            //MASK
            $('#card_number').mask("0000 0000 0000 0000", {
                reverse: true
            });
            $('#card_date').mask("00/00", {
                reverse: true
            });
            $('#card_cod').mask("0000", {
                reverse: true
            });
            $('#cpf').mask("000.000.000-00", {
                reverse: true
            });
            $('#cell').mask("(00)00000-00000", {
                reverse: true
            });

            // FINISH MASK
            $.getJSON("{{ asset('js/cities/city.json') }}", function(data) {
                var items = [];
                var options = '<option value="">escolha um estado</option>';
                $.each(data, function(key, val) {
                    options += '<option value="' + val.sigla + '">' + val.nome + '</option>';
                });
                $("#state").html(options);

                $("#state").change(function() {

                    var options_cidades = '';
                    var str = "";

                    $("#state option:selected").each(function() {
                        str += $(this).text();
                    });

                    $.each(data, function(key, val) {
                        if (val.nome == str) {
                            $.each(val.cidades, function(key_city, val_city) {
                                options_cidades += '<option value="' + val_city +
                                    '">' +
                                    val_city + '</option>';
                            });
                        }
                    });
                    $("#city").html(options_cidades);
                }).change();

            });
            $("#card_number").change(function() {
                $('.ex-card-number').text($(this).val());
            });
            $("#card_date").change(function() {
                $('.ex-card-expiration').text($(this).val());
            });
            $("#card_cod").keyup(function() {
                $(".modelo-card-frente-example").css("display", "none");
                $('.modelo-card-verso-example').css('display', 'block');
                $('.ex-card-cvv').text($(this).val());
            });
            $("#card_cod").focusout(function() {
                $('.modelo-card-verso-example').css('display', 'none');
                $(".modelo-card-frente-example").css("display", "block");
                $('.ex-card-cvv').text($(this).val());
            });
            $("#card_name").change(function() {
                $(this).val($(this).val().toUpperCase())
                $('.ex-card-name').text($(this).val())
            });
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
                default:
            }
        })
        $(".carousel-control-next-create").click(function() {
            //pega o valor da posiçãoa atual do carrosel a posição
            let value_carrosel_ = ($("ol.carousel-indicators li.active").attr("data-slide-to"));
            switch (value_carrosel_) {
                case '0':
                    valid_checkout();
                    break;
                case '1':
                    valid_info();
                    break;
                case '2':
                    submit();
                    break;

                default:
            }
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

        function submit() {
            $("#form_payment").submit();

        }

        function valid_info() {
            let msg = "";
            let name_people = $("#name_people").val().trim();
            let cpf = $("#cpf").val().trim();
            let cell = $("#cell").val().trim();
            let cep = $("#cep").val().trim();
            let state = $("#state").val().trim();
            let city = $("#city").val();
            let district = $("#district").val().trim();
            let road = $("#road").val().trim();
            let number = $("#number").val().trim();
            let complement = $("#complement").val().trim();

            if (name_people == undefined || name_people == "" || name_people.length <= 0) {
                msg += "Informe o seu nome completo<br>"
            }
            if (cpf == undefined || cpf == "" || cpf.length <= 0) {
                msg += "Informe o seu CPF <br>"
            } else {
                if (!validarCPF(cpf)) {
                    msg += "CPF invalido";
                }
            }
            if (cell == undefined || cell == "" || cell.length <= 0) {
                msg += "Informe o seu numero de celular <br>"
            }
            if (cep == undefined || cep == "" || cep.length <= 0) {
                msg += "Informe o seu CEP <br>"
            }
            if (state == undefined || state == "" || state.length <= 0) {
                msg += "Informe o seu estado <br>"
            }
            if (city == undefined || city == "" || city.length <= 0) {
                msg += "Informe o nome da sua cidade <br>"
            }
            if (district == undefined || district == "" || district.length <= 0) {
                msg += "Informe seu bairro <br>"
            }
            if (road == undefined || road == "" || road.length <= 0) {
                msg += "Informe o nome da rua <br>"
            }
            if (number == undefined || number == "" || number.length <= 0) {
                msg += "Informe o numero da sua residencia <br>"
            }

            if (msg == "") {
                move_carousel("next");
                return true;
            }
            Swal.fire({
                icon: 'warning',
                title: msg,
            })
        }

        function valid_checkout() {
            if ($("#accept_terms").is(":checked")) {
                move_carousel("next");
                return true;
            }
            Swal.fire({
                icon: 'warning',
                title: 'Aceite os termos para continuar',
            })
        }
    </script>
@endsection
