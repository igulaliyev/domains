<?php

namespace App\Models;

use CodeIgniter\Model;

class SliderModel extends Model
{
    public function GetSliders()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('sliders');
        $builder->where('active', '1');
        $query   = $builder->get()->getResultArray();

        return $query;
    }
}