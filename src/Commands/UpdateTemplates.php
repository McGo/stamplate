<?php

namespace McGo\Stamplate\Commands;

use Illuminate\Console\Command;

class UpdateTemplates extends Command
{
    use FileHelper;

    protected $signature = 'mcgo:stamplate:update';
    protected $description = 'Install files for the first time.';

    public function handle()
    {
        $this->info('Copy files from stamplate update folder.');

        $files = $this->filesAsArray($this->source().'/update');

        foreach ($files as $file) {
            $this->copyUpdateFile($file);
        }
        $this->copyUpdateFile('/clear-cache.sh');
    }

}