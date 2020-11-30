<?php


namespace App\Services;


use App\Repositories\NewspaperRepository;

class NewspaperService implements ServiceInterface
{
    protected $newspaperRepository;

    public function __construct(NewspaperRepository $newspaperRepository)
    {
        $this->newspaperRepository = $newspaperRepository;
    }

    function getAll()
    {
        return $this->newspaperRepository->getAll();
    }

    function findById($id)
    {
        return $this->newspaperRepository->findById($id);
    }


    function add($request, $obj = null)
    {
        $obj->fill($request->all());
        $this->newspaperRepository->save($obj);
    }

    function delete($obj)
    {
        $this->newspaperRepository->delete($obj);
    }

    function update($request, $obj = null)
    {
        // TODO: Implement update() method.
    }
}
