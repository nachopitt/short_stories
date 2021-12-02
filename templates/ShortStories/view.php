<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ShortStory $shortStory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Short Story'), ['action' => 'edit', $shortStory->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Short Story'), ['action' => 'delete', $shortStory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shortStory->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Short Stories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Short Story'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="shortStories view content">
            <h3><?= h($shortStory->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($shortStory->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Author') ?></th>
                    <td><?= h($shortStory->author) ?></td>
                </tr>
                <tr>
                    <th><?= __('Source') ?></th>
                    <td><?= h($shortStory->source) ?></td>
                </tr>
                <tr>
                    <th><?= __('Genre') ?></th>
                    <td><?= h($shortStory->genre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Language') ?></th>
                    <td><?= h($shortStory->language) ?></td>
                </tr>
                <tr>
                    <th><?= __('Length Unit') ?></th>
                    <td><?= h($shortStory->length_unit) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($shortStory->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($shortStory->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Length') ?></th>
                    <td><?= $this->Number->format($shortStory->length) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($shortStory->date) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Summary') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($shortStory->summary)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Keywords') ?></h4>
                <?php if (!empty($shortStory->keywords)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($shortStory->keywords as $keywords) : ?>
                        <tr>
                            <td><?= h($keywords->id) ?></td>
                            <td><?= h($keywords->name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Keywords', 'action' => 'view', $keywords->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Keywords', 'action' => 'edit', $keywords->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Keywords', 'action' => 'delete', $keywords->id], ['confirm' => __('Are you sure you want to delete # {0}?', $keywords->id)]) ?>
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
