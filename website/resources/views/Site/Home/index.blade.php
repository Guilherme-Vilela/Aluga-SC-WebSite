@extends('site.Default.layout')
@section('content')
    <main class="container mt-5" >
        <div class="row">
            @for ($i = 0; $i < 10; $i++)
                <article class="col-lg-3 mt-3 mb-3"   style = "">
                    <div class="image_content ">
                      <a class="carousel-control-prev"  value = "{{$i}}" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" value = "{{$i}}" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                      <div id="carrosel{{$i}}" class="carousel slide">
                        
                        <ol class="carousel-indicators"> 
                          <li data-target="#carrosel{{$i}}" data-slide-to="0" class="active"></li>
                          <li data-target="#carrosel{{$i}}" data-slide-to="1"></li>
                          <li data-target="#carrosel{{$i}}" data-slide-to="2"></li>
                         
                        </ol>
                        <a href="#">
                        <div class="carousel-inner" >
                          <div class="carousel-item active ">
                            <img class="d-block" style = "height:200px;" src="https://cdn.pixabay.com/photo/2017/09/09/18/25/living-room-2732939_960_720.jpg" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block" style = "height:200px;" src="https://cdn.pixabay.com/photo/2016/12/06/14/33/log-cabin-1886620_960_720.jpg" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block" style = "height:200px;" src="https://cdn.pixabay.com/photo/2017/08/27/10/16/interior-2685521_960_720.jpg" alt="Third slide">
                          </div>
                        </div>
                      </a>
                      </div>
                    </div>
                    <div class="texto" style = "padding: 0px !impotant;">
                      <div class = "d-flex justify-content-star" >
                      <a href = "" class = "col-8 p-0"><strong>Timbó, Vaje do itajai</strong></a>
                      <div class = "col-4 p-0">
                      <a href = "" class = "p-0 text-right">5 <i class="fa-solid fa-star text-right p-0"></i></a>
                      </div>
                      </div>
                      <a href = "" class = "col-12 p-0 ">Destaque por sua hospitalidade</a>
                      <a href = "" class = "col-12 p-0">Julho 05 - 22 </a>
                      <a href = "" class = "col-12 p-0">R$ 500,00 / Noite</a>
                    </div>
                </article>
            @endfor
        </div>
    </main>
    <script>
      $(document).ready(function(){
        $(".carousel-control-prev").click(function(){
          let carrosel = "#carrosel" + $(this).attr("value");
          $(carrosel).carousel('prev');
          $(carrosel).carousel('pause');
        })
        $(".carousel-control-next").click(function(){
          let carrosel = "#carrosel" + $(this).attr("value");
          $(carrosel).carousel('next');
          $(carrosel).carousel('pause');
        })
        // $("#carouselExampleIndicators").carousel('pause');
});
      </script>
@endsection
