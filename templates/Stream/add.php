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
            <?= $this->Html->link(__('List Stream'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stream form content">
            <?= $this->Form->create($stream) ?>
            <fieldset>
                <legend><?= __('Add Stream') ?></legend>
                <?php
                    echo $this->Form->control('course_id');
                    echo $this->Form->control('stream_name');
                    echo $this->Form->control('timestamp');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
