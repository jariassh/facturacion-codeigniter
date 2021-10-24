<?php

namespace App\Controllers;

use App\Controllers\TemplateController;

class NewBillController extends BaseController
{
	protected $template;

	public function __construct()
	{
		$this->template = new TemplateController();
	}

	public function index()
	{
		$section = $this->load_new_bill();
		return $this->template->load_template($section, 'bills');
	}

	private function load_new_bill()
	{
		return view('modules/section_add_bill');
	}
}
