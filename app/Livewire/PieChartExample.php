<?php

namespace App\Livewire;

use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class PieChartExample extends Component
{
    #[Reactive]
    public $isInDarkMode;

    #[NoReturn] #[On('slice-clicked')]
    public function handleSliceClicked($event)
    {
        $this->js('new JSConfetti().addConfetti()');
    }

    public function render()
    {
        $pieChartModel = LivewireCharts::pieChartModel()
            ->addSlice("Food", 600, "#ff0000")
            ->addSlice("Transportation", 300, "#00ff00")
            ->addSlice("Entertainment", 150, "#0000ff")
            ->setDarkMode($this->isInDarkMode)
            ->asDonut()
            ->withOnSliceClickEvent('slice-clicked')
            ->setJsonConfig([
                'plotOptions.pie.startAngle' => -90,
                'plotOptions.pie.endAngle' => 90,
                'plotOptions.pie.offsetY' => 10,
                'grid.padding.bottom' => -180,
            ])
        ;

        return view('livewire.pie-chart-example')
            ->with([
                'model' => $pieChartModel
            ]);
    }
}
