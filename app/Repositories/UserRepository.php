<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function store(array $data)
    {
        $this->model->create($data);
    }

    public function getList()
    {
        $this->model->get();
    }

    public function show($id)
    {
        $this->model->find($id);
    }

    public function update(array $data, $id)
    {
        $this->model->find($id)->update($data);
    }

    public function destroy($id)
    {
        $this->model->destroy($id);
    }
}
