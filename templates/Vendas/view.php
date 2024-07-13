<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venda $venda
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Venda'), ['action' => 'edit', $venda->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Venda'), ['action' => 'delete', $venda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venda->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Vendas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Venda'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vendas view content">
            <h3><?= h($venda->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Quantidade') ?></th>
                    <td><?= h($venda->quantidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($venda->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Produto') ?></th>
                    <td><?= $venda->id_produto === null ? '' : $this->Number->format($venda->id_produto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Cliente') ?></th>
                    <td><?= $venda->id_cliente === null ? '' : $this->Number->format($venda->id_cliente) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Venda') ?></th>
                    <td><?= h($venda->data_venda) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
