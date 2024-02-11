<?php

namespace App\Models;

class MockDb 
{
    public function save($data)
    {
        return $data;
    }
}
