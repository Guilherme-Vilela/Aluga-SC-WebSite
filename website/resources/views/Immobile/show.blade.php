@extends('Default.layout')
@section('content')
    {{-- {{dd($immobile->immobileAdress[0])}}; --}}
    <main class="container">
        <div class="row">
            <div class="col-sm-12">
                <p class="name_immobile h3">{{ $immobile->name }}</p>
            </div>
            <div class="col-12 text-left d-flex">
                <p class="attribute_immobile h6"><i class="fa-solid fa-star"></i>5</p>
                <p class="attribute_immobile h6">Comentarios</p>
                <p class="attribute_immobile h6"><i class="fa-solid fa-medal"></i> Pessoa validada</p>
                <p class="attribute_immobile h6"><i class="fa-solid fa-map-location"></i>
                    {{ $immobile->immobileAdress[0]->city }}, {{ $immobile->immobileAdress[0]->state }},
                    Brasil</p>
            </div>
        </div>
        <div class="row" style="margin-top: 25px;">
            <div class="col-12 content_immobile_header">
                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_images" style = "    position: absolute;">
                    Clique aqui para visuaizar todas as imagens
                </button>
                <img src="{{ url('storage/' . $immobile->images[0]->path_image) }}" class="image_immobile_header">
            </div>
        </div>
        <div class="row" style="margin-top: 25px;">
            {{-- Content left --}}
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            <h4>{{ $immobile->type }} (hospedado por {{ $immobile->user->name }}) </h4>
                        </div>

                        <div class="col-sm-12 d-flex">
                            <p class="m-1">Capacidade para <b>{{ $immobile->capacity }} Hóspedes </b>-</p>
                            @foreach ($immobile->roomImmobile as $room_immobile)
                                @if ($room_immobile->room->name == 'Quarto')
                                    <p class="m-1">{{ $room_immobile->quantity }} Quarto </p>
                                @endif
                                @if ($room_immobile->room->name == 'Banheiro')
                                    <p class="m-1">{{ $room_immobile->quantity }} Banheiro -</p>
                                @endif
                            @endforeach
                        </div>

                    </div>
                    <div class="col-sm-2">
                        <div class="image_people_immobile">
                            <img src="" style="width: 100%;">
                        </div>
                    </div>
                    {{-- description --}}
                    <div class="col-sm-12 mt-3 mb-3" style="border-top: 1px solid #ccc;">
                        <div class="col-sm-12 mt-2 p-0">
                            <h5>Um pouco sobre a residencia</h5>
                            <div class="col-sm-12">
                                <p>{{ $immobile->description }}</p>
                            </div>
                        </div>
                    </div>
                    {{-- to sleep --}}
                    <div class="col-sm-12 mt-3 mb-3" style="border-top: 1px solid #ccc;">
                        <div class="col-sm-12 mt-2 p-0">
                            <h5>Onde você vai dormir</h5>
                            <div class="col-sm-12">
                                <div class="col-sm-4 mt-2 pb-2 content_bed">
                                    <div class="d-flex mr-2 mt-2">
                                        <p class="m-1">
                                            <i class="fa-solid fa-bed fa-lg"></i>
                                        </p>
                                        <p class="m-1">
                                            <i class="fa-solid fa-couch fa-lg"></i>
                                        </p>

                                    </div>
                                    <h6>Quarto</h6>
                                    @foreach ($immobile->furnitureImmobile as $furniture_immobile)
                                        @if (!strcmp(trim($furniture_immobile->furniture->status), 'dormir') && $furniture_immobile->quantity > 0)
                                            <p style="font-size:14px;">
                                                {{ $furniture_immobile->quantity . ' ' . $furniture_immobile->furniture->name }}
                                            </p>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mt-3 mb-3" style="border-top: 1px solid #ccc;">
                        <div class="col-sm-12 mt-2 p-0">
                            <h5>Comodidades oferecidas pela residencia</h5>
                            <div class="row justify-content-between ml-1">
                                @foreach ($immobile->furnitureImmobile as $furniture_immobile)
                                    @if (!strcmp(trim($furniture_immobile->furniture->status), 'conveniencia'))
                                        <div class="col-sm-3 m-1 content_bed text-center ">
                                            <img src="{{ asset('icons/solid/' . $furniture_immobile->furniture->icon) }}"
                                                width="30" height="24" class="mt-2">
                                            <p class=" h6 mb-2 mt-2" style="font-weight: bold;font-size: 14px;">
                                                {{ $furniture_immobile->furniture->name }}
                                            </p>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mt-3 mb-3" style="border-top: 1px solid #ccc;">
                        <div class="col-sm-12 mt-2 p-0">
                            <h5>Comodos da residencia</h5>
                            <div class="row justify-content-between ml-1">
                                @foreach ($immobile->roomImmobile as $room_immobile)
                                    @if (!strcmp(trim($room_immobile->room->status), 'comodo'))
                                        <div class="col-sm-3 m-1 content_bed text-center ">
                                            <img src="{{ asset('icons/solid/' . $room_immobile->room->icon) }}"
                                                width="30" height="24" class="mt-2">
                                            <p class=" h6 mb-2 mt-2" style="font-weight: bold;font-size: 14px;">
                                                {{ $room_immobile->room->name }}
                                            </p>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mt-3 mb-3" style="border-top: 1px solid #ccc;">
                        <div class="col-sm-12 mt-2 p-0">
                            <h5>Regras da residencia</h5>
                            <div class="col-sm-12">
                                <p>{{ $immobile->rules }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mt-3 mb-3" style="border-top: 1px solid #ccc;">
                        <div class="col-sm-12 mt-2 p-0">
                            <h5>Localização</h5>
                            <div class="col-sm-12 d-flex justify-content-center mt-3">
                                {{-- <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56965.53095214268!2d-49.347034257598025!3d-26.828955306060656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94defc1aca81c1fd%3A0x8cab0e2b01ca5bd8!2zVGltYsOzLCBTQywgODkxMjAtMDAw!5e0!3m2!1spt-BR!2sbr!4v1658105943258!5m2!1spt-BR!2sbr"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-1"></div>

            <div class="col-sm-3 content_rigth_immbile">
                <div class=" m-1 p-1">
                    <div class="d-flex align-items-center">
                        <p class="mt-1 h4 pr-1"><b>R${{ number_format($immobile->value, 2, ',', '.') }} </b> </p>
                        <p class="mt-1 h5"> / noite</p>
                    </div>
                    <div class="d-flex mb-1" style="font-size: 14px;">
                        <p class=" pr-2"><i class="fa-solid fa-star"></i>5</p>
                        <a class="pl-2" style="">Comentarios</a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-10 option_reserve ">
                        <div class="row p-1 ">
                            <label class="pl-1 mt-1 mb-0 title_check " style="font-size:15px;"><b>Check-in e
                                    Checkout</b></label>
                            <input type="text" name="date-range" value="12/07/2022 - 12/07/2022" class="form-control"
                                id="when_agend" />
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button class="btn btn-danger btn_reserve mt-2 mb-2">Reservar</button>
                </div>
                <div class="col-12 " style="border-top:1px solid #ccc;">
                    <p class="mt-1">Valor total a pagar : <b>R$<span id="amount"><span></b></p>
                </div>
            </div>
        </div>
        </div>
    </main>
  

    <!-- Modal images-->
    <div class="modal fade" id="modal_images" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Todas as imagens do imovel</h5>
                  
                </div>
                <div class="modal-body">
                    <button type="button" class="close btn-primary m-3" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                    <div class="container">
                        <div class="row justify-content-center">
                            @foreach ($immobile->images as $image)
                                <img src="{{ url('storage/' . $image->path_image) }}" class="image_immobile_header m-2">
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#when_agend').daterangepicker({
            "locale": {
                "format": "DD/MM/YYYY",
                "separator": " - ",
                "applyLabel": "Aplicar",
                "cancelLabel": "Cancelar",
                "fromLabel": "From",
                "toLabel": "To",
                "customRangeLabel": "Custom",
                "weekLabel": "W",
                "daysOfWeek": [
                    "dom",
                    "seg",
                    "terç",
                    "qua",
                    "qui",
                    "sex",
                    "Sáb"
                ],
                "monthNames": [
                    "Janeiro",
                    "Fevereiro",
                    "Março",
                    "Abril",
                    "Maio",
                    "Junho",
                    "Julho",
                    "Agosto",
                    "Setembro",
                    "Outubro",
                    "Novembro",
                    "Dezembro"
                ],
                "firstDay": 1
            },
            "startDate": "07/07/2022",
            "endDate": "08/07/2022"
        }, function(start, end, label) {});
        $(document).ready(function() {
            checkdate();
            $("#when_agend").click(function() {
                checkdate();
            })
            $("#when_agend").change(function() {
                checkdate();
            })
        })

        function checkdate() {
            let data = $("#when_agend").val().trim();
            let value = "{{ $immobile->value }}";
            let checkin = new Date(data.substring(6, 10), data.substring(3, 5) - 1, data.substring(0, 2));
            let checkout = new Date(data.substring(19, 23), data.substring(16, 18) - 1, data.substring(13, 15));
            let amount = (value * ((checkout - checkin) / 86400000)).toFixed(2);
            amount = amount.toString().replace('.', ',');
            $("#amount").text(amount);
        }
    </script>
    
@endsection
