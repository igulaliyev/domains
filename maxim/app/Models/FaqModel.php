<?php

namespace App\Models;

use CodeIgniter\Model;

class FaqModel extends Model
{
	public function GetFaqTabs()
	{
		$db      = \Config\Database::connect();
		$builder = $db->table('faq_tabs');
		$builder->orderBy('pos', 'ASC');
		$query   = $builder->get()->getResultArray();

		return $query;
	}
	public function GetFaq()
	{
		$db      = \Config\Database::connect();
		$builder = $db->table('faq');
		$builder->orderBy('pos', 'ASC');
		$query   = $builder->get()->getResultArray();

		return $query;
	}
}