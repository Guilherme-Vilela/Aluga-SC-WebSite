@extends('Default.layout')
@section('content')
<script src="{{asset('js/Default/register.js')}}"></script>
<!DOCTYPE html>

<head>


</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="form-horizontal">

                    <div class="panel panel-primary">
                        <div class="panel-heading">Cadastro de Usuário
                        </div>

                        <div class="panel-body">
                            <div class="form-group">
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>
                                    <div class="col-md-9">
                                        <input id="Nome" name="Nome" placeholder="" class="form-control input-md"
                                            required="" type="text">
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="Nome">CPF <h11>*</h11></label>
                                    <div class="col-md-5">
                                        <input id="cpf" name="cpf" placeholder="Apenas números"
                                            class="form-control input-md" required="" type="text" maxlength="11"
                                            pattern="[0-9]+$">
                                    </div>
                                    <!-- Prepended text-->
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="prependedtext">Telefone <h11>*</h11>
                                            </label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i
                                                        class="glyphicon glyphicon-earphone"></i></span>
                                                <input id="prependedtext" name="prependedtext" class="form-control"
                                                    placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13"
                                                    pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                                    OnKeyPress="formatar('## #####-####', this)">
                                            </div>
                                        </div>
                                        <!-- Text input-->

                                        <label class="col-md-1 control-label" for="prependedtext">Telefone</label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i
                                                        class="glyphicon glyphicon-earphone"></i></span>
                                                <input id="prependedtext" name="prependedtext" class="form-control"
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
                    <div class="row">
                        <div class="col-md-5">
                            <label class="control-label" for="CEP">CEP <h11>*</h11></label>
                            <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md"
                                required="" value="" type="search" maxlength="8" pattern="[0-9]+$" onkeydown="pesquisacep(value)">
                        </div>
                        <div class="col-md-5">
                            <button type="button" style="margin-top:24px;" class="btn btn-primary"
                                onclick="pesquisacep(cep.value)">Pesquisar</button>
                        </div>
                    </div>
                </div>


                <!-- Prepended text-->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="prependedtext">Rua</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input id="rua" name="rua" class="form-control" placeholder="" required=""
                                readonly="readonly" type="text">
                        </div>
                    </div>

                </div>
                <!-- Text input-->
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-4">
                            <span class="input-group-addon">Nº <h11>*</h11></span>
                            <input id="numero" name="numero" class="form-control" placeholder="" required=""
                                type="text">
                        </div>
                        <div class="col-md-5">
                            <span class="input-group-addon">Bairro</span>
                            <input id="bairro" name="bairro" class="form-control" placeholder="" required=""
                                readonly="readonly" type="text">
                        </div>
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <div class="col-md-9">
                        <span class="input-group-addon">Complemento</span>
                        <input id="bairro" name="complemento" class="form-control" placeholder="" required=""
                            readonly="readonly" type="text">
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <div class="form-row">

                        <div class="col-md-7">
                            <div class="input-group">
                                <label class=" col-md-12  control-label" for="prependedtext">Cidade</label>
                                <input id="cidade" name="cidade" class="form-control " placeholder="" required=""
                                    readonly="readonly" type="text">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="col-md-12 control-label" for="prependedtext">Estado</label>
                            <div class="input-group">
                                <input id="estado" name="estado" class="form-control" placeholder="" required=""
                                    readonly="readonly" type="text">
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="Cadastrar"></label>
                    <div class="col-md-8">
                        <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
                        <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
                    </div>
                </div>

            </div> |
        </div>
    </div>




    @endsection