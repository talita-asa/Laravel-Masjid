<?php 

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\VIew\View;

class LandingLayout extends Component
{
    public function render(): View
    {
        return view('layouts.landing');
    }
}