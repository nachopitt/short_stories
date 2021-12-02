<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Keyword $keyword
 * @var string[]|\Cake\Collection\CollectionInterface $shortStories
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $keyword->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $keyword->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Keywords'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="keywords form content">
            <?= $this->Form->create($keyword) ?>
            <fieldset>
                <legend><?= __('Edit Keyword') ?></legend>
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
