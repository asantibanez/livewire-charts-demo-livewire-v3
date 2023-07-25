<?php

namespace App\Livewire;

use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class TreeMapExample extends Component
{
    #[Reactive]
    public $isInDarkMode;

    #[On('block-clicked')]
    public function handleBlockClicked($event)
    {
        $this->js('new JSConfetti().addConfetti()');
    }

    public function render()
    {
        $treeMapModel = LivewireCharts::treeMapChartModel()
            ->addBlock("Food", 600)
            ->addBlock("Transportation", 300, "#00ff00")
            ->addBlock("Entertainment", 150, "#0000ff")
            ->setDarkMode($this->isInDarkMode)
            ->withOnBlockClickEvent('block-clicked')
        ;

        return view('livewire.tree-map-example')
            ->with([
                'model' => $treeMapModel,
            ]);
    }
}
