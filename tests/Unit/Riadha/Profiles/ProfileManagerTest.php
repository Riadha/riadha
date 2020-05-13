<?php

namespace Tests\Unit\Riadha\News;

use Riadha\Profiles\ProfilesManager;
use Tests\TestCase;

class ProfileManagerTest extends TestCase {
    protected $profileManager;

    protected function setUp(): void
    {
        parent::setUp();

        $this->profileManager = new ProfilesManager();
    }

    /**
     * The news manager class must exist
     *
     * @covers \Riadha\Profiles\ProfilesManager::create
     */
    public function testProfileIsCreated(){
        $this->assertIsNumeric($this->profileManager->create([]));
    }
}
