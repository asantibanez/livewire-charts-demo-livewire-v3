<?php

namespace App\Livewire;

use Livewire\Component;

class ChartsContainer extends Component
{
    public $isInDarkMode = false;

    public function setDarkMode()
    {
        $this->isInDarkMode = true;
    }

    public function setLightMode()
    {
        $this->isInDarkMode = false;
    }

    public function render()
    {
        return view('livewire.charts-container');
    }
}
