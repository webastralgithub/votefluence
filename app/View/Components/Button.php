<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $type;
    public function __construct($type = 'submit')
    {
        $this->type = $type;
    }

    public function render()
    {
        return view('components.button');
    }
}
