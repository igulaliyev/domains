<?php

namespace App\Models;

use CodeIgniter\Model;

class PageModel extends Model
{
    public function ShowPage($id = 1)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('pages');
        $builder->where('id', $id);
        $builder->where('active', '1');
        $query   = $builder->get()->getRowArray();
        return $query;
    }
}