<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Storage;

class HeroSectionSliderRight extends Component
{
    public $avatars;

    public function __construct($avatars = [])
    {
        $this->avatars = $avatars;
    }

    public function render(): View|Closure|string
    {
        if (empty($this->avatars)) {
            $files = Storage::disk('public_dir')->allFiles('influencers');

            foreach ($files as $file) {
                $this->avatars[] = basename($file);
            }
        }
        
        return view('components.hero-section-slider-right', ['avatars' => $this->avatars]);
    }
}
