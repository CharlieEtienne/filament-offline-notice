<?php

namespace CharlieEtienne\FilamentOfflineNotice\Commands;

use Illuminate\Console\Command;

class FilamentOfflineNoticeCommand extends Command
{
    public $signature = 'filament-offline-notice';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
