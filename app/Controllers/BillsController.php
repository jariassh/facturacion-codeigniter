<?php

namespace App\Controllers;

use App\Controllers\TemplateController;

class BillsController extends BaseController
{
	protected $template;

	public function __construct()
	{
		$this->template = new TemplateController();
	}

	public function index()
	{
		$section = $this->load_bills();
		return $this->template->load_template($section, 'bills');
	}

	private function load_bills()
	{

		return view('modules/section_bills');
	}
}
