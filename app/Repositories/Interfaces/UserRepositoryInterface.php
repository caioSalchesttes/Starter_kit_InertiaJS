<?php

namespace App\Repositories\Interfaces;

use App\Models\User;

interface UserRepositoryInterface
{
    public function __construct(User  $model);
    public function store(array $data);
    public function getList();
    public function show($id);
    public function update(array $data, $id);
    public function destroy($id);
}
