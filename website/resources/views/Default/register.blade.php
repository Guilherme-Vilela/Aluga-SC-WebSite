<div class="modal fade" id="modal_cadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p><i class="fa-solid fa-map-location-dot fa-3x"></i> <b>Aluga-SC</b></p>
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container">
                    <form method="get" action="{{route("user.create")}}">
                        @csrf
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label "><b>Nome</b></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control border_radius" id="input_password" name = "name"
                                    placeholder="Digite sua Senha" required>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="inputEmail3" class="col-sm-2 col-form-label "><b>Email</b></label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control border_radius" id="input_email" name = "email"
                                    placeholder="Digite seu Email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label "><b>Senha</b></label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control border_radius" id="input_password" name = "password"
                                    placeholder="Digite sua Senha" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-dark input_botaologin">Cadastre-se</button>
                            </div>
                            <div class="col-sm-10">
                                <p class="txt-center ls-login-signup"><b>Ainda não possui cadastro no Aluga-SC?</b></p>
                                <a href="#">Cadastre-se agora</a>
                                <link rel="stylesheet" type="text/css"
                                    href="//fonts.googleapis.com/css?family=Open+Sans" />

                                <div class="col-md-12"> <a
                                        class="btn btn-lg btn-google btn-block text-uppercase btn-outline" href="#"><img
                                            src="https://img.icons8.com/color/16/000000/google-logo.png"> Inscreva-se usando o Google</a> </div>
                            </div>
                        </div>

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