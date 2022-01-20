<?php

namespace McGo\Statamic\Vorlage\Commands;

use Illuminate\Console\Command;

class UpdateTemplates extends Command
{
    use FileHelper;

    protected $signature = 'mcgo:stamplate:update';
    protected $description = 'Install files for the first time.';

    public function handle()
    {
        $this->info('Alle Dateien aus der Vorlage werden überschrieben.');
        $this->info('Überschreibe content Verzeichnis.');

        $files = $this->filesAsArray($this->source().'/update/resources');

        foreach ($files as $file) {
            $this->copyUpdateFile('/resources'.$file);
        }
        $this->copyUpdateFile('/clear-cache.sh');
    }

}