<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class Team extends Component
{

    #[Layout('components.layouts.landing')]
    #[Title('eLearning - Team')]

    public function render()
    {
        return view('livewire.landing-page.team');
    }
}
