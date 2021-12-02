<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ShortStory $shortStory
 * @var string[]|\Cake\Collection\CollectionInterface $keywords
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $shortStory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $shortStory->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Short Stories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="shortStories form content">
            <?= $this->Form->create($shortStory) ?>
            <fieldset>
                <legend><?= __('Edit Short Story') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('author');
                    echo $this->Form->control('source');
                    echo $this->Form->control('genre');
                    echo $this->Form->control('date');
                    echo $this->Form->control('language');
                    echo $this->Form->control('length');
                    echo $this->Form->control('length_unit');
                    echo $this->Form->control('summary');
                    echo $this->Form->control('state');
                    echo $this->Form->control('keywords._ids', ['options' => $keywords]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
