<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Input extends Component {

	public $label;
	public $class;

	public function __construct($label = '', $class = '') {

		$this->label = $label;
		$this->class = $class;
	}

	public function render() {
		return view('components.form.input');
	}

}
