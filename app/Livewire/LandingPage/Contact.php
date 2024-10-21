<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class Contact extends Component
{

    #[Layout('components.layouts.landing')]
    #[Title('eLearning - Contact')]

    public function render()
    {
        return view('livewire.landing-page.contact');
    }
}
