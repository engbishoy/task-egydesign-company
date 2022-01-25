<?php

namespace Modules\Core\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Modules\Permission\Services\PermissionService;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class SyncPermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sengine:sync-permissions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Syncs permissions using modules config.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try {
            PermissionService::clearCache(); // we clear cache to avoid any conflicts
            _sync_permissions();
            $this->info('Permissions synced');
        } catch (\Throwable $th) {
            $this->error($th->getMessage());
        }
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['example', InputArgument::REQUIRED, 'An example argument.'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
        ];
    }
}
