
<!--FORMULÁRIO PARA CADASTRO DE PARTICIPANTES-->
<div id='wrap'>
    <h1 title='how forms should be done.'>Formulário de Cadastro</h1>
    <section class='form'>
        <form action="<?= base_url() ?>inscricoes/submit" method="post" novalidate>
            <input type="hidden" value="<?= $status ?>" />
            <fieldset>
                <div class="item">
                    <label>
                        <span>Nome</span>
                        <input  name="nome" placeholder="ex. Joás R. Araújo" required="required" pattern="phone"/>		
                    </label>
                    <div class='tooltip help'>
                        <span>?</span>
                        <div class='content'>
                            <b></b>
                            <p>Informe seu nome completo</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <label>
                        <span>Email</span>
                        <input required="required" type="text" name="email"/>
                    </label>
                    <div class='tooltip help'>
                        <span>?</span>
                        <div class='content'>
                            <b></b>
                            <p>Digite corretamente seu email</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <label>
                        <span>Telefone</span>
                        <input type="tel" class='tel' name="tel" required='required' data-validate-length-range="8,20">
                    </label>
                    <div class='tooltip help'>
                        <span>?</span>
                        <div class='content'>
                            <b></b>
                            <p> </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <label>
                        <span>Formação</span>
                        <select class="required" name="forma">
                            <?php if ($formacao): foreach ($formacao as $f): ?>
                                    <option value="<?= $f->idform ?>"> <?= $f->nome ?> </option>
                                    <?php
                                endforeach;
                            endif;
                            ?>
                        </select>
                    </label>
                    <div class='tooltip help'>
                        <span>?</span>
                        <div class='content'>
                            <b></b>
                            <p>Qual a sua formação acadêmica atual?</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <label>
                        <span>Instituição</span>
                        <input  name="insti" placeholder="UFMA" required="required" pattern="phone"/>		
                    </label>
                    <div class='tooltip help'>
                        <span>?</span>
                        <div class='content'>
                            <b></b>
                            <p>Informe sua instituição!</p>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="item">
                    <label>
                        <span>Usuário</span>
                        <input  name="user_name" placeholder="" required="required" pattern="phone"/>		
                    </label>
                    <div class='tooltip help'>
                        <span>?</span>
                        <div class='content'>
                            <b></b>
                            <p>Informe um nome de usuário</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <label>
                        <span>Senha</span>
                        <input type="password" name="password" data-validate-length="6,8" required='required'>
                    </label>
                    <div class='tooltip help'>
                        <span>?</span>
                        <div class='content'>
                            <b></b>
                            <p>Sua senha tem que ter entre 6 à 8 caracteres</p>
                        </div>
                    </div>
                </div>
                <button id='send' type='submit'>Confirmar cadastro</button>
            </fieldset>
        </form>	
    </section>
</div>

<script>
    // initialize the validator function
    validator.message['date'] = 'not a real date';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required')
            .on('keyup blur', 'input', function() {
                validator.checkField.apply($(this).siblings().last()[0]);
            });

    // bind the validation to the form submit event
    //$('#send').click('submit');//.prop('disabled', true);

    $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;
        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
            submit = false;
        }

        if (submit)
            this.submit();
        return false;
    });

    /* FOR DEMO ONLY */
    $('#vfields').change(function() {
        $('form').toggleClass('mode2');
    }).prop('checked', false);

    $('#alerts').change(function() {
        validator.defaults.alerts = (this.checked) ? false : true;
        if (this.checked)
            $('form .alert').remove();
    }).prop('checked', false);


    var aux = $("input[type='hidden']").val();

    if (aux) {
        if (aux == 'success_insc') {
            alert("----------------------\n\
SUA INSCRIÇÃO FOI REALIZADA COM SUCESSO!\n\
-----------------------\n\
\n\
\n\
\n\
Vá para a página Inicial, e selecione a opção Area Restrita para visualizar seus Dados");
            window.location.href = "http://" + window.document.domain + "/larq/inscricoes/cadastro";
        }
    }
</script>