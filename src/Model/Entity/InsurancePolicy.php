<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InsurancePolicy Entity
 *
 * @property int $id
 * @property int $insurance_company_id
 * @property string $name
 * @property float $premium
 *
 * @property \App\Model\Entity\InsuranceCompany $insurance_company
 * @property \App\Model\Entity\CompanyAsset[] $company_assets
 */
class InsurancePolicy extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'insurance_company_id' => true,
        'name' => true,
        'premium' => true,
        'insurance_company' => true,
        'company_assets' => true,
    ];
}
