<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Venda> $vendas
 */
?>
<div class="vendas index content">
    <?= $this->Html->link(__('New Venda'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Vendas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('data_venda') ?></th>
                    <th><?= $this->Paginator->sort('quantidade') ?></th>
                    <th><?= $this->Paginator->sort('Produto') ?></th>
                    <th><?= $this->Paginator->sort('Cliente') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vendas as $venda): ?>
                <tr>
                    <td><?= $this->Number->format($venda->id) ?></td>
                    <td><?= h($venda->data_venda) ?></td>
                    <td><?= h($venda->quantidade) ?></td>
                    <td><?= $venda->produto ? h($venda->produto->nome_prod) : '' ?></td>
                    <td><?= $venda->cliente ? h($venda->cliente->nome) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $venda->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $venda->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $venda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venda->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeira')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próxima') . ' >') ?>
            <?= $this->Paginator->last(__('Última') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, exibindo {{current}} registro(s) de um total de {{count}} registros')) ?></p>
    </div>
</div>
