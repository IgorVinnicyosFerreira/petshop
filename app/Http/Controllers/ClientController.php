<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Repositories\ClientRepository;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * @var ClientRepository $repository
     */
    protected $repository;

    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->getAll();
    }

    public function store(StoreClientRequest $request)
    {
        $this->repository->insert($request->all());
    }

    public function show($id)
    {
        return $this->repository->get($id);
    }

    public function update($id, StoreClientRequest $request)
    {
        $this->repository->update($id, $request->all());
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
    }
}
