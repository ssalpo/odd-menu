<?php

namespace App\Services;

use App\Models\MenuItem;

class MenuItemService
{
    public function store(array $data): MenuItem
    {
        return MenuItem::create($data);
    }

    public function update(int $id, array $data): bool
    {
        return MenuItem::findOrFail($id)->update($data);
    }

    public function delete(int $id): bool
    {
        return MenuItem::findOrFail($id)->delete();
    }
}
