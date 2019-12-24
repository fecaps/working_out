<?php
declare(strict_types=1);

namespace Tests\Transformer;

use PHPUnit\Framework\TestCase;
use App\Generator\Exercises;
use App\Transformer\Participants;

class ParticipantsTest extends TestCase
{
    private $participants;

    protected function setUp(): void
    {
        parent::setUp();

        $exercises = new Exercises();
        $this->participants = new Participants($exercises);
    }

    public function testReturnInstanceType(): void
    {
        $this->assertInstanceOf(Participants::class, $this->participants);
    }

    public function testShowResponse(): void
    {
        $response = $this->participants->defineResponse();

        $this->assertIsArray($response);
        $this->assertCount(34, $response);
    }
}
