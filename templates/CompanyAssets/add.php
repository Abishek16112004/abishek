<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CompanyAsset $companyAsset
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $insuranceCompanies
 * @var \Cake\Collection\CollectionInterface|string[] $insurancePolicies
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Company Assets'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="companyAssets form content">
            <?= $this->Form->create($companyAsset) ?>
            <fieldset>
                <legend><?= __('Add Company Asset') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('contact_listing_id');
                    echo $this->Form->control('insurance_company_id', ['options' => $insuranceCompanies]);
                    echo $this->Form->control('insurance_policy_id', ['options' => $insurancePolicies]);
                    echo $this->Form->control('premium');
                    echo $this->Form->control('term_length');
                    echo $this->Form->control('status');
                    echo $this->Form->control('deleted');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>




