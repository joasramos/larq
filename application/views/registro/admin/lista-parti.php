<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <base href="<?= base_url() ?>">
            <title>Administração</title>
            <style type="text/css">
                <!--
                @import url("assets/themes/registro/table_style/style.css");
                -->
            </style>
    </head>
    <body>
        <div style="min-width: 960px; border-bottom: 1px dotted #ccc; border-right: 1px solid #ccc; width: 1024px; margin-left: 3.3333%; margin-top: 2em">
            <!--<h4 style='text-align: center'> Lista de participantes que não pagaram.</h4>-->
            <div style='width: 900px; margin-left: 4.3333%'>
                <form action="<?= base_url() ?>home" method="POST" >
                    <label> Informe nome do participante: </label>
                    <input type='text' name='p_nome' size="30"></input>   
                    <button>Buscar</button>
                </form>
            </div>
            <div style='overflow: scroll; height: 600px'>
                <table id="newspaper-b" summary="2007 Major IT Companies' Profit" style='width: 900px'>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">CÓD</th>
                            <th scope="col">NOME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">TELEFONE</th>
                            <th scope="col">INSTITUIÇÃO</th>
                            <!--<th scope="col">STATUS</th>-->
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td colspan="5"><em>Clique na opção 'Confirmar Pagamento' para atualizar o status</em></td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($insc_no_paga as $k => $inp): ?>
                            <tr>
                                <td><h2><?= $k + 1 ?></h2></td>
                                <td><?= $inp->idparti ?></td>
                                <td><?= strtoupper($inp->nome) ?></td>
                                <td><?= $inp->email ?></td>
                                <td><?= $inp->telefone ?></td>
                                <td><?= strtoupper($inp->instituicao) ?></td>
                                <!--<td><?= $inp->inscricao_paga ?></td>-->
                                <td><h3>CONFIRMAR PAGAMENTO</h3></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!--INSCRIÇÕES PAGAS-->

        <div style="min-width: 960px; border-bottom: 1px dotted #ccc; border-right: 1px solid #ccc; width: 1024px; margin-left: 3.3333%; margin-top: 3.3333%">
            <h4 style='text-align: center'> PARTICIPANTES ADIPLENTES</h4>
            <div style='width: 900px; margin-left: 4.3333%'>
                <form action="<?= base_url() ?>home" method="POST" >
                    <label> Informe nome do participante: </label>
                    <input type='text' name='p_p_nome' size="30"></input>   
                    <button>Buscar</button>
                </form>
            </div>
            <table id="newspaper-b" summary="2007 Major IT Companies' Profit" style='width: 900px'>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">TELEFONE</th>
                        <th scope="col">INSTITUIÇÃO</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td colspan="5"><em>Participantes para se emitir certificados.</em></td>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($insc_paga as $inp): ?>
                        <tr>
                            <td><?= $inp->idparti ?></td>
                            <td><?= $inp->nome ?></td>
                            <td><?= $inp->email ?></td>
                            <td><?= $inp->telefone ?></td>
                            <td><?= $inp->instituicao ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
