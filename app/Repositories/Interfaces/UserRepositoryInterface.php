<?php

namespace App\Repositories\Interfaces;
use Illuminate\Database\Eloquent\Model;

interface UserRepositoryInterface
{
    public function __construct(Model  $model);
    public function store(array $data);
    public function getList();
    public function show($id);
    public function update(array $data, $id);
    public function destroy($id);
}
