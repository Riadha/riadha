<?php

namespace Riadha\Core\Repository;

interface RepositoryInterface {
    /**
     * Create a new model
     *
     * @param array $payload
     * @return mixed
     */
    public function create(array $payload);
}
