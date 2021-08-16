<div>
    <h3>Add Person</h3>
    <?= $this->Form->create() ?>
    <fieldset>
    <?php
        echo $this->Form->control('name', ['label' => '名前']);
        echo $this->Form->control('age', ['label' => '年齢']);
        echo $this->Form->control('mail', ['label' => 'メールアドレス']);
        // echo $this->Form->input('name');
        // echo $this->Form->input('age');
        // echo $this->Form->input('mail');
    ?>
    </fieldset>
    <?= $this->Form->button('送信する') ?>
    <?= $this->Form->end() ?>
</div>
