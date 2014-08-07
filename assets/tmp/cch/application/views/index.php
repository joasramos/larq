<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Registro de Artefatos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
        <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
        <!--script src="js/less-1.3.3.min.js"></script-->
        <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

        <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/style.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url() ?>assets/img/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url() ?>assets/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url() ?>assets/img/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?= base_url() ?>assets/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.png">

        <link href="<?= base_url() ?>assets/jquery-ui/css/south-street/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">

        <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/scripts.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/index.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/jquery-ui/js/jquery-ui-1.10.4.custom.min.js"></script>

    </head>

    <body>
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12 column">                   
                    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 
                            <a class="navbar-brand" href="#">Home</a>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="#">Galeria</a>
                                </li>
                                <li>
                                    <a href="#">Informações</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastro<strong class="caret"></strong></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Artefatos</a>
                                        </li>
                                        <li>
                                            <a href="#">Usuários</a>
                                        </li>
                                        <li>
                                            <a href="#">Novos parceiros</a>
                                        </li>
                                        <li class="divider">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <form class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control">
                                </div> <button type="submit" class="btn btn-default">Pesquisar</button>
                            </form>
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="#">Sobre nós</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contato<strong class="caret"></strong></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Departamento</a>
                                        </li>
                                        <li>
                                            <a href="#">Coordenação</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </nav>
                </div>
            </div>

            <div id="div-selecionado" title="Artefato Selecionado">

            </div>

            <div class="row clearfix" style="margin-top: 80px">
                <div class="col-md-12 column">
                    <table class="table table-bordered table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Nº Inventário
                                </th>
                                <th>
                                    Natureza da Peça
                                </th>
                                <th>
                                    Contorno
                                </th>
                                <th>
                                    Data de Cadastro
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($artefatos as $artefato): ?>
                                <tr class="success artefatos" id="<?= $artefato->idartefatos ?>">
                                    <td>
                                        <?= $artefato->idartefatos ?>
                                    </td>
                                    <td>
                                        <?= $artefato->numero_inventario ?>
                                    </td>
                                    <td>
                                        <?= $artefato->natureza_peca ?>
                                    </td>
                                    <td>
                                        <?= $artefato->contorno ?>
                                    </td>
                                    <td>
                                        <?= date('d/m/Y', strtotime($artefato->data)) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table> 
                    <button  id='btn-novo'type="button" class="btn btn-block btn-success">Cadastrar Novo Artefato</button>
                </div>
            </div>
            <div class='row' id="div-novo-registro">
                <form class="form-horizontal" id="form-first" action="javascript:void(0)">
                    <fieldset>
                        <!-- Form Name -->
                        <legend>Registro Individual de Artefatos</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input-numero-inventario">Número do Inventário</label>  
                            <div class="col-md-2">
                                <input id="input-numero-inventario" name="input_numero_inventario" type="text" placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_natureza">Natureza da Peça</label>  
                            <div class="col-md-5">
                                <select id="natureza_peca" name="natureza_peca" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($natureza_peca as $value): ?>
                                        <option id_elm="<?= $value->idnatureza ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_artefato">Artefato</label>  
                            <div class="col-md-5">
                                <select id="artefato" name="artefato" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($artefato as $value): ?>
                                        <option id_elm="<?= $value->idartefato ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_contorno">Contorno</label>  
                            <div class="col-md-5">
                                <select id="contorno" name="contorno" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($contorno as $value): ?>
                                        <option id_elm="<?= $value->idcontorno ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_forma">Forma</label>  
                            <div class="col-md-5">
                                <select id="forma" name="forma" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($forma as $value): ?>
                                        <option id_elm="<?= $value->idforma ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_labio">Lábio</label>  
                            <div class="col-md-5">
                                <select id="labio" name="labio" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($labio as $value): ?>
                                        <option id_elm="<?= $value->idlabio ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_borda">Borda</label>  
                            <div class="col-md-5">
                                <select id="borda" name="borda" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($borda as $value): ?>
                                        <option id_elm="<?= $value->idborda ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_parede">Parede</label>  
                            <div class="col-md-5">
                                <select id="parede" name="parede" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($parede as $value): ?>
                                        <option id_elm="<?= $value->idparede ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_base">Base</label>  
                            <div class="col-md-5">
                                <select id="base" name="base" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($base as $value): ?>
                                        <option id_elm="<?= $value->idbase ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_inflexao">Inflexão</label>  
                            <div class="col-md-5">
                                <select id="inflexao" name="inflexao" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($inflexao as $value): ?>
                                        <option id_elm="<?= $value->idflexao ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_flange_labial">Flange labial</label>  
                            <div class="col-md-4">
                                <input id="input_flange_labial" name="input_flange_labial" type="text" placeholder="" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_flange_mesial">Flange mesial</label>  
                            <div class="col-md-4">
                                <input id="input_flange_mesial" name="input_flange_mesial" type="text" placeholder="" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_apencide">Apêncide</label>  
                            <div class="col-md-5">
                                <select id="apencide" name="apencide" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($apendice as $value): ?>
                                        <option id_elm="<?= $value->apendice ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_altura">Altura</label>  
                            <div class="col-md-4">
                                <input id="input_altura" name="input_altura" type="text" placeholder="" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_espessura">Espessura</label>  
                            <div class="col-md-5">
                                <select id="espessura" name="espessura" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($espessura as $value): ?>
                                        <option id_elm="<?= $value->idespessura ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_diametro">Diâmetro</label>  
                            <div class="col-md-4">
                                <input id="input_diametro" name="input_diametro" type="text" placeholder="" class="form-control input-md">

                            </div>
                        </div>

                    </fieldset>
                </form>

                <!-- TECNOLOGIA -->

                <form class="form-horizontal" id="form-tecnologia" action="javascript:void(0)">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Tecnologia</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_queima">Queima</label>  
                            <div class="col-md-5">
                                <select id="queima" name="queima" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($queima as $value): ?>
                                        <option id_elm="<?= $value->idqueima ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_tempero">Tempero ou antiplástico</label>  
                            <div class="col-md-5">
                                <select id="tempero" name="tempero" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($tempero as $value): ?>
                                        <option id_elm="<?= $value->idtempero ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_manufatura">Técnica de Manufatura</label>  
                            <div class="col-md-5">
                                <select id="manufatura" name="manufatura" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($tecnica_manufatura as $value): ?>
                                        <option id_elm="<?= $value->idtecnica ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_tratamento">Tratamento de Superfície</label>  
                            <div class="col-md-5">
                                <select id="superficie" name="superficie" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($tratamento_superficie as $value): ?>
                                        <option id_elm="<?= $value->idtratamento ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                    </fieldset>
                </form>

                <!-- DECORAÇÃO -->

                <form class="form-horizontal" id="form-decoracao" action="javascript:void(0)">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Decoração</legend>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_decoracao">Decoração</label>  
                            <div class="col-md-5">
                                <select id="decoracao" name="decoracao" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($decoracao as $value): ?>
                                        <option id_elm="<?= $value->iddecoracao ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_decoracao">Local da Decoração</label>  
                            <div class="col-md-5">
                                <select id="local_decoracao" name="local_decoracao" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($local_decoracao as $value): ?>
                                        <option id_elm="<?= $value->id_local_decoracao ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_tipo_decoracao">Tipo de Decoração</label>  
                            <div class="col-md-5">
                                <select id="tipo_decoracao" name="tipo_decoracao" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($tipo_decoracao as $value): ?>
                                        <option id_elm="<?= $value->id_tipo_decoracao ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_cor_gobo">Cor do engobo</label>  
                            <div class="col-md-5">
                                <select id="cor_engobo" name="cor_engobo" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($cor as $value): ?>
                                        <option id_elm="<?= $value->idcor ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_cor_super_interna">Cor da superfície interna</label>  
                            <div class="col-md-5">
                                <select id="super_interna" name="super_interna" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($cor as $value): ?>
                                        <option id_elm="<?= $value->idcor ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_cor_super_externa">Cor da superfície externa</label>  
                            <div class="col-md-5">
                                <select id="super_externa" name="super_externa" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($cor as $value): ?>
                                        <option id_elm="<?= $value->idcor ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_motivo">Motivo</label>  
                            <div class="col-md-5">
                                <select id="motivo" name="motivo" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($motivo as $value): ?>
                                        <option id_elm="<?= $value->idmotivo ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_decoracao_plastica">Decoração Plástica</label>  
                            <div class="col-md-5">
                                <select id="decoraca_plastica" name="decoracao_plastica" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($decoracao_plastica as $value): ?>
                                        <option id_elm="<?= $value->iddecoracao_plastica ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_marcas">Marcas de uso</label>  
                            <div class="col-md-4">
                                <input id="input_marcas" name="input_marcas" type="text" placeholder="" class="form-control input-md">

                            </div>
                        </div>

                    </fieldset>
                </form>

                <!-- DADOS FINAIS -->

                <form class="form-horizontal" id="form-dados-finais" action="javascript:void(0)">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Dados Finais</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_filiacao">Filiação Cultural</label>  
                            <div class="col-md-4">
                                <input id="input_filiacao" name="input_filiacao_cultural" type="text" placeholder="" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_tafonomia">Tafonomia</label>  
                            <div class="col-md-5">
                                <select id="tafonomia" name="tafonomia" class="form-control">
                                    <option value="">Selecione um item</option>
                                    <?php foreach ($tafonomia as $value): ?>
                                        <option id_elm="<?= $value->idtafonomia ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_filiacao">Filiação</label>  
                            <div class="col-md-4">
                                <input id="input_filiacao" name="input_filiacao" type="text" placeholder="" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_registro">Perfil da Borda</label>  
                            <div class="col-md-4">
                                <input id="input_registro" name="input_perfil_borda" type="text" placeholder="" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Reconstituição do Artefato</label>  
                            <div class="col-md-4">
                                <input id="textinput" name="input_reconstituicao" type="text" placeholder="" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="input_fotografia">Fotografia</label>  
                            <div class="col-md-4">
                                <input id="input_fotografia" name="input_fotografia" type="text" placeholder="" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="button1id">Ações</label>
                            <div class="col-md-8">
                                <button name="button1id" class="btn btn-success" id="btn-salvar">Salvar</button>
                                <button id="button2id" name="button2id" class="btn btn-danger">Cancelar</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>        
    </body>
</html>
