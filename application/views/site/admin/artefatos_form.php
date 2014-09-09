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
                        <option value="<?= $value->idnatureza ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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
                        <option value="<?= $value->idartefato ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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
                        <option value="<?= $value->idcontorno ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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
                        <option value="<?= $value->idforma ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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
                        <option value="<?= $value->idlabio ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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
                        <option value="<?= $value->idborda ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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
                        <option value="<?= $value->idparede ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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
                        <option value="<?= $value->idbase ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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
                        <option value="<?= $value->idflexao ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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
                        <option value="<?= $value->apendice ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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
                        <option value="<?= $value->idespessura ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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
                        <option value="<?= $value->idqueima ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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
                        <option value="<?= $value->idtempero ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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
                        <option value="<?= $value->idtecnica ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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
                        <option value="<?= $value->idtratamento ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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
                        <option value="<?= $value->iddecoracao ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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
                        <option value="<?= $value->id_local_decoracao ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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
                        <option value="<?= $value->id_tipo_decoracao ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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
                        <option value="<?= $value->idcor ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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
                        <option value="<?= $value->idcor ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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
                        <option value="<?= $value->idcor ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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
                        <option value="<?= $value->idmotivo ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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
                        <option value="<?= $value->iddecoracao_plastica ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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
                        <option value="<?= $value->idtafonomia ?>" name="<?= $value->nome ?>"> <?= $value->nome ?></option>
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