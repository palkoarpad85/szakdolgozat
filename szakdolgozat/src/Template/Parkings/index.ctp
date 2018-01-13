<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parking[]|\Cake\Collection\CollectionInterface $parkings
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Parking'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Realestates'), ['controller' => 'Realestates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Realestate'), ['controller' => 'Realestates', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="parkings index large-9 medium-8 columns content">
    <h3><?= __('Parkings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_by') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($parkings as $parking): ?>
            <tr>
                <td><?= $this->Number->format($parking->id) ?></td>
                <td><?= h($parking->active) ?></td>
                <td><?= h($parking->name) ?></td>
                <td><?= h($parking->created) ?></td>
                <td><?= $this->Number->format($parking->created_by) ?></td>
                <td><?= h($parking->modified) ?></td>
                <td><?= $this->Number->format($parking->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $parking->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $parking->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $parking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parking->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
