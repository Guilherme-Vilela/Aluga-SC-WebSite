<div class="modal fade" id="modal_register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="h5"><i class="fa-solid fa-map-location-dot fa-3x"></i> <b>Aluga-SC</b></p>
                <h5 class="modal-title" id=""></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container">
                    <h6 class="text-center h5">Bem-vindo!</h6>
                    <form method="get" action="{{ route('user.create') }}">
                        @csrf
                        <div class="form-group row col-sm-12">
                            <label class=" "><b>Nome</b></label>
                            <input type="text" class="input_login" name="name" placeholder="Digite seu nome"
                                required>
                        </div>
                        <div class="form-group row col-sm-12">
                            <label for="" class=" "><b>Email</b></label>
                            <input type="email" class="input_login" id="input_email" name="email"
                                autocomplete="username"placeholder="Digite seu Email" required>
                        </div>
                        <div class="form-group row col-sm-12">
                            <label for="" class=""><b>Senha</b></label>
                            <input type="password" class="input_login" minlength="8" name="password"
                                placeholder="Digite sua Senha"autocomplete="current-password" required>
                        </div>
                        <div class="form-group row col-sm-12">
                            <label for="" class=""><b>Confirmação de Senha</b></label>
                            <input type="password" class="input_login current-password" minlength="8" name="password"
                                placeholder="Digite novamente sua senha" required autocomplete="current-password">
                        </div>
                        <div class="form-group row col-sm-12">
                            <div class="col-sm-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-dark btn_login">Cadastrar-<span
                                        style="text-transform: lowercase;">se</span></button>
                            </div>
                            <div class="col-sm-10 mt-5">
                                <a class="txt-center ls-login-signup" id="btn_register_login" style="cursor: pointer">Já
                                    possui cadastro? <b>Entre
                                        aqui</b></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
