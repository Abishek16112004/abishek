<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CourseFixture
 */
class CourseFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'course';
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
                'university_id' => 1,
                'course_name' => 'Lorem ipsum dolor sit amet',
                'timestamp' => 1677144062,
            ],
        ];
        parent::init();
    }
}
