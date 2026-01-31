<?php

namespace CharlieEtienne\FilamentOfflineNotice;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class FilamentOfflineNotice extends Component
{
    public function render(): View
    {
        return view('filament-offline-notice::offline-notice');
    }
}
