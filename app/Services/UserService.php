<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;

class UserService
{
    private $repo;

    public function __construct(UserRepository $repo)
    {
        $this->repo = $repo;
    }

    public function store(array $data)
    {
        $this->repo->store($data);
    }

    public function getList()
    {
        $this->repo->getList();
    }

    public function show($id)
    {
        $this->repo->show($id);
    }

    public function update(array $data, $id)
    {
        $this->repo->update($data, $id);
    }

    public function destroy($id)
    {
        $this->repo->destroy($id);
    }
}
