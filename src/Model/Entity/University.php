<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * University Entity
 *
 * @property int $id
 * @property string $university_name
 * @property \Cake\I18n\FrozenTime $timestamp
 *
 * @property \App\Model\Entity\Course[] $course
 */
class University extends Entity
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
        'university_name' => true,
        'timestamp' => true,
        'course' => true,
    ];
}
