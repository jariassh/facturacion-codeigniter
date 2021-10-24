<?php

namespace App\Controllers;

use App\Controllers\TemplateController;

class EditClientController extends BaseController
{
	protected $template;

	public function __construct()
	{
		$this->template = new TemplateController();
	}

	public function index()
	{
		$section = $this->load_edit_clients();
		return $this->template->load_template($section, 'clients');
	}

	private function load_edit_clients()
	{
		return view('modules/section_edit_client');
	}
}
