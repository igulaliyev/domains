<?php

namespace App\Controllers;

use App\Models\ISPTarifsModel;
use App\Models\TvTarifsModel;
use App\Models\FaqModel;
use App\Models\ConfigModel;
use App\Models\PageModel;
use App\Models\SliderModel;


class Home extends BaseController
{
	public function index()
	{
        $model = new SliderModel();
        $model2 = new ConfigModel();
		$data = [
			'title' => lang("App.main_page_title"),
            'sliders' => $model->GetSliders(),
            'config' => $model2->GetConfig(),
		];
		echo view('header', $data);
        echo view('index', $data);
		echo view('footer', $data);
	}
	
	public function contact()
	{
	    $model = new ConfigModel();
		$data = [
			'title' => lang("App.contact_page_title"),
            'config' => $model->GetConfig(),
		];

	    echo view('header', $data);
	    echo view('contact', $data);
	    echo view('footer', $data);
	}
	
	public function about()
	{
	    $model = new PageModel();
		$data = [
			'title' => lang("App.about_page_title"),
            'page' => $model->ShowPage('1'),
		];
	    echo view('header', $data);
	    echo view('page', $data);
	    echo view('footer', $data);
	}

	public function services()
	{
		$data = [
			'title' => lang("App.services_page_title"),
		];
		echo view('header', $data);
		//echo view('about');
		echo view('footer', $data);
	}

	public function tv()
	{
	    $model = new TvTarifsModel();
		$data = [
			'title' => lang("App.tv_page_title"),
            'tarifs' => $model->getTarifs(),
		];
	    echo view('header', $data);
        echo view('tv', $data);
	    echo view('footer', $data);
	}
	
	public function internet()
	{
	    $model = new ISPTarifsModel();
	    $data = [
		'title' => lang("App.internet_page_title"),
		'tarifs' => $model->getTarifs(),
		];
	    echo view('header', $data);
	    echo view('internet', $data);
	    echo view('footer', $data);
	}

	public function faq()
    {
    	$model = new FaqModel();
        $data = [
            'title' => lang("App.faq_page_title"),
			'tabs' => $model->GetFaqTabs(),
			'faqs' => $model->GetFaq(),
        ];

        echo view('header', $data);
        echo view('faq', $data);
        echo view('footer', $data);
    }

    public function securitysystems()
{
    $model = new PageModel();
    $data = [
        'title' => 'Тест',
        'page' => $model->ShowPage('2'),
        ];
    echo view('header', $data);
    echo view('page', $data);
    echo view('footer', $data);
}

public function telephony()
{
    $model = new PageModel();

    $data = [
        'title' => 'Тест',
        'page' => $model->ShowPage('3'),
    ];
    echo view('header', $data);
    echo view('page', $data);
    echo view('footer', $data);
}

public function intercom()
{
    $model = new PageModel();

    $data = [
        'title' => 'Тест',
        'page' => $model->ShowPage('4'),
    ];
    echo view('header', $data);
    echo view('page', $data);
    echo view('footer', $data);
}

public function itservices()
{
    $model = new PageModel();

    $data = [
        'title' => 'Тест',
        'page' => $model->ShowPage('5'),
    ];
    echo view('header', $data);
    echo view('page', $data);
    echo view('footer', $data);
}

public function privacy()
{
    $model = new PageModel();

    $data = [
        'title' => 'Privacy Policy',
        'page' => $model->ShowPage('2'),
    ];
    echo view('header', $data);
    echo view('page', $data);
    echo view('footer', $data);
}
public function terms()
{
    $model = new PageModel();

    $data = [
        'title' => 'Terms & Conditions',
        'page' => $model->ShowPage('3'),
    ];
    echo view('header', $data);
    echo view('page', $data);
    echo view('footer', $data);
}
}
