<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\University $university
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit University'), ['action' => 'edit', $university->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete University'), ['action' => 'delete', $university->id], ['confirm' => __('Are you sure you want to delete # {0}?', $university->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List University'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New University'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="university view content">
            <h3><?= h($university->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('University Name') ?></th>
                    <td><?= h($university->university_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($university->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Timestamp') ?></th>
                    <td><?= h($university->timestamp) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Course') ?></h4>
                <?php if (!empty($university->course)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('University Id') ?></th>
                            <th><?= __('Course Name') ?></th>
                            <th><?= __('Timestamp') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($university->course as $course) : ?>
                        <tr>
                            <td><?= h($course->id) ?></td>
                            <td><?= h($course->university_id) ?></td>
                            <td><?= h($course->course_name) ?></td>
                            <td><?= h($course->timestamp) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Course', 'action' => 'view', $course->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Course', 'action' => 'edit', $course->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Course', 'action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]) ?>
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
