<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parking $parking
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $parking->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $parking->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Parkings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Realestates'), ['controller' => 'Realestates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Realestate'), ['controller' => 'Realestates', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="parkings form large-9 medium-8 columns content">
    <?= $this->Form->create($parking) ?>
    <fieldset>
        <legend><?= __('Edit Parking') ?></legend>
        <?php
            echo $this->Form->control('active');
            echo $this->Form->control('name');
            echo $this->Form->control('created_by');
            echo $this->Form->control('modified_by');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
