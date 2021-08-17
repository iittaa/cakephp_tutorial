<?= $this->Form->create($member) ?>
    <fieldset>
    <legend><?= __('Add Member') ?></legend>
    <?php
        echo $this->Form->control('name', ["label" => "名前"]);
        echo $this->Form->control('mail', ["label" => "メールアドレス"]);
    ?>
    </fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
