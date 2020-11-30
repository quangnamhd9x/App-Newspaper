<?php


namespace App\Repositories;


class BaseRepository
{
    function save($obj){
        $obj->save();
    }

    function delete($obj){
        $obj->delete();
    }
}
