<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface DocumentRepositoryInterface {
    public function index(): Collection;
    // public function store($data);
    // public function show($id);
    // public function update($data, $id);
    // public function destroy($id);
}