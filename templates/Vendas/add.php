<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Vendas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vendas form content">
            <?= $this->Form->create($venda) ?>
            <fieldset>
                <legend><?= __('Cadastro de Venda') ?></legend>
                <?php
                    echo $this->Form->control('data_venda', ['empty' => true]);
                    echo $this->Form->control('quantidade');
                    echo $this->Form->control('Produto', ['options' => $produtos, 'empty' => true]);
                    echo $this->Form->control('Cliente', ['options' => $clientes, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

