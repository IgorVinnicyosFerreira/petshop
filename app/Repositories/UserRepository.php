<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository implements RepositoryInterface
{

    public function get($id)
    {
        return User::find($id);
    }

    public function getAll()
    {
        return User::paginate(5);
    }

    public function insert(array $data)
    {
        $user = new User($data);
        $user->password = bcrypt($data['password']);
        $user->save();
    }

    public function delete($id)
    {
        User::destroy($id);
    }

    public function update($id, array $data)
    {
        User::find($id)->update($data);
    }
}
