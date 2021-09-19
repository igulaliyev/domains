<?php

namespace App\Models;

use CodeIgniter\Model;

class ISPTarifsModel extends Model
{
    public function GetTarifs()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('isp_tarif');
        $builder->orderBy('price', 'ASC');
        $builder->where('active', '1');
        $query   = $builder->get()->getResultArray();
        
        return $query;
    }
}