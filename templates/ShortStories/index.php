<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ShortStory[]|\Cake\Collection\CollectionInterface $shortStories
 */
?>
<div class="shortStories index content">
    <?= $this->Html->link(__('New Short Story'), ['action' => 'add'], ['class' => 'button float-right']) ?>
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
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
