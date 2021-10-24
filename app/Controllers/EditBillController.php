<?php

namespace App\Controllers;

use App\Controllers\TemplateController;

class EditBillController extends BaseController
{
	protected $template;

	public function __construct()
	{
		$this->template = new TemplateController();
	}

	public function index()
	{
		$section = $this->load_edit_bill();
		return $this->template->load_template($section, 'bills');
	}

	private function load_edit_bill()
	{
		return view('modules/section_edit_bill');
	}
}
