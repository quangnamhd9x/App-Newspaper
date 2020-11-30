<?php


namespace App\Repositories;


use App\Models\Newspaper;
use Dotenv\Repository\RepositoryInterface;

class NewspaperRepository extends BaseRepository implements RepositoryInterface
{
    protected $newspaperModel;

    public function __construct(Newspaper $newspaperModel)
    {
        $this->newspaperModel = $newspaperModel;
    }

    function getAll(){
        return $this->newspaperModel->all();
    }

    function findById($id){
        return $this->newspaperModel->findOrFail($id);
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
