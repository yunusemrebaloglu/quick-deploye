<?php

namespace YunusEmreBaloglu\QuickDeploye\Commands;

use Illuminate\Console\Command;

class GetInfoGeneratedData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quick-deploy:generated_info';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Retrieve generated information for QuickDeploye';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        // Get the URL for the deployment route
        $url = route('quick-deploye.deploye', config('quick-deploye.token'));

        // Display the URL to the user
        $this->info('Using For WEBHOOK');
        $this->info('Generated deployment URL: ' . $url);
    }
}
