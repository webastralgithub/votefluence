<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CustomModal extends Component
{
    public $title;
    public $content;
    public $deactivateButtonText;
    public $cancelButtonText;
    public $modalId;

    public function __construct($title, $cancelButtonText,$modalId)
    {
        $this->title = $title;
        $this->cancelButtonText = $cancelButtonText;
        $this->modalId = $modalId;
    }

    public function render()
    {
        return view('components.custom-modal');
    }
}
