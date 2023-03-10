<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UniversityFixture
 */
class UniversityFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'university';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'university_name' => 'Lorem ipsum dolor sit amet',
                'timestamp' => 1677144049,
            ],
        ];
        parent::init();
    }
}
