<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Course'), ['action' => 'edit', $course->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Course'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Course'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Course'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="course view content">
            <h3><?= h($course->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Course Name') ?></th>
                    <td><?= h($course->course_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($course->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('University Id') ?></th>
                    <td><?= $this->Number->format($course->university_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Timestamp') ?></th>
                    <td><?= h($course->timestamp) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Stream') ?></h4>
                <?php if (!empty($course->stream)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Course Id') ?></th>
                            <th><?= __('Stream Name') ?></th>
                            <th><?= __('Timestamp') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($course->stream as $stream) : ?>
                        <tr>
                            <td><?= h($stream->id) ?></td>
                            <td><?= h($stream->course_id) ?></td>
                            <td><?= h($stream->stream_name) ?></td>
                            <td><?= h($stream->timestamp) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Stream', 'action' => 'view', $stream->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Stream', 'action' => 'edit', $stream->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Stream', 'action' => 'delete', $stream->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stream->id)]) ?>
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
