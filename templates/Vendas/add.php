<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Vendas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vendas form content">
            <?= $this->Form->create($venda) ?>
            <fieldset>
                <legend><?= __('Add Venda') ?></legend>
                <?php
                    echo $this->Form->control('data_venda', ['empty' => true]);
                    echo $this->Form->control('quantidade');
                    echo $this->Form->control('id_produto', ['options' => $produtos, 'empty' => true]);
                    echo $this->Form->control('id_cliente', ['options' => $clientes, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

