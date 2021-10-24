<?php

namespace App\Controllers;

use App\Controllers\TemplateController;

class NewClientController extends BaseController
{
	protected $template;

	public function __construct()
	{
		$this->template = new TemplateController();
	}

	public function index()
	{
		$section = $this->load_new_client();
		return $this->template->load_template($section, 'clients');
	}

	private function load_new_client()
	{
		return view('modules/section_add_client');
	}
}
