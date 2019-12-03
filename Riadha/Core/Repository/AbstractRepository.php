<?php

/**
 * This relies heavily on the guarded or fillable model properties.
 *
 * Implements the generic model functions and allows individual repositories to do the rest.
 */

namespace Riadha\Core\Repository;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository implements RepositoryInterface {
    /**
     * The model that we want to work with. Must be an Eloquent model.
     *
     * @var Model
     */
    protected $model;

    function __construct($model)
    {
        $this->model = new $model;
    }

    /**
     * Create a new model
     *
     * @param array $payload
     *
     * @return Model
     */
    public function create(array $payload) {
        return $this->model->create($payload);
    }

    /**
     * Count the number of models in storage
     *
     * @return int
     */
    public function getCount() {
        return $this->model->count();
    }

    /**
     * Get a collection of the models
     */
    public function index() {
        return $this->model->paginate(15);
    }
}
