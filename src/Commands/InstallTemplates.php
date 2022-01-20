<?php

namespace McGo\Statamic\Vorlage\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class InstallTemplates extends Command
{
    use FileHelper;

    protected $signature = 'mcgo:stamplate:install';
    protected $description = 'Install files for the first time.';

    public function handle()
    {
        $this->info('Alle Dateien aus der Vorlage werden überschrieben.');
        $this->info('Überschreibe content Verzeichnis.');

        $files = $this->filesAsArray($this->source().'/install/content');
        foreach ($files as $file) {
            $this->copyInstallFile('/content'. $file);
        }

        $this->copyInstallFile( '/resources/tailwind.config.js');
        $this->copyInstallFile('/resources/css/custom.scss');
        $this->copyInstallFile('/webpack.mix.js');
        $this->copyInstallFile('/package.json');
    }
}