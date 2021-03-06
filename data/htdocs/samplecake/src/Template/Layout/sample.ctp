<!DOCTYPE html>
<html lang="ja">
    <head>
        <title><?= h($this->fetch('title')) ?></title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <?php
        echo $this->Html->css('sample.css');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <div id="header"><?= __($header) ?></div>

        <?= $this->fetch('content') ?>

        <div id="footer"><?= __($footer) ?></div>
    </body>
</html>
