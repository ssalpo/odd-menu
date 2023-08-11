<?php

namespace App\Services;

use App\Models\Place;

class PlaceService
{
    public function store(array $data): Place
    {
        return Place::create($data);
    }

    public function update(int $id, array $data): bool
    {
        return Place::findOrFail($id)->update($data);
    }

    public function delete(int $id): bool
    {
        return Place::findOrFail($id)->delete();
    }
}
