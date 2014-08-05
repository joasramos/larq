<h1 style="margin-top: 2em">Participantes cadastrados</h1>

<table id="racetimes">
    <tr id="firstrow">
        <th>#</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Email</th>
    </tr>
    <?php foreach ($list as $p): ?>
        <tr>
            <td><?= $p->idparti ?></td>
            <td><?= $p->nome ?></td>
            <td><?= $p->idade ?></td>
            <td><?= $p->email ?></td>
        </tr>
    <?php endforeach; ?>
</table>