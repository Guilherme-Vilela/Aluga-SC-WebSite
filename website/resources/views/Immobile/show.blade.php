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
                <img src="{{ url('storage/' . $immobile->images[0]->path_image) }}" class="image_immobile_header">
            </div>
        </div>
        <div class="row" style="margin-top: 25px;">
            {{-- Content left --}}
            <div class="col-sm-8">
                <div class="row" style="">
                    {{-- HEADER --}}
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            <p class="h4">{{ $immobile->type }} (hospedado por {{ $immobile->user->name }}) </p>
                        </div>

                        <div class="col-sm-12 d-flex">
                            <p class="m-1">{{ $immobile->capacity }} Hóspedes -</p>
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
                </div>
                {{-- important details --}}
                <div class="col-sm-12 mt-2" style="border-top: 1px solid #ccc;">
                </div>
                {{-- description --}}
                <div class="col-sm-12 mt-3" style="border-top: 1px solid #ccc;">
                    <div class="col-sm-12 mt-2 p-0">
                        <p><b>Um pouco sobre a residencia</b></p>
                        <div class="col-sm-12">
                            <p>{{$immobile->description}}</p>
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
                        <p class="mt-1 h4 pr-1"><b>R${{$immobile->value}} </b> </p>
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

                    <div class="col-sm-10 option_reserve  border-radius-bottom" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <div class="row p-1">
                            <div class="col-12 p-0">
                                <p class="pl-1 mt-1 mb-0 title_check"><b>Hospedes</b></p>
                            </div>
                            <div class="col-12 p-0">
                                <p class="pl-1 title_check">1 Hospede</p>
                            </div>
                            <input type="date" class="" style="display:none">
                        </div>
                        <input type="text" name="response_people"
                            class="nav-link dropdown-toggle border_radius button_header" href="#"
                            id="navbar_people_show" placeholder=" Quantas pessoas?" style="display:none;" />
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
                        <p class="mt-1">Valor por noite total</p>
                        <p class="mt-1">Taxa de servico</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
