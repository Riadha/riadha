<?php

namespace Tests\Unit\Riadha\News;


use Riadha\News\NewsManager;
use Tests\TestCase;

class NewsManagerTest extends TestCase {
    protected $newsManager;

    protected function setUp(): void
    {
        parent::setUp();

        $this->newsManager = new NewsManager();
    }

    /**
     * The news manager class must exist
     *
     * @covers \Riadha\News\NewsManager::countNewsPosts
     */
    public function testNewsPostsCount(){
        $this->assertIsNumeric($this->newsManager->countNewsPosts());
    }
}
