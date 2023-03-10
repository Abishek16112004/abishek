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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $university->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $university->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List University'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="university form content">
            <?= $this->Form->create($university) ?>
            <fieldset>
                <legend><?= __('Edit University') ?></legend>
                <?php
                    echo $this->Form->control('university_name');
                    echo $this->Form->control('timestamp');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
