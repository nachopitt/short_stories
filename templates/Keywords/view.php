<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Keyword $keyword
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Keyword'), ['action' => 'edit', $keyword->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Keyword'), ['action' => 'delete', $keyword->id], ['confirm' => __('Are you sure you want to delete # {0}?', $keyword->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Keywords'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Keyword'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="keywords view content">
            <h3><?= h($keyword->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($keyword->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($keyword->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Short Stories') ?></h4>
                <?php if (!empty($keyword->short_stories)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Author') ?></th>
                            <th><?= __('Source') ?></th>
                            <th><?= __('Genre') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Language') ?></th>
                            <th><?= __('Length') ?></th>
                            <th><?= __('Length Unit') ?></th>
                            <th><?= __('Summary') ?></th>
                            <th><?= __('State') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($keyword->short_stories as $shortStories) : ?>
                        <tr>
                            <td><?= h($shortStories->id) ?></td>
                            <td><?= h($shortStories->title) ?></td>
                            <td><?= h($shortStories->author) ?></td>
                            <td><?= h($shortStories->source) ?></td>
                            <td><?= h($shortStories->genre) ?></td>
                            <td><?= h($shortStories->date) ?></td>
                            <td><?= h($shortStories->language) ?></td>
                            <td><?= h($shortStories->length) ?></td>
                            <td><?= h($shortStories->length_unit) ?></td>
                            <td><?= h($shortStories->summary) ?></td>
                            <td><?= h($shortStories->state) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ShortStories', 'action' => 'view', $shortStories->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ShortStories', 'action' => 'edit', $shortStories->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ShortStories', 'action' => 'delete', $shortStories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shortStories->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
