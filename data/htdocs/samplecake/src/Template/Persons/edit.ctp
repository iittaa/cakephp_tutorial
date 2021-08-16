<div>
    <h3>Edit Person</h3>
    <?= $this->Form->create($person) ?>
    <fieldset>
        <?php
            echo $this->Form->control('id');
            echo $this->Form->control('name', ["label" => "名前"]);
            echo $this->Form->control('age', ["label" => "年齢"]);
            echo $this->Form->control('mail', ["label" => "メールアドレス"]);
        ?>
    </fieldset>
    <?= $this->Form->button('編集する') ?>
    <?= $this->Form->end() ?>
</div>
