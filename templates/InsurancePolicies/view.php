<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InsurancePolicy $insurancePolicy
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Insurance Policy'), ['action' => 'edit', $insurancePolicy->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Insurance Policy'), ['action' => 'delete', $insurancePolicy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $insurancePolicy->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Insurance Policies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Insurance Policy'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="insurancePolicies view content">
            <h3><?= h($insurancePolicy->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Insurance Company') ?></th>
                    <td><?= $insurancePolicy->has('insurance_company') ? $this->Html->link($insurancePolicy->insurance_company->name, ['controller' => 'InsuranceCompanies', 'action' => 'view', $insurancePolicy->insurance_company->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($insurancePolicy->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($insurancePolicy->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Premium') ?></th>
                    <td><?= $this->Number->format($insurancePolicy->premium) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Company Assets') ?></h4>
                <?php if (!empty($insurancePolicy->company_assets)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Contact Listing Id') ?></th>
                            <th><?= __('Insurance Company Id') ?></th>
                            <th><?= __('Insurance Policy Id') ?></th>
                            <th><?= __('Premium') ?></th>
                            <th><?= __('Term Length') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($insurancePolicy->company_assets as $companyAssets) : ?>
                        <tr>
                            <td><?= h($companyAssets->id) ?></td>
                            <td><?= h($companyAssets->user_id) ?></td>
                            <td><?= h($companyAssets->contact_listing_id) ?></td>
                            <td><?= h($companyAssets->insurance_company_id) ?></td>
                            <td><?= h($companyAssets->insurance_policy_id) ?></td>
                            <td><?= h($companyAssets->premium) ?></td>
                            <td><?= h($companyAssets->term_length) ?></td>
                            <td><?= h($companyAssets->status) ?></td>
                            <td><?= h($companyAssets->deleted) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CompanyAssets', 'action' => 'view', $companyAssets->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CompanyAssets', 'action' => 'edit', $companyAssets->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CompanyAssets', 'action' => 'delete', $companyAssets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companyAssets->id)]) ?>
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
