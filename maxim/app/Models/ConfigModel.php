<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfigModel extends Model
{
    public function GetConfig()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('config');
        $builder->where('id', '1');
        $query   = $builder->get()->getRowArray();

        return $query;
    }
}