<?= $this->Form->create($member) ?>
<fieldset>
    <legend><?= __('Edit Member') ?>
    </legend>
    <?php
        echo $this->Form->control('name', ["label" => "名前"]);
        echo $this->Form->control('mail', ["label" => "メールアドレス"]);
        // echo $this->Form->control('title', ["label" => "タイトル"]);
    ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
