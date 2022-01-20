<?php

namespace McGo\Stamplate\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class InstallTemplates extends Command
{
    use FileHelper;

    protected $signature = 'mcgo:stamplate:install';
    protected $description = 'Install files for the first time.';

    public function handle()
    {
        $this->info('Copy files from stamplate install folder.');

        $files = $this->filesAsArray($this->source().'/install');
        foreach ($files as $file) {
            $this->copyInstallFile($file);
        }

        $this->call('mcgo:stamplate:update');
    }
}