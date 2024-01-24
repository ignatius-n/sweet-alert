<?php

namespace Ignatiusn\SweetAlert\Commands;

use Illuminate\Console\Command;

class SweetAlertCommand extends Command
{
    public $signature = 'sweet-alert';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
