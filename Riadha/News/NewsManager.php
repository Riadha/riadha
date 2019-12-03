<?php

/**
 * Manage news pieces concerning athletes
 */

namespace Riadha\News;

use Riadha\News\Data\Models\Post;
use Riadha\News\Data\Repository\NewsRepository;

class NewsManager
{
    /**
     * Storage repository.
     *
     * @todo make this easy to switch to a different storage engine.
     *
     * @var
     */
    protected $repo;

    function __construct()
    {
        $this->repo = new NewsRepository(Post::class);
    }

    /**
     * Create a news post
     */
    public function create()
    {

    }

    /**
     * Count how many posts are currently stored.
     *
     * @todo Add support for a filter
     *
     * @return int
     */
    public function countNewsPosts() {
        return $this->repo->getCount();
    }
}
