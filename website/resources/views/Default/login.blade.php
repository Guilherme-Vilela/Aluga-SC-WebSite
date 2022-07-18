<div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="h5"><i class="fa-solid fa-map-location-dot fa-3x"></i> <b>Aluga-SC</b></p>
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container">
                    <h6 class="text-center h5" >Bem-vindo!</h6>
                    <h6 class="text-center h5 "id = "mensage_login" ></h6>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row col-sm-12 ">
                            <label class=""><b>Email</b></label>
                            <input type="email" class="input_login" name="email" placeholder=""
                                autocomplete="username" required>
                        </div>
                        <div class="form-group row col-sm-12 ">
                            <label class=""><b>Senha</b></label>
                            <input type="password" class="input_login" autocomplete="current-password" name="password"
                                placeholder="" required>
                            <div class="col-sm-12 text-right">
                                <a href="#" class="loss_password">Esqueci minha senha</a>
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="form-group row">
                            <div class="col-sm-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-dark btn_login">Entrar</button>
                            </div>
                            <div class=" button_login_google col-sm-12 d-flex justify-content-center mt-3   "> 
                                <a href="{{route("login.google")}}" class="col-sm-9"> <img src = "{{asset('images/login_google.png')}}"></a>
                            </div>
                            <div class="col-sm-10 mt-5">
                                <a id="btn_login_register" class="txt-center ls-login-signup"
                                    style="cursor: pointer;">Não possui cadastro? <b>Cadastre-se
                                        aqui</b></a>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
        <div class="modal-footer"></div>
    </div>
</div>
<script>
$('#modal_login').on('hidden.bs.modal', function (e) {
  $("#mensage_login").text("");
})
</script>
