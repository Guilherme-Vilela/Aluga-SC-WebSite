<footer class="bg-light text-center text-lg-start">

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright:
        <a class="text-dark" href="">CEDUP</a>
    </div>
    <!-- Copyright -->

    <div class="container-fluid container_cookie hidden-xs  " style="z-index: 10000;" id="container_cookie">
        <div class="col-sm-6 texto_cookie">
            <p style="margin:0px; padding-right:10px;cursor:default">Este site usa cookies para melhorar a sua
                experiência de uso </p>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-4 botoes_cookie " style="display: flex; justify-content: flex-end;align-items: center;">
            <div class="cookie_aceitar" id="aceita_cookie"><button
                    style="color:black;background-color: #f1d600; border: none; "> Aceitar </button></div>
            <button data-toggle="modal" data-target="#cookies_modal"
                style="background-color: #383b75; font-size: 15px; color: white; padding: 0px 10px; border: none;"> <i
                    class="fas fa-sliders-h " style="padding-right: 2px; "></i> Preferências </button>
        </div>


    </div>
    <div class="modal fade" id="cookies_modal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document" style="font-size: 15px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titulo_modal_colchao" id="TituloModalCentralizado">Gerenciar Cookies</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div>
                        <h3>Este site usa cookies</h3>
                        <p>Para melhorar sua experiência em nosso site, usamos cookies para examinar o tráfego do site e
                            habilitar recursos adicionais, como interação de mídia social e marketing. Saiba mais em
                            nossa Privacidade.</p>
                    </div>
                    <div class="">
                        <div class="col-md-7" style="display:flex; justify-content: center; align-content: center;">
                            <label id="cookie_google">Cookies google analytics +</label>

                        </div>
                        <div class="col-md-5 botoes_aceita_cookie"
                            style="display: flex;justify-content: flex-end; align-content: flex-end;">
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </div>
                        <div class="col-md-7">
                            <p style="display: none" id="texto_google">Os cookies usados para funcionalidade permitem a
                                interação dos usuários com um serviço ou site para acessar recursos considerados
                                fundamentais. Esses recursos incluem preferências de idioma, otimizações de produto para
                                manter e melhorar um serviço e a manutenção de informações relacionadas à sessão do
                                usuário, como o conteúdo de um carrinho de compras.</p>
                        </div>
                    </div>
                    <div class="col-sm-7"></div>
                    <div class="col-sm-5" style="display:flex;">

                        <button type="button " style="margin-right: 30px;" class="botoes_model_cookie"
                            data-dismiss="modal">Fechar</button>
                        <button type="button" class="botoes_model_cookie">Confirmar</button>

                    </div>
                    </form>
                </div>

                <div class="modal-footer" style="border: none;">

                </div>
            </div>
        </div>
    </div>

</footer>

<script>
    let cookie_google = document.getElementById('cookie_google');
    let texto_google = document.getElementById('texto_google');
    cookie_google.addEventListener("click", function() {
        if (texto_google.style.display == "none") {
            texto_google.style.display = "flex";
        } else {
            texto_google.style.display = "none";
        }
    });
</script>
<script>
    let aceita_cookie = document.getElementById('aceita_cookie');
    let container_cookie = document.getElementById('container_cookie');

    if (localStorage.getItem("_cookie") == "sim" || localStorage.getItem("_cookie") == "nao") {
        container_cookie.style.display="none";
        container_cookie1.style.display="none";
    }

    aceita_cookie.addEventListener("click", function() {
        localStorage.setItem("_cookie", "sim");
        container_cookie.style.display = "none";
    });
</script>
