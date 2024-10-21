<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Landing extends Component
{

    #[Layout('components.layouts.landing')]
    
    public function render()
    {
        return view('livewire.landing-page.landing');
    }
}
