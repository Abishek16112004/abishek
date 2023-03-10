<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\University> $university
 */
?>
<div class="university index content">
    <?= $this->Html->link(__('New University'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('University') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('university_name') ?></th>
                    <th><?= $this->Paginator->sort('timestamp') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($university as $university): ?>
                <tr>
                    <td><?= $this->Number->format($university->id) ?></td>
                    <td><?= h($university->university_name) ?></td>
                    <td><?= h($university->timestamp) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $university->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $university->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $university->id], ['confirm' => __('Are you sure you want to delete # {0}?', $university->id)]) ?>
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
