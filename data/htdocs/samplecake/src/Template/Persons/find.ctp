<div>
    <h3>Find Person</h3>
    <?= $msg ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <?= $this->Form->control('find', ["label" => "テキストを入力"]); ?>
        <?= $this->Form->button('検索する') ?>
        <?= $this->Form->end() ?>
    </fieldset>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>AGE</th>
            <th>MAIL</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($persons as $person): ?>
        <tr>
            <td><?= h($person->id) ?></td>
            <td><?= h($person->name) ?></td>
            <td><?= h($person->age) ?></td>
            <td><?= h($person->mail) ?></td>
        </tr>
            <?php endforeach; ?>
            </tbody>
    </table>
</div>
