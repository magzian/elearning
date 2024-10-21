<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class AboutUs extends Component
{

    #[Layout('components.layouts.landing')]
    #[Title('eLearning - About Us')]

    public function render()
    {
        return view('livewire.landing-page.about-us');
    }
}
