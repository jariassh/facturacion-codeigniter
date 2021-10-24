<?php

namespace App\Controllers;

use App\Controllers\TemplateController;

class TrashController extends BaseController
{
	protected $template;

	public function __construct()
	{
		$this->template = new TemplateController();
	}

	public function index()
	{
		$section = $this->load_trash();
		return $this->template->load_template($section, 'trash');
	}

	private function load_trash()
	{

		return view('modules/section_trash');
	}
}
