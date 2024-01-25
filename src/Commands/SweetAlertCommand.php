<?php

namespace Ignatiusn\SweetAlert\Commands;

use Illuminate\Console\Command;

class SweetAlertCommand extends Command
{
    public $signature = 'sweet-alert:install';

    public $description = 'Install package and configure sweet alert';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
