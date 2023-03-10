<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Stream> $stream
 */
?>
<div class="stream index content">
    <?= $this->Html->link(__('New Stream'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Stream') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('course_id') ?></th>
                    <th><?= $this->Paginator->sort('stream_name') ?></th>
                    <th><?= $this->Paginator->sort('timestamp') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stream as $stream): ?>
                <tr>
                    <td><?= $this->Number->format($stream->id) ?></td>
                    <td><?= $this->Number->format($stream->course_id) ?></td>
                    <td><?= h($stream->stream_name) ?></td>
                    <td><?= h($stream->timestamp) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $stream->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stream->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stream->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stream->id)]) ?>
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
