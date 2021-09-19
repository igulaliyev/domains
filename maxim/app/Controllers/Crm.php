<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Crm extends BaseController
{
	public function index()
	{
		$data = [
			'title' => lang("App.main_page_title"),
		];
		echo view('crm/index');
	}
}