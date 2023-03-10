<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InsuranceCompany $insuranceCompany
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Insurance Company'), ['action' => 'edit', $insuranceCompany->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Insurance Company'), ['action' => 'delete', $insuranceCompany->id], ['confirm' => __('Are you sure you want to delete # {0}?', $insuranceCompany->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Insurance Companies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Insurance Company'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="insuranceCompanies view content">
            <h3><?= h($insuranceCompany->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($insuranceCompany->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($insuranceCompany->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Company Assets') ?></h4>
                <?php if (!empty($insuranceCompany->company_assets)) : ?>
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
                        <?php foreach ($insuranceCompany->company_assets as $companyAssets) : ?>
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
            <div class="related">
                <h4><?= __('Related Insurance Policies') ?></h4>
                <?php if (!empty($insuranceCompany->insurance_policies)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Insurance Company Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Premium') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($insuranceCompany->insurance_policies as $insurancePolicies) : ?>
                        <tr>
                            <td><?= h($insurancePolicies->id) ?></td>
                            <td><?= h($insurancePolicies->insurance_company_id) ?></td>
                            <td><?= h($insurancePolicies->name) ?></td>
                            <td><?= h($insurancePolicies->premium) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'InsurancePolicies', 'action' => 'view', $insurancePolicies->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'InsurancePolicies', 'action' => 'edit', $insurancePolicies->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'InsurancePolicies', 'action' => 'delete', $insurancePolicies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $insurancePolicies->id)]) ?>
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
