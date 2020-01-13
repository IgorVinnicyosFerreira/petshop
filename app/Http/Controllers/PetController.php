<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePetRequest;
use App\Repositories\PetRepository;
use Illuminate\Http\Request;

class PetController extends Controller
{

    /**
     * @var PetRepository @repository
     */
    protected $repository;

    public function __construct(PetRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->getAll();
    }

    public function show($id)
    {
        return $this->repository->get($id);
    }

    public function store(StorePetRequest $request)
    {
        $this->repository->insert($request->all());
    }

    public function update($id, StorePetRequest $request)
    {
        $this->repository->update($id, $request->all());
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
    }
}
