<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Input extends Component
{
	public $name;
	public $label;
	public $type;
	public $placeholder;

	public function __construct($name, $label = '', $type = 'text', $placeholder = '')
	{
		$this->name = $name;
		$this->label = $label;
		$this->type = $type;
		$this->placeholder = $placeholder;
	}

	public function render()
	{
		return view('components.form.input');
	}
}
