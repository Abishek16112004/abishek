<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StreamFixture
 */
class StreamFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'stream';
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
                'course_id' => 1,
                'stream_name' => 'Lorem ipsum dolor sit amet',
                'timestamp' => 1677144074,
            ],
        ];
        parent::init();
    }
}
