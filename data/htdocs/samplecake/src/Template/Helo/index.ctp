<?php

use PhpParser\Node\Stmt\Label;
?>
<div>
  <h3>Index Page</h3>
  <p><?= $message ?></p>
  <?= $this->Form->create(null, [
      "type" => "post",
      "url" => ["controller" => "Helo", "action" => "index"]
  ]) ?>
  <?= $this->Form->control("text1", ["type" => "text", "label" => "テキストを入力"]); ?>
  <?= $this->Form->submit("送信する"); ?>
  <?= $this->Form->end(); ?>
</div>
