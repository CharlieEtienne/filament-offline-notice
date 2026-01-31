<?php

namespace CharlieEtienne\FilamentOfflineNotice;

use Livewire\Component;
use Illuminate\Contracts\View\View;

class FilamentOfflineNotice extends Component
{
    public function render(): View
    {
        return view('filament-offline-notice::offline-notice');
    }
}
