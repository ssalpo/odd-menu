<?php

namespace App\Services;

use App\Models\Menu;

class MenuService
{
    public function store(array $data): Menu
    {
        return Menu::create($data);
    }

    public function update(int $id, array $data): bool
    {
        return Menu::findOrFail($id)->update($data);
    }

    public function delete(int $id): bool
    {
        return Menu::findOrFail($id)->delete();
    }
}
