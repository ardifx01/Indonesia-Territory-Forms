<?php

namespace Teguh02\IndonesiaTerritoryForms\Commands;

use Illuminate\Console\Command;

class IndonesiaTerritoryFormsCommand extends Command
{
    public $signature = 'indonesia-territory-forms';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
