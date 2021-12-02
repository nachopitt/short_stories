<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Keyword $keyword
 * @var \Cake\Collection\CollectionInterface|string[] $shortStories
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Keywords'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="keywords form content">
            <?= $this->Form->create($keyword) ?>
            <fieldset>
                <legend><?= __('Add Keyword') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('short_stories._ids', ['options' => $shortStories]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
