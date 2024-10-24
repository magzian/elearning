<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class Testimonial extends Component
{

    #[Layout('components.layouts.landing')]
    #[Title('eLearning - Testimonial')]

    public function render()
    {
        return view('livewire.landing-page.testimonial');
    }
}
