@extends('Default.layout')
@section('content')
    <main class="container">
        <div class="row">
            <div class="col-sm-12">
                <p class="name_immobile h3">Cabana "Nonna Lourdes"</p>
            </div>
            <div class="col-12 text-left d-flex">
                <p class="attribute_immobile h6"><i class="fa-solid fa-star"></i>4,96</p>
                <p class="attribute_immobile h6">Comentarios</p>
                <p class="attribute_immobile h6"><i class="fa-solid fa-medal"></i> Pessoa validada</p>
                <p class="attribute_immobile h6"><i class="fa-solid fa-map-location"></i> Doutor Pedrinho, Santa Catarina,
                    Brasil</p>
            </div>
        </div>
        <div class="row" style="margin-top: 25px;">
            <div class="col-12 content_immobile_header">
                <img src="https://a0.muscache.com/im/pictures/miso/Hosting-46656816/original/ccef770f-091e-4c00-946a-94bf1f451281.jpeg?im_w=1200"
                    class="image_immobile_header">
            </div>
        </div>
        <div class="row" style="margin-top: 25px;">
            {{-- Content left --}}
            <div class="col-sm-8">
                <div class="row" style="">
                    {{-- HEADER --}}
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            <p class="h4">Espaço inteiro: cabana (hospedado por Fabricio) </p>
                        </div>
                        <div class="col-sm-12 d-flex">
                            <p class="m-1">4 hóspedes </p>
                            <p class="m-1">1 quarto </p>
                            <p class="m-1">2 camas </p>
                            <p class="m-1">1 banheiro </p>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="image_people_immobile">
                            <img src="https://a0.muscache.com/im/pictures/user/767657d2-9f24-40db-ab00-9c2a2156f182.jpg?im_w=240"
                                style="width: 100%;">
                        </div>
                    </div>
                </div>
                {{-- important details --}}
                <div class="col-sm-12 mt-2" style="border-top: 1px solid #ccc;">
                    <div class="col-sm-12 mt-2">
                        <div class="row">
                            <div class="p-0" style=" width:20px;">
                                <i class="fa-solid fa-certificate"></i>
                            </div>
                            <div class="col-sm-11">
                                <p><b> Fabricio é um Superhost</b></p>
                                <p style="font-size: 14px;">Superhosts são anfitriões experientes e muito bem avaliados,
                                    comprometidos em fornecer estadias excelentes para seus hóspedes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mt-2">
                        <div class="row">
                            <div class="p-0" style=" width:20px;">
                                <i class="fa-solid fa-certificate"></i>
                            </div>
                            <div class="col-sm-11">
                                <p><b> Ótima localização</b></p>
                                <p style="font-size: 14px;">100% dos hóspedes recentes deram 5 estrelas à localização.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mt-2">
                        <div class="row">
                            <div class="p-0" style=" width:20px;">
                                <i class="fa-solid fa-certificate"></i>
                            </div>
                            <div class="col-sm-11">
                                <p><b> Cancelamento gratuito antes de 24 de novembro</b></p>
                                <p style="font-size: 14px;"></p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- description --}}
                <div class="col-sm-12 mt-3" style="border-top: 1px solid #ccc;">
                    <div class="col-sm-12 mt-2 p-0">
                        <p><b>Um pouco sobre a residencia</b></p>
                        <div class="col-sm-12">
                            <p>Cabana muito aconchegante, no centro de Doutor Pedrinho, com fácil acesso a todas as belezas
                                naturais do município. Sua localização privilegiada, no alto de um morro, proporciona a mais
                                bela vista da cidade. Projetada com amplo uso de vidro, para favorecer a imersão à natureza.
                                Possui lareira e ofurô com hidromassagem, para total relaxamento dos hospedes. Fornecemos
                                todos os utensílios básicos para uma estadia confortável. Ideal para descansar e curtir a
                                paisagem exuberante da região!</p>
                        </div>
                    </div>
                </div>
                {{-- to sleep --}}
                <div class="col-sm-12 mt-3" style="border-top: 1px solid #ccc;">
                    <div class="col-sm-12 mt-2 p-0">
                        <p><b>Onde você vai dormir</b></p>
                        <div class="col-sm-12">
                            <div class="col-sm-4 mt-2 content_bed">
                                <div class="d-flex mr-2 mt-2">
                                    <p class="m-1">
                                        <i class="fa-solid fa-bed fa-lg"></i>
                                    </p>
                                    <p class="m-1">
                                        <i class="fa-solid fa-couch fa-lg"></i>
                                    </p>

                                </div>
                                <div>
                                    <p class="h5"><b>Quarto</b></p>
                                    <p style="font-size:14px;">1 cama de casal, 1 sofá </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 mt-3" style="border-top: 1px solid #ccc;"></div>

            </div>
            <div class="col-sm-1"></div>

            {{-- Content rigth --}}
            <div class="col-sm-3 content_rigth_immbile">
                <div class=" m-1 p-1">
                    <div class="d-flex align-items-center">
                        <p class="mt-1 h4 pr-1"><b>R$279 </b> </p>
                        <p class="mt-1 h5"> / noite</p>
                    </div>
                    <div class="d-flex mb-1" style="font-size: 14px;">
                        <p class=" pr-2"><i class="fa-solid fa-star"></i>4,5 </p>
                        <a class="pl-2" style="">Comentarios</a>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">

                    <div class="col-sm-5 option_reserve border-radius-top-left">
                        <div class="row p-1">
                            <p class="pl-1 mt-1 mb-0 title_check"><b>Check-in</b></p>
                            <p class="pl-1 title_check">13/08/2022</p>
                            <input type="date" class="" style="display:none">
                        </div>
                    </div>
                    <div class="col-sm-5 option_reserve  border-radius-top-rigth">
                        <div class="row p-1">
                            <p class="pl-1 mt-1 mb-0 title_check"><b>Check-out</b></p>
                            <p class="pl-1 title_check">13/08/2022</p>
                            <input type="date" class="" style="display:none">
                        </div>
                    </div>

                    <div class="col-sm-10 option_reserve  border-radius-bottom" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="row p-1" >
                            <div class ="col-12 p-0">
                            <p class="pl-1 mt-1 mb-0 title_check"><b>Hospedes</b></p>
                            </div>
                            <div class ="col-12 p-0">
                            <p class="pl-1 title_check">1 Hospede</p>
                            </div>
                            <input type="date" class="" style="display:none">
                        </div>
                            <input type="text" name="response_people"
                                class="nav-link dropdown-toggle border_radius button_header" href="#" id="navbar_people"
                                placeholder=" Quantas pessoas?" style="display:none;" />
                        <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown"
                            id="dropdown-menu-people" style="width:100%;">
                            <div class="d-flex">
                                <div class=" col-sm-6">
                                    <p class="dropdown_title_people">Adultos</p>
                                    <p class="dropdown_sub_title_people">12 anos ou mais</p>
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
                            <div class="dropdown-divider"></div>
                            <div class="d-flex">
                                <div class=" col-sm-6">
                                    <p class="dropdown_title_people">Crianças</p>
                                    <p class="dropdown_sub_title_people">De 2 até 12 anos </p>
                                </div>
                                <div class="d-flex col-sm-6 justify-content-center align-items-center">
                                    <i class="fa-solid fa-circle-minus fa-xl icon_people button_decrease"
                                        data-target="number_children"></i>
                                    <p id="number_children">
                                        @if (!empty($children))
                                            {{ $children }}
                                        @else
                                            0
                                        @endif
                                    </p>
                                    <i class="fa-solid fa-circle-plus fa-xl icon_people button_add"
                                        data-target="number_children"></i>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="d-flex">
                                <div class=" col-sm-6">
                                    <p class="dropdown_title_people">Pets</p>
                                    <p class="dropdown_sub_title_people"></p>
                                </div>
                                <div class="d-flex col-sm-6 justify-content-center align-items-center">
                                    <i class="fa-solid fa-circle-minus fa-xl icon_people button_decrease"
                                        data-target="number_pets"></i>
                                    <p id="number_pets">
                                        @if (!empty($pets))
                                            {{ $pets }}
                                        @else
                                            0
                                        @endif
                                    </p>
                                    <i class="fa-solid fa-circle-plus fa-xl icon_people button_add"
                                        data-target="number_pets"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button class="btn btn-danger btn_reserve mt-2 mb-2">Reservar</button>
                    </div>
                    <div class="col-12 " style="border-top:1px solid #ccc;">
                        <p class="mt-1">Valor total</p>
                        <p class="mt-1">Valor por notite total</p>
                        <p class="mt-1">Taxa de servico</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
