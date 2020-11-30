<?php


namespace App\Services;


interface ServiceInterface
{
    function getAll();
    function add($request, $obj = null);
    function delete($obj);
    function update($request, $obj = null);
    function findById($id);
}
