<?php

namespace App\Models;

use CodeIgniter\Model;

class TvTarifsModel extends Model
{
    public function GetTarifs()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tv_tarif');
        $builder->orderBy('price', 'DESC');
        $builder->where('active', '1');
        $query   = $builder->get()->getResultArray();
        
        return $query;
    }
}