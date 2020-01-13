<?php

namespace App\Repositories;

interface RepositoryInterface
{
    /**
     * @param int
     * @return mixed
     */
    public function get($id);
    /**
     * @return mixed
     */
    public function getAll();
    /**
     * @param array
     * @return mixed
     */
    public function insert(array $data);
    /**
     * @param int
     */
    public function delete($id);
    /**
     * @param int
     * @param array
     */
    public function update($id, array $data);
}
