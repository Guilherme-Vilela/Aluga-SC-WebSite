@extends('Default.layout')
@section('content')
    <script src="{{ asset('js/Default/register.js') }}"></script>
    <!DOCTYPE html>

    <head>


    </head>

    <body>
        <div class="container">
            <div> <h2 class = "text-justify ">Cadastro de Usuário</h2> </div>
            <div class="row">
                <div class="col-md-6">
                    <form class="form-horizontal">
                       
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                            </div>

                            <div class="panel-body">
                                <div class="form-group">
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="Name">Nome </label>
                                        <div class="col-md-9">
                                            <input id="name" name="name" placeholder=""
                                                class="form-control input-md" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="Name">Email </label>
                                        <div class="col-md-9">
                                            <input id="email" name="email" placeholder=""
                                                class="form-control input-md" required="" type="text" disabled value = "{{$user->email}}">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="Name">CPF </label>
                                        <div class="col-md-5">
                                            <input id="cpf" name="cpf" placeholder="Apenas números"
                                                class="form-control input-md" required="" type="text" maxlength="11"
                                                pattern="[0-9]+$" onkeyup="validarCPF(value)">
                                        </div>
                                        <!-- Prepended text-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="prependedtext">Telefone
                                            </label>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="glyphicon glyphicon-earphone"></i></span>
                                                    <input id="prependedtext" name="prependedtext" class="form-control"
                                                        placeholder="XX XXXXX-XXXX" required="" type="text"
                                                        maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                                        OnKeyPress="formatar('## #####-####', this)">
                                                </div>
                                            </div>
                                            <!-- Text input-->

                                            <label class="col-md-1 control-label" for="prependedtext">Telefone</label>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="glyphicon glyphicon-earphone"></i></span>
                                                    <input id="prependedtext_" name="prependedtext" class="form-control"
                                                        placeholder="XX XXXXX-XXXX" type="text" maxlength="13"
                                                        pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                                        OnKeyPress="formatar('## #####-####', this)">
                                                </div>
                                            </div>
                                            <label class="col-md-1 control-label" for="prependedtext"></label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <label for="img">Selecionar imagem:</label>
                                                    <input type="file" id="img" name="img" accept="image/*">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- Search input-->
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-row">

                            <div class="col-6">
                                <label class="control-label" for="CEP">CEP </label>
                                <input id="cep" name="cep" placeholder="Apenas números"
                                    class="form-control input-md" required="" value="" type="search"
                                    maxlength="8" pattern="[0-9]+$" onkeyup="pesquisacep(value)">
                            </div>
                        </div>
                    </div>
                    <!-- Prepended text-->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="input-group">
                                <label class="col-md-12 control-label" for="prependedtext">Rua</label>
                                <input id="road" name="road" class="form-control" placeholder="" required=""
                                    readonly="readonly" type="text">
                            </div>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-4">
                                <span class="input-group-addon">Nº </span>
                                <input id="number" name="number" class="form-control" placeholder="" required=""
                                    type="text">
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <span class="input-group-addon">Bairro</span>
                                    <input id="district" name="district" class="form-control" placeholder=""
                                        required="" readonly="readonly" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-12">
                                <span class="input-group-addon">Complemento</span>
                                <input id="complement" name="complement" class="form-control" placeholder=""
                                    required="" readonly="readonly" type="text">
                            </div>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <div class="form-row">

                            <div class="col-md-7">
                                <div class="input-group">
                                    <label class=" col-md-12  control-label" for="prependedtext">Cidade</label>
                                    <input id="City" name="City" class="form-control " placeholder=""
                                        required="" readonly="readonly" type="text">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="col-md-12 control-label" for="prependedtext">Estado</label>
                                <div class="input-group">
                                    <input id="state" name="state" class="form-control" placeholder=""
                                        required="" readonly="readonly" type="text">
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="register"></label>
                        <div class="col-md-8">
                            <button id="register" name="register" class="btn btn-success"
                                type="Submit">Cadastrar</button>
                            <button id="Cancelar" name="Cancelar" class="btn btn-danger"
                                type="Reset">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
