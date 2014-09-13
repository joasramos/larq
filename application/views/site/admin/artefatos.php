<div class="container">
    <div id="div-selecionado" title="Artefato Selecionado">

    </div>

<!--    <pre>
        <?php print_r($artefatos) ?>
    </pre>    -->
    <div class="row clearfix" style="margin-top: 80px">
        <div class="col-md-11 column" style="/*height: 450px; overflow-y: scroll*/">
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
                        <th>
                            Ações
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
                                <?= $artefato->natureza[0]->nome ?>
                            </td>
                            <td>
                                <?= $artefato->idcontorno ?>
                            </td>
                            <td>
                                <?= date('d/m/Y', strtotime($artefato->data)) ?>
                            </td>
                            <td>
                                | <a href="">E</a> | D | 
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table> 
        </div>
        <div class="col-md-2">
            <button  id='btn-novo'type="button" class="btn btn-block btn-success">Cadastrar Novo Artefato</button>
        </div>
        <div class="col-md-2">
            <button  id='btn-cancel'type="button" class="btn btn-block btn-danger">Ocultar Painel</button>
        </div>
    </div>
    <div class='row-fluid' id="div-novo-registro" style="margin: 1em">
        <?php include_once 'artefatos_form.php'; ?>
    </div>
</div>        

