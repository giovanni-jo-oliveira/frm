<?php
$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            
        </div>
        <div class="top-nav-frm">
            <?= $this->Html->link(__('CLIENTES'), ['controller' => 'Clientes', 'action' => 'index'], ['class' => 'button']) ?>
            <?= $this->Html->link(__('PRODUTOS'), ['controller' => 'Produtos', 'action' => 'index'], ['class' => 'button']) ?>
            <?= $this->Html->link(__('VENDAS'), ['controller' => 'Vendas', 'action' => 'index'], ['class' => 'button']) ?>
        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
