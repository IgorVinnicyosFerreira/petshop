<?php

namespace App\Repositories;

use App\Models\Pet;

class PetRepository implements RepositoryInterface
{
    public function get($id)
    {
        return Pet::find($id);
    }

    public function getAll()
    {
        return Pet::paginate(5);
    }

    public function insert(array $data)
    {
        $pet = new Pet($data);
        $pet->save();
    }

    public function update($id, array $data)
    {
        Pet::find($id)->update($data);
    }

    public function delete($id)
    {
        Pet::destroy($id);
    }
}
