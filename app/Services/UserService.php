<?php


namespace App\Services;


use App\Repositories\UserRepository;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    function getAll()
    {
        return $this->userRepository->getAll();
    }

    function findById($id)
    {
        return $this->userRepository->findById($id);
    }

    function add($request, $obj = null)
    {
        // TODO: Implement add() method.
    }

    function delete($obj)
    {
        // TODO: Implement delete() method.
    }

    function update($request, $obj = null)
    {
        $obj->fillable($request->all());
        $this->userRepository->save($obj);
    }
}
