<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @var UserRepository $repository
     */
    protected $repository;

    public function __construct(UserRepository $repository)
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

    public function store(StoreUserRequest $request)
    {
        $this->repository->insert($request->all());
    }

    public function update($id, StoreUserRequest $request)
    {
        $this->repository->update($id, $request->all());
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
    }
}
