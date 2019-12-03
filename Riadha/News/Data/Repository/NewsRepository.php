<?php

namespace Riadha\News\Data\Repository;

use Illuminate\Database\Eloquent\Model;
use Riadha\Core\Repository\AbstractRepository;
use Riadha\News\Data\Models\Post;

class NewsRepository extends AbstractRepository{
    function __construct($model)
    {
        parent::__construct($model);
    }
}
