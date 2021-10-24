<?php

namespace App\Controllers;

use App\Controllers\TemplateController;

class HomeController extends BaseController
{
	protected $template;

	public function __construct()
	{
		$this->template = new TemplateController();
	}

	public function index()
	{
		$section = $this->load_home();
		return $this->template->load_template($section, 'home');
	}

	private function load_home()
	{

		return view('modules/section_home');
	}
}
