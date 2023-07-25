<?php

namespace App\Livewire;

use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class ColumnChartExample extends Component
{
    #[Reactive]
    public $isInDarkMode;

    #[On('column-clicked')]
    public function handleColumnClicked($event)
    {
        $this->js('new JSConfetti().addConfetti()');
    }

    public function render()
    {
        $model = LivewireCharts::columnChartModel()
            ->addColumn("Food", 600, "#ff0000")
            ->addColumn("Transportation", 300, "#00ff00")
            ->addColumn("Entertainment", 150, "#0000ff")
            ->withOnColumnClickEventName('column-clicked')
            ->setHorizontal()
            ->setDarkMode($this->isInDarkMode)
            ->setJsonConfig([
                'tooltip.y.formatter' => '(val) => `$${val} million dollars baby!`'
            ])
        ;

        return view('livewire.column-chart-example')
            ->with([
                'model' => $model,
            ]);
    }
}
