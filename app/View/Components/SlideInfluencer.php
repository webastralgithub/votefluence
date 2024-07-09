<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SlideInfluencer extends Component
{
    public $avatar;
    public function __construct($avatar = '')
    {
       $this->avatar = $avatar;
    }
    public function render(): View|Closure|string
    {
        return view('components.slide-influencer');
    }
}
