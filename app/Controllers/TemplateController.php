<?php

namespace App\Controllers;

class TemplateController extends BaseController
{
    public function load_template($section, $activated = '')
    {
        $parameters['enable'] = $activated;
        $data['aside'] = view('modules/template_aside', $parameters);
        $data['content'] = $section;
        return view('template_home', $data);
    }
}
