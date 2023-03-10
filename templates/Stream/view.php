<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stream $stream
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Stream'), ['action' => 'edit', $stream->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Stream'), ['action' => 'delete', $stream->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stream->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Stream'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Stream'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stream view content">
            <h3><?= h($stream->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Stream Name') ?></th>
                    <td><?= h($stream->stream_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($stream->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Course Id') ?></th>
                    <td><?= $this->Number->format($stream->course_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Timestamp') ?></th>
                    <td><?= h($stream->timestamp) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
