<?php


namespace App\Repositories;


use App\Models\User;
use Dotenv\Repository\RepositoryInterface;

class UserRepository extends BaseRepository implements RepositoryInterface
{
    protected $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    function getAll()
    {
        return $this->userModel->all();
    }

    function findById($id)
    {
        return $this->userModel->findOrFail($id);
    }

    public function has(string $name)
    {
        // TODO: Implement has() method.
    }

    public function get(string $name)
    {
        // TODO: Implement get() method.
    }

    public function set(string $name, string $value)
    {
        // TODO: Implement set() method.
    }

    public function clear(string $name)
    {
        // TODO: Implement clear() method.
    }
}
