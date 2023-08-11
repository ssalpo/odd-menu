<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function store(array $data): Category
    {
        return Category::create($data);
    }

    public function update(int $id, array $data): bool
    {
        return Category::findOrFail($id)->update($data);
    }

    public function delete(int $id): bool
    {
        return Category::findOrFail($id)->delete();
    }
}
