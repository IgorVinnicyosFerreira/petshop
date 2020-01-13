<?php

namespace App\Repositories;

use App\Models\Client;

class ClientRepository implements RepositoryInterface
{

    public function get($id)
    {
        return Client::find($id);
    }

    public function getAll()
    {
        return Client::paginate(5);
    }

    public function insert(array $data)
    {
        $client = new Client($data);
        $client->save();
    }

    public function delete($id)
    {
        Client::destroy($id);
    }

    public function update($id, array $data)
    {
        Client::find($id)->update($data);
    }
}
