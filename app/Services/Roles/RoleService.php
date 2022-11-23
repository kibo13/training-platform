<?php


namespace App\Services\Roles;


use App\Models\Role;

class RoleService
{
    protected $model;

    public function __construct(Role $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->query()->get();
    }
}
