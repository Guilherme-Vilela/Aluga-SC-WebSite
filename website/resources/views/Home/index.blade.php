@extends('Default.layout')
@section('content')
    <main class="container mt-5">
        <div class="row">

            @foreach ($immobiles as $immobile)
                <article class="col-lg-3 mt-3 mb-3" style="">
                    <div class="image_content ">
                        <a class="carousel-control-prev" value="{{ $immobile['id'] }}" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" value="{{ $immobile['id'] }}" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <div id="carrosel{{ $immobile['id'] }}" class="carousel slide">

                            <ol class="carousel-indicators">

                                <li data-target="#carrosel{{ $immobile['id'] }}" data-slide-to="0" class="active"></li>
                                <li data-target="#carrosel{{ $immobile['id'] }}" data-slide-to="1"></li>
                                <li data-target="#carrosel{{ $immobile['id'] }}" data-slide-to="2"></li>

                            </ol>
                            <a href="{{ route('immobile.show', ['immobile' => $immobile['id']]) }}">
                                <div class="carousel-inner">
                                    {{ $i = 0 }}
                                    @foreach ($immobile->images as $image)
                                        {{ $i++ }}
                                        @if ($i == 1)
                                            <div class="carousel-item active">
                                            @else
                                                <div class="carousel-item ">
                                        @endif
                                        <img class="d-block" style="height:200px;"
                                            src="{{ url('storage/' . $image->path_image) }}">
                                </div>
            @endforeach
        </div>
        </a>
        </div>
        </div>
        <div class="texto" style="padding: 0px !impotant;">
            <div class="d-flex justify-content-star">
                <a href="" class="col-8 p-0"><strong>{{$immobile->immobileAdress[0]->city }}, {{ $immobile->immobileAdress[0]->state}} </strong></a>
                <div class="col-4 p-0 text-right">
                    <a href="" class="p-0 text-right">5 <i class="fa-solid fa-star text-right p-0"></i></a>
                </div>
            </div>
            <a href="" class="col-12 p-0 ">{{ $immobile['name'] }}</a>
            <br>
            <a href="" class="col-12 p-0">R${{ $immobile['value'] }}/Noite</a>
        </div>
        </article>
        @endforeach
        </div>
    </main>
    <script>
        $(document).ready(function() {
            $(".carousel-control-prev").click(function() {
                let carrosel = "#carrosel" + $(this).attr("value");
                $(carrosel).carousel('prev');
                $(carrosel).carousel('pause');
            })
            $(".carousel-control-next").click(function() {
                let carrosel = "#carrosel" + $(this).attr("value");
                $(carrosel).carousel('next');
                $(carrosel).carousel('pause');
            })
            // $("#carouselExampleIndicators").carousel('pause');
        });
    </script>
@endsection
