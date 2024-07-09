<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputField extends Component
{
    public $type;
    public $name;
    public $label;
    public $value;
    public $inputWrapperCss;
    public $inputLabelCss;
    public $inputInputCss;

    public function __construct($type = 'text', $name, $label, $value = '', $inputWrapperCss = '', $inputLabelCss = '', $inputInputCss = '')
    {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->inputWrapperCss = $inputWrapperCss;
        $this->inputLabelCss = $inputLabelCss;
        $this->inputInputCss = $inputInputCss;
    }

    public function render()
    {
        return view('components.input-field');
    }
}
