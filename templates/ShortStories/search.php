<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ShortStory $shortStory
 * @var \Cake\Collection\CollectionInterface|string[] $keywords
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Short Stories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="shortStories form content">
            <?= $this->Form->create($shortStory) ?>
            <fieldset>
                <legend><?= __('Search Short Stories') ?></legend>
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
<?php if (!empty($shortStories)): ?>
<div class="shortStories index content">
    <h3><?= __('Short Stories') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('author') ?></th>
                    <th><?= $this->Paginator->sort('source') ?></th>
                    <th><?= $this->Paginator->sort('genre') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('language') ?></th>
                    <th><?= $this->Paginator->sort('length') ?></th>
                    <th><?= $this->Paginator->sort('length_unit') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($shortStories as $shortStory): ?>
                <tr>
                    <td><?= $this->Number->format($shortStory->id) ?></td>
                    <td><?= h($shortStory->title) ?></td>
                    <td><?= h($shortStory->author) ?></td>
                    <td><?= h($shortStory->source) ?></td>
                    <td><?= h($shortStory->genre) ?></td>
                    <td><?= h($shortStory->date) ?></td>
                    <td><?= h($shortStory->language) ?></td>
                    <td><?= $this->Number->format($shortStory->length) ?></td>
                    <td><?= h($shortStory->length_unit) ?></td>
                    <td><?= h($shortStory->state) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $shortStory->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shortStory->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shortStory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shortStory->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php endif; ?>