<?php

namespace App\Controllers;

use App\Controllers\TemplateController;

class ListClientsController extends BaseController
{
	protected $template;

	public function __construct()
	{
		$this->template = new TemplateController();
	}

	public function index()
	{
		$section = $this->load_clients();
		return $this->template->load_template($section, 'clients');
	}

	private function load_clients()
	{

		return view('modules/section_clients');
	}
}
