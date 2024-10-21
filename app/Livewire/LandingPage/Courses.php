<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class Courses extends Component
{
    #[Layout('components.layouts.landing')]
    #[Title('eLearning - Courses')]

    public function render()
    {
        return view('livewire.landing-page.courses');
    }
}
